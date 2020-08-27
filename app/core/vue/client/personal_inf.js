const personal_inf = new Vue({
    el: '#personal_inf',
    data: {
        userInformation: {

        },
        pag: 1,
        NUM_RESULTS: 4,
        loaderOfAllContent: true,
        countOrders: 0,
        orders: 0,
        pendingorders: 0,
        wishList: 0,
        articles: [],
        counter: 0,
        OrdersClient: {

        },
        DetailOrder: [],
        loaderOrders: true,
        loaderDetailOrders: true
    },
    mounted() {
        this.getUserInformation();
        this.getOrders();
        this.getPendingOrders();
        this.getShopedArticles();
        this.getOrders();
        //this.getDetailOrders();
        // this.testSendData()
    },
    methods: {
        //Serive para vaciar el array de detalle venta, para que a la hora de mostrar otro detalle venta no ese el anteriror
        deleteDetailOrder: function() {
            this.DetailOrder = [];
            this.loaderDetailOrders = true;
        },
        testSendData: function(a) {
            console.log(a)
            axios.get("http://localhost/api/data?parameter=" + a)
                .then(response => {

                })
        },
        //carga la informacion personal de usuario
        getUserInformation: function() {
            axios.get('http://localhost/homesafe/api/auth/loggedinclient')
                .then(response => (
                    (this.userInformation = response.data.userloggedin)
                ))
        },
        //Muestra el numero de ordes por cliente logeado
        getOrderss: function() {
            axios.get('http://localhost/homesafe/api/sale/myorders')
                .then(response => (
                    (this.orders = response.data.orders),
                    (console.log(response.data.orders))
                ))
        },
        //Carga las ordenes perdientes
        getPendingOrders: function() {
            axios.get('http://localhost/homesafe/api/sale/pendingorders')
                .then(response => (
                    (this.pendingorders = response.data.pending_orders)
                ))
        },
        getShopedArticles: function() {
            axios.get('http://localhost/homesafe/api/sale/articles')
                .then(response => (
                    (this.articles = response.data.purchased_articles),
                    (this.counter = this.articles.length),
                    (this.loaderOfAllContent = false)
                ))
        },
        //Metodo para cargar las orden correspondiente al usuario
        getOrders: function() {
            axios.get('http://localhost/homesafe/api/client/pedidosPorCliente')
                .then(response => (
                    (this.OrdersClient = response.data.pedidosPorCliente),
                    (this.loaderOrders = false),
                    (this.countOrders = this.OrdersClient.length)
                ))
        },
        //metodo para cargar el detelle de cada orden
        getDetailOrders: function(id) {
            axios.get('http://localhost/homesafe/api/client/detallePedidosPorCliente?id=' + id)
                .then(response => (
                    (this.DetailOrder = response.data.DetallePedidosPorCliente),
                    (this.loaderDetailOrders = false)
                ))
        }
    }
})