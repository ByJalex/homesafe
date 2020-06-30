const authclient = new Vue({
    el: '#authclient',
    data: {
        authData: {
            user: '',
            password: '',
        },
        respuesta: [],
        error: [],
        button: 'Iniciar sesión'
    },
    mounted() {
        this.test();
    },
    methods: {
        test: function(){
            console.log('asd');
        },
        log: function () {
            this.button = 'Cargando...';
            if (!authclient.authData.user == '' || !authclient.authData.password == '') {
                var formData = authclient.toFormData(authclient.authData);
                axios.post('https://homesafe-sv.herokuapp.com/api/auth/authclient', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(function (response) {
                        if (authclient.respuesta = response.data.usuario) {
                            window.history.back();
                            //console.log("Credenciales correctas");
                        } else {
                            swal("Error", "Credenciales incorrectas", "error");
                            //alert('Credenciales incorrectas');)
                            authclient.button = 'Iniciar sesión';
                            //console.log("Credenciales incorrectas");

                        }
                    });
            } else {
                alert('Debes llenar todos los campos');
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