const category_home = new Vue({
    el: '#category_home',
    data: {
        allCategory: [],
        categories: [],
        loaderProduct: true
    },
    mounted(){
        this.getAllCategoryLimit();
        this.getAllCategory();
    },
    methods: {
        getAllCategoryLimit: function () {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/category/allCategoryLimit')
             .then(response=>(
                (this.allCategory=response.data.allcategory)
             ))
        },
        getAllCategory: function(){
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/category/allCategory')
             .then(response=>(
                (this.categories=response.data.allcategory),
                (this.loaderProduct = false)
             ))
        }
    }
})