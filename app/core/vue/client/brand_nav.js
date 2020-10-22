const brand = new Vue({
    el: '#brand_nav',
    data: {
        allbrands: [

        ]
    },
    //Aqui se incializan todos los valores 
    mounted() {
        this.getAllBrands();
    },
    methods: {
        //Se obtienien todas las marcas pero en el navbar, para evitar problemas con vue
        getAllBrands: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/brand/allbrands')
                .then(response => (
                    (this.allbrands = response.data.allbrands)
                ))
        },
    }
})