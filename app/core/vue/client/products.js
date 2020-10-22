const product = new Vue({
    el: '#prod',
    data: {
        popularProducts: [],
        loaderProduct: true
    },
    mounted: function() {
        this.getPopularProducts();
    },
    computed: {

    },
    methods: {
        add: function(id, cantidad, imagen, nombre, precio) {
            cart.addTocCart(id, cantidad, imagen, nombre, precio);
        },
        //esta funcion siver para cargar los productos mas populares en la tienda, los carga en Home
        getPopularProducts: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/product/popular')
                .then(function(response) {
                    product.popularProducts = response.data.popularProducts;
                    product.loaderProduct = false;
                });
        },
    },

})