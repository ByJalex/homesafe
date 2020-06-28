const authclient = new Vue({
    el: '#authclient',
    data: {
        authData: {
            user: '',
            password: '',
        },
        respuesta: [],
        error: []
    },
    mounted() {
        this.test();
    },
    methods: {
        test: function(){
            console.log('asd');
        },
        loginUser: function () {
            console.log('click');
            if (!authclient.authData.user == '' || !authclient.authData.password == '') {
                var formData = authclient.toFormData(authclient.authData);
                axios.post('http://localhost/homesafe/api/auth/authclient', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(function (response) {
                        if (authclient.respuesta = response.data.usuario) {
                            window.location.href ='http://localhost/homesafe/home';
                            //console.log("Credenciales correctas");
                        } else {
                            // swal("Error", "Credenciales incorrectas mierda fea :)", "error");
                            //alert('Credenciales incorrectas');
                            console.log("Credenciales incorrectas");
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