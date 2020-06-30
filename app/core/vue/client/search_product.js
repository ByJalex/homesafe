const search = new Vue({
    el: '#search',
    data: {
        search: '',
        allProducts: [
            
        ]
    },
    mounted(){
        //this.getAllBrands();
    },
    methods: {
        getAllBrands: function () {
            axios.get('http://localhost/homesafe/api/brand/allbrands')
             .then(response=>(
                (this.allbrands = response.data.allbrands)
             ))
        },
        send: function(){
            window.location = 'search?p='+ this.search;
        }
    }
})