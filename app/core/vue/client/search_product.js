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
        //Metodo para obtener las marcas
        getAllBrands: function () {
            axios.get('http://localhost/homesafe/api/brand/allbrands')
             .then(response=>(
                (this.allbrands = response.data.allbrands)
             ))
        },
        //Metodo para buscar los productos
        send: function(){
            window.location = 'search?p='+ this.search;
        }
    }
})