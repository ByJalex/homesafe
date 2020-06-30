const category = new Vue({
    el: '#category',
    data: {
        allCategory: [],
        urlParameter: '',
        counter: 0,
        loaderProduct: true
    },
    mounted(){
        this.getAllCategoryIndividual();
        this.getUrlParam();
    },
    methods: {
        getAllCategoryIndividual: function () {
            let params = new URLSearchParams(location.search);
            axios.get('https://homesafe-sv.herokuapp.com/api/category/allCategoryProducts?name='+ params.get('c'))
             .then(response=>(
                (this.allCategory=response.data.allcategory),
                (this.counter = this.allCategory.length)
                (this.loaderProduct = false)
             ))
        },
        getUrlParam: function () {
            let params = new URLSearchParams(location.search);
            this.urlParameter = params.get('c');
        },
    }
})