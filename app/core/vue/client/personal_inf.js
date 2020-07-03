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
		//Serive para vaciar el array de detalle venta, para que a la hora de mostrar otro detalle venta no ese el anteriror
		deleteDetailOrder: function(){
			this.DetailOrder = [];	
		},
		//carga la informacion personal de usuario
		getUserInformation: function(){
			axios.get('http://localhost/homesafe/api/auth/loggedinclient')
			.then(response=>(
                (this.userInformation = response.data.userloggedin)
             ))
		},
		//Muestra el numero de ordes por cliente logeado
		getOrders: function(){
			axios.get('http://localhost/homesafe/api/sale/myorders')
			.then(response=>(
                (this.orders = response.data.orders),
                (console.log(response.data.orders))
             ))
		},
		//Carga las ordenes perdientes
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
		//Metodo para cargar las orden correspondiente al usuario
		getOrders: function(){
			axios.get('http://localhost/homesafe/api/client/pedidosPorCliente')
			.then(response=>(
				(this.OrdersClient = response.data.pedidosPorCliente),
				(this.loaderOrders = false)
             ))
		},
		//metodo para cargar el detelle de cada orden
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

