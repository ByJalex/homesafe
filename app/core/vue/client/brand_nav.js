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
            axios.get('https://homesafe-sv.herokuapp.com/api/brand/allbrands')
             .then(response=>(
                (this.allbrands = response.data.allbrands)
             ))
        },
    }
})