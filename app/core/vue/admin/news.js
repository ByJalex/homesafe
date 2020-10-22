const news = new Vue({
    el: '#news',
    data: {
        paginationNumer: [
            { number: 10 },
            { number: 25 },
            { number: 50 },
            { number: 100 }
        ],
        getIdNews: {
            id: 0
        },
        searchNews: '',
        allNews: [],
        NUM_RESULTS: 10,
        pag: 1,
        addMyNew: {
            titulo: '',
            noticia: '',
            imagen: null,
            estado: '',
        },
        editMyNew: {
            titulo_noticia: '',
            noticia: '',
            imagen: null,
            estado: '',
        },
    },
    mounted() {
        this.getAllNews();
    },
    computed: {
        filteredNew: function(){
            return this.allNews.filter((a) => {
                return a.titulo_noticia.match(this.searchNews.toLowerCase());
            });
        }
    },
    methods: {
        getAllNews: function () {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/news/allNews')
                .then(function(response){
                    news.allNews = response.data.allnews;
                })
        },
        toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
        getPagination: function (number) {
            brand.NUM_RESULTS = number;
        }
    },
})