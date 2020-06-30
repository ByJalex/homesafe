const brand_c = new Vue({
    el: '#brand_c',
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
            axios.get('http://localhost/homesafe/api/brand/allBrandProducts?name='+ params.get('m'))
             .then(response=>(
                (this.allbrand=response.data.allcategory),
                (this.counter = this.allbrand.length)
             ))
        },
        getUrlParam: function () {
            let params = new URLSearchParams(location.search);
            this.urlParameter = params.get('m');
        },
    }
})