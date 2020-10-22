const search_s = new Vue({
    el: '#search_s',
    data: {
        products: [],
        counter: 0,
        loaderSearch: true,
    },
    mounted() {
        this.getUserInformation();
    },
    methods: {
        add: function(id, cantidad, imagen, nombre, precio) {
            cart.addTocCart(id, cantidad, imagen, nombre, precio);
        },
        getUserInformation: function() {
            let params = new URLSearchParams(location.search);
            const p = params.get('p');
            axios.get('https://homesafe-sv.herokuapp.com/api/product/search?p=' + p)
                .then(response => (
                    (this.products = response.data.search),
                    (this.counter = this.products.length),
                    (this.loaderSearch = false)
                ))
        }
    }
})