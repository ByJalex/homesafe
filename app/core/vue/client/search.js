const search_s = new Vue({
	el: '#search_s',
	data: {
		products: [],
		counter: 0
	},
	mounted(){
        this.getUserInformation();
    },
	methods: {
		getUserInformation: function(){
			let params = new URLSearchParams(location.search);
            const p = params.get('p');
			axios.get('http://localhost/homesafe/api/product/search?p='+ p)
			.then(response=>(
                (this.products = response.data.search),
                (this.counter = this.products.length)
             ))
		}
	}
})