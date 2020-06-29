const category_home = new Vue({
    el: '#category_home',
    data: {
        allCategory: [
            
        ]
    },
    mounted(){
        this.getAllCategoryLimit();
    },
    methods: {
        getAllCategoryLimit: function () {
            axios.get('http://localhost/homesafe/api/category/allCategoryLimit')
             .then(response=>(
                (this.allCategory=response.data.allcategory)
             ))
        },
    }
})