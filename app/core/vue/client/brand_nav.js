const brand = new Vue({
    el: '#brand_nav',
    data: {
        allbrands: [
            
        ]
    },
    mounted(){
        this.getAllBrands();
    },
    methods: {
        getAllBrands: function () {
            axios.get('http://localhost/homesafe/api/brand/allbrands')
             .then(response=>(
                (this.allbrands=response.data.allbrands)
             ))
        },
    }
})