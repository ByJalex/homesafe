const pay_order = new Vue({
	el: '#pay_order',
	data: {
		ult_vent: 0,
		detailSale: {
			arr: JSON.stringify(JSON.parse(localStorage.getItem('p_cart')))
		}
	},
	mounted: function(){
console.log(this.detailSale.arr);
	},
	methods: {
		payOrder: function(){
			/*
			axios.get('http://localhost/homesafe/api/sale/createsale')
			.then(response=>(
				//console.log(response.data.ult_vent),
				this.ult_vent = response.data.ult_vent,
				localStorage.setItem("i", this.ult_vent),
				this.insertSale()
				));
				*/
				var formData = pay_order.toFormData(pay_order.detailSale);
            axios.post('http://localhost/homesafe/api/sale/insertAllProducts', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    console.log(pay_order.detailSale.arr)
                });
		},
		insertSale: function(){
			console.log('Aqui se van a insertar las ventas');
		},
		toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
	}
})
