const product = new Vue({
    el: '#prod',
    data: {
        popularProducts: [],
        loaderProduct: true
    },
    mounted: function () {
        this.getPopularProducts();
    },
    computed: {

    },
    methods: {
        add: function(id, cantidad, imagen, nombre, precio){
            cart.addTocCart(id, cantidad, imagen, nombre, precio);
        },
        getPopularProducts: function () {
            axios.get('http://localhost/homesafe/api/product/popular')
                .then(function (response) {
                    product.popularProducts = response.data.popularProducts;
                    product.loaderProduct = false;
                });
        },
    },

})