const brand_c = new Vue({
    el: '#brand_c',
    data: {
        allbrand: [],
        urlParameter: '',
        counter: 0,
        loaderProduct: true
    },
    //Aqui se incializan todos los metodos que van a ser utilizados al cargar la pagina
    mounted(){
        this.getAllbrandIndividual();
        this.getUrlParam();
    },
    methods: {
        updatePassword: function(){
            console.log("DDAW")
        },
        //Se obtienen todas las marcas por individual
        getAllbrandIndividual: function () {
            let params = new URLSearchParams(location.search);
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/brand/allBrandProducts?name='+ params.get('m'))
             .then(response=>(
                (this.allbrand=response.data.allcategory),
                (this.counter = this.allbrand.length),
                (this.loaderProduct = false)
             ))
        },
        //Este metodo sirve para obtener las variables escritas por medio de la URL
        getUrlParam: function () {
            let params = new URLSearchParams(location.search);
            this.urlParameter = params.get('m');
        },
    }
})