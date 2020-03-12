var app = new Vue({
    el: '#app',
    data: {
        //Ruta para dirigir a la vista de un producto unitario
        seeProd: 'product.php',
        allErrorsPopularProducts: [],
        allProductsPopular: [],
        tittle: 'Productos mas comprados',
    },
    mounted: function () {
        this.getPopularProducts();
    },
    methods: {
        redirectPopularProduct: function (index) {
            var ruta = this.seeProd + '?id_prod=' + index;
            return ruta;
        },
        getPopularProducts: function () {
            axios.get('http://localhost/homesafe/app/api/products.php?accion=popularProducts')
                .then(function (response) {
                    app.allProductsPopular = response.data.popularProducts;
                    app.allErrorsPopularProducts = response.data.error;
                });
        },
    },
    computed: {

    },
})