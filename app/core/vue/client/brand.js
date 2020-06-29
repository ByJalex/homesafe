const brand = new Vue({
    el: '#brand',
    data: {
        allbrand: [],
        urlParameter: '',
        counter: 0
    },
    mounted(){
        this.getAllbrandIndividual();
        this.getUrlParam();
    },
    methods: {
        getAllbrandIndividual: function () {
            let params = new URLSearchParams(location.search);
            axios.get('http://localhost/homesafe/api/brand/allBrandProducts?name='+ params.get('c'))
             .then(response=>(
                (this.allbrand=response.data.allbrand),
                (this.counter = this.allbrand.length)
             ))
        },
        getUrlParam: function () {
            let params = new URLSearchParams(location.search);
            this.urlParameter = params.get('c');
        },
    }
})