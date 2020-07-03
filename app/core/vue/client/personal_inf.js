const personal_inf = new Vue({
	el: '#personal_inf',
	data: {
		userInformation: {

		},
		orders: 0,
		pendingorders: 0,
		wishList: 0,
		articles: [],
		counter: 0,
		OrdersClient:{

		},
		DetailOrder: [],
		loaderOrders: true,
		loaderDetailOrders: true
	},
	mounted(){
        this.getUserInformation();
        this.getOrders();
        this.getPendingOrders();
		this.getShopedArticles();
		this.getOrders();
		this.getDetailOrders();
    },
	methods: {
		deleteDetailOrder: function(){
			this.DetailOrder = [];	
		},
		getUserInformation: function(){
			axios.get('http://localhost/homesafe/api/auth/loggedinclient')
			.then(response=>(
                (this.userInformation = response.data.userloggedin)
             ))
		},
		getOrders: function(){
			axios.get('http://localhost/homesafe/api/sale/myorders')
			.then(response=>(
                (this.orders = response.data.orders),
                (console.log(response.data.orders))
             ))
		},
		getPendingOrders: function(){
			axios.get('http://localhost/homesafe/api/sale/pendingorders')
			.then(response=>(
                (this.pendingorders = response.data.pending_orders)
             ))
		},
		getShopedArticles: function(){
			axios.get('http://localhost/homesafe/api/sale/articles')
			.then(response=>(
                (this.articles = response.data.purchased_articles),
                (this.counter = this.articles.length)
             ))
		},
		getOrders: function(){
			axios.get('http://localhost/homesafe/api/client/pedidosPorCliente')
			.then(response=>(
				(this.OrdersClient = response.data.pedidosPorCliente),
				(this.loaderOrders = false)
             ))
		},
		getDetailOrders: function(id){
			axios.get('http://localhost/homesafe/api/client/detallePedidosPorCliente?id='+id)
			.then(response=>(
				(this.DetailOrder = response.data.DetallePedidosPorCliente),
				(console.log(response.data.DetallePedidosPorCliente)),
				(this.loaderDetailOrders = false)
             ))
		}
	}
})

