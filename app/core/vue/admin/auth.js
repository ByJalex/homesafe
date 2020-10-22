// Uso y ejemplos en: http://blog.ikhuerta.com/get-extraer-variables-por-get-en-javascript
var $_getVariables = { isset: false };
var $_getGlobalVariables = {};
var $_GETAllVariables = function () {
    var scripts = document.getElementsByTagName("script");
    for (var i = 0; i < scripts.length; i++) {
        var script = (scripts[i].src + "").split("/");
        script = script[script.length - 1].split("?", 2);
        if (script.length > 1) {
            var parameters = script[1].split("&")
            for (var j = 0; j < parameters.length; j++) {
                var vars = parameters[j].split("=");
                if (!$_getVariables[script[0]]) $_getVariables[script[0]] = {};
                $_getVariables[script[0]][vars[0]] = vars[1];
                $_getGlobalVariables[vars[0]] = vars[1];
            }
        }
    }
    $_getVariables.isset = true;
};
$_GET = function (paramToGet, jsFile) {
    if (!$_getVariables.isset)
        $_GETAllVariables();
    if (jsFile)
        return $_getVariables[jsFile][paramToGet];
    else
        return $_getGlobalVariables[paramToGet];
};

var getParameter = $_GET("m");
if(getParameter == "dev"){
    // var a = "Modo dev";
    var uri = "https://homesafe-sv.herokuapp.com/homesafe/";
}else{
    // var a = "Modo produccion";
    var uri = "http://homesafe-sv.herokuapp.com/";
}

var authadmin = new Vue({
    el: '#authadmin',
    data: {
        authData: {
            user: '',
            password: '',
        },
        respuesta: [],
        error: []
    },
    mounted() {
        console.log(uri);
    },
    methods: {
        login: function () {
            if (!authadmin.authData.user == '' || !authadmin.authData.password == '') {
                var formData = authadmin.toFormData(authadmin.authData);
                axios.post(uri+'api/auth/authadmin', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(function (response) {
                        if (authadmin.respuesta = response.data.usuario) {
                            window.location.href = uri+'privatesite/home';
                        } else {
                            // swal("Error", "Credenciales incorrectas mierda fea :)", "error");
                            alert('Credenciales incorrectas');
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