const authclient = new Vue({
    el: "#authclient",
    data: {
        //Se crean todas las varbiales globales de nuestro proyecto para la autorizacion de usuarios
        authData: {
            user: "",
            password: "",
        },
        repeatPass: "",
        respuesta: [],
        error: [],
        button: "Iniciar sesión",
        register: {
            correo: "",
            nombre: "",
            usuario: "",
            clave: "",
            direccion: "",
            telefono: "",
        },
        textPasswordValidity: 'text-danger',
        textPasswordVerify: '',
        intentosDeLogin: 0
    },
    mounted() {
        this.test();
    },
    methods: {
        verifyPassword() {
            regex = /^(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ]/;
            if (this.register.clave.length < 8) {
                this.textPasswordValidity = "text-danger"
                this.textPasswordVerify = "No cumple con 8 digitos"
            } else {
                if (!regex.test(this.register.clave)) {
                    this.textPasswordValidity = "text-danger"
                    this.textPasswordVerify = "Necesito caracteres alfanumericos, una mayuscula y un caracter especial."
                } else {
                    this.textPasswordValidity = "text-success"
                    this.textPasswordVerify = "Valido"
                }
            }
        },
        //Este metodo sirve para validar que los campos sean correctamente llenados
        reg: function() {
            if (this.register.nombre == "" || this.register.correo == "" || this.register.usuario == "" || this.register.direccion == "" || this.register.telefono == "" || this.register.clave == "" || this.register.repeatPass == "") {
                swal("Error", "Campos vacios", "error");
            } else {
                if (this.register.clave != this.repeatPass) {
                    swal("Error", "Claves incorrectas", "error");
                } else {
                    this.registerCliente();
                }
            }
        },
        //Metodo para testeat el estado del boton
        test: function() {
            console.log("Fixed all problems in the authorization..");
        },
        blockUser() {
            axios.get("https://homesafe-sv.herokuapp.com/homesafe/api/auth/blockAccount?username=" + this.authData.user)
                .then(respose => {
                    swal("Error", "Se bloqueo tu cuenta por intento de hackeo", "error");
                })
        },
        //Este metodo valida si los campos ingresados son los deseados o correctos.
        log: function() {

            this.button = "Cargando...";
            if (!authclient.authData.user == "" ||
                !authclient.authData.password == ""
            ) {
                var formData = authclient.toFormData(authclient.authData);
                axios
                    .post("https://homesafe-sv.herokuapp.com/homesafe/api/auth/authclient", formData, {
                        headers: {
                            "Content-Type": "multipart/form-data",
                        },
                    })
                    .then(function(response) {
                        if ((authclient.respuesta = response.data.usuario)) {
                            //window.history.back();
                            //console.log("Credenciales correctas");
                            if (response.data.usuario.block) {
                                swal("Error", "Tu cuenta fue bloqueada, intenta más tarde.", "error");
                            } else {
                                window.history.back();
                            }
                        } else {
                            authclient.intentosDeLogin++;
                            authclient.intentosDeLogin > 3 ? authclient.blockUser() : ''
                            swal("Error", "Credenciales incorrectas", "error");
                            //alert('Credenciales incorrectas');)
                            authclient.button = "Iniciar sesión";
                            //console.log("Credenciales incorrectas");
                        }
                    });
            } else {
                alert("Debes llenar todos los campos");
            }
        },
        //Este metodo es escencias para el registro del cliente.
        registerCliente: function() {
            var formData = authclient.toFormData(authclient.register);
            axios
                .post("https://homesafe-sv.herokuapp.com/homesafe/api/auth/Registerclient", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then(function(response) {
                    if (response.data.error) {
                        swal("Error", "El usuario ya existe", "error");
                    } else {
                        swal("Exito", "Agregado correctamente", "success");
                        authclient.register.correo = "";
                        authclient.register.nombre = "";
                        authclient.register.usuario = "";
                        authclient.register.clave = "";
                        authclient.repeatPass = "";
                        authclient.register.direccion = "";
                        authclient.register.telefono = "";
                    }
                });
        },
        //Este metodo sirve para enviar los datos a travez de POST como una array
        toFormData: function(obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
    },
});