const authclient = new Vue({
  el: "#authclient",
  data: {
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
  },
  mounted() {
    this.test();
  },
  methods: {
    reg: function () {
      if(register.nombre == ""  regis){
        swal("Error", "Campos vacios", "error");
      }else{
        if (this.register.clave != this.repeatPass) {
            swal("Error", "Claves incorrectas", "error");
          } else {
            this.registerCliente();
          }
      }
    },
    test: function () {
      console.log("asd");
    },
    log: function () {
      this.button = "Cargando...";
      if (
        !authclient.authData.user == "" ||
        !authclient.authData.password == ""
      ) {
        var formData = authclient.toFormData(authclient.authData);
        axios
          .post("http://localhost/homesafe/api/auth/authclient", formData, {
            headers: {
              "Content-Type": "multipart/form-data",
            },
          })
          .then(function (response) {
            if ((authclient.respuesta = response.data.usuario)) {
              window.history.back();
              //console.log("Credenciales correctas");
            } else {
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
    registerCliente: function () {
      var formData = authclient.toFormData(authclient.register);
      axios
        .post("http://localhost/homesafe/api/auth/Registerclient", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then(function (response) {
          if(response.data.error){
            swal("Error", "El usuario ya existe", "error");
          }else{
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
    toFormData: function (obj) {
      var form_data = new FormData();
      for (var key in obj) {
        form_data.append(key, obj[key]);
      }
      return form_data;
    },
  },
});
