const login = new Vue({
    el: '#login',
    data: {
        dataUser: {
            correo: '',
            clave: ''
        },
        dataRegister: {
            nombre: '',
            correo: '',
            usuario: '',
            clave: '',
            repetirClave: ''
        },
        response: [],
        responseRegister: [],
        myUsername: []
    },
    mounted: function () {
        this.getNavinf();
    },
    methods: {
        getNavinf: function () {
            axios.get('../api/client.php?accion=GetNavInformation')
                .then(function (response) {
                    login.myUsername = response.data.navInf;
                });
        },
        validateLogin: function () {
            let response = true;
            if (this.dataUser.correo == '' || this.dataUser.clave == '') {
                //alert('Por favor rellenar todos los campos');
                swal("Error", "Por favor rellenar todos los campos.", "error");
                response = false;
            }
            return response;
        },
        validateRegister: function () {
            let response = true;
            if (this.dataRegister.correo == '' || this.dataRegister.clave == '' || this.dataRegister.nombre == '' || this.dataRegister.usuario == '' || this.dataRegister.repetirClave == '') {
                //alert('Por favor rellenar todos los campos');
                swal("Error", "Por favor rellenar todos los campos.", "error");
                response = false;
            }
            return response;
        },
        validatePassword: function () {
            let response = true;
            if (this.dataRegister.clave != this.dataRegister.repetirClave) {
                //alert('Las claves no coinciden');
                swal("Error", "Las claves no coinciden.", "error");
                response = false;
            }
            return response;
        },
        loginUser: function () {
            if (this.validateLogin() == true) {
                var formData = login.toFormData(login.dataUser);
                axios.post('../api/client.php?accion=login', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(function (response) {
                        if (login.response = response.data.clientData) {
                            window.location = '../../view/client/account.php';
                        } else {
                            swal("Error", "Credenciales incorrectas.", "error");
                        }
                    });
            }
        },
        registerUser: function () {
            if (this.validateRegister() == true) {
                if (this.validatePassword() == true) {
                    var formData = login.toFormData(login.dataRegister);
                    axios.post('../api/client.php?accion=register', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                        .then(function (response) {
                            if (login.responseRegister = response.data.dataDuplicated) {
                                swal("Error", "Este usuario parece que ya esta registrado.", "error");
                                //alert('Este usuario parece que ya esta registrado');
                            } else {
                                //swal("Exito", "Exito al registrarse.", "success");
                                //alert('Exito al registrarse');
                                window.location = '../../view/client/login.php';
                            }
                        });
                }
            }
        },
        toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
    },
})