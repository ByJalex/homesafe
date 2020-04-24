var product = new Vue({
    el: '#prods',
    data: {
        /*EXPLORAR VARIABLES*/
        popularProducts: [],
    },
    mounted: function () {
        this.getPopularProducts();
    },
    methods: {
        /*PETICIONES HTTP*/
        getPopularProducts: function () {
            axios.get('http://homesafe-sv.herokuapp.com/app/core/api/products.php?accion=popularProducts')
                .then(function (response) {
                    product.popularProducts = response.data.popularProducts;
                });
        },
    }
})

