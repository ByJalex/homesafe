const news = new Vue({
  el: "#news",
  data: {
    newsCard: [],
    newarray: [],
    loaderProduct: true
  },
  mounted: function () {
    this.getnews();
  },
  computed: {},
  methods: {
    //Este metodo manda a llamar las noticias de la tienda
    getnews: function () {
      axios
        .get("http://localhost/homesafe/api/news/allNews")
        .then(function (response) {
          news.newsCard = response.data.allnews;
          news.shortArrays();
          news.loaderProduct = false;
        });
    },
    shortArrays: function () {
    //Varaibles en js pueden ser:  const, let, var
      let nuevo = this.newsCard.map((item) => {
        return {
            imagen_n: item.imagen_n,
            titulo_noticia: `${item.titulo_noticia.substring(0, 46)}...`,
            noticia: `${item.noticia.substring(0, 200)}...`,
        };
      });
      this.newarray = nuevo;
      console.log(this.newarray);
    },
  },
});
