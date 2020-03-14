var app = new Vue({
    el: '#app',
    data: {
        //Ruta para dirigir a la vista de un producto unitario
        seeProd: 'product.php',
        allErrorsPopularProducts: [],
        allReviews: [],
        id0btenido: 0
    },
    mounted: function () {

        this.getReviews();
    },
    methods: {
        getReviews: function () {
            axios.get('http://localhost/homesafe/app/api/review.php?accion=getReview&id_producto=' + this.getQueryVariable('id_prod') + '')
                .then(function (response) {
                    app.allReviews = response.data.reviews;
                });
        },
        //Metodo para obtener variable url
        getQueryVariable: function (variable) {
            var query = window.location.search.substring(1);
            var vars = query.split("&");
            for (var i = 0; i < vars.length; i++) {
                var pair = vars[i].split("=");
                if (pair[0] == variable) {
                    return pair[1];
                }
            }
            return false;
        }
    },
    computed: {

    },
})