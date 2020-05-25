const product = new Vue({
    el: '#prod',
    data: {
        popularProducts: []
    },
    mounted: function () {
        this.getPopularProducts();
    },
    computed: {

    },
    methods: {
        getPopularProducts: function () {
            axios.get('https://homesafe-sv.herokuapp.com/api/product/popular')
                .then(function (response) {
                    product.popularProducts = response.data.popularProducts;
                });
        },
    },

})