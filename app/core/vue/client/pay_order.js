const pay_order = new Vue({
	el: '#pay_order',
	data: {
		ult_vent: 0,
		detailSale: {
			arr: JSON.stringify(JSON.parse(localStorage.getItem('p_cart')))
		},
	},
	mounted: function(){
//console.log(this.detailSale.arr);
	},
	methods: {
		showLoad: function(){
			//swal.showLoading()
  		},
		payOrder: function(){
			axios.get('http://localhost/homesafe/api/sale/createsale?t='+localStorage.getItem('t'))
			.then(response=>(
				//console.log(response.data.ult_vent),
				this.ult_vent = response.data.ult_vent,
				localStorage.setItem("i", this.ult_vent),
				this.insertSale()
				));

				/*
				
                });*/
		},
		insertSale: function(){
			var formData = pay_order.toFormData(pay_order.detailSale);	
            axios.post('http://localhost/homesafe/api/sale/insertAllProducts?v='+localStorage.getItem('i'), formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    $('#exampleModalCenter').modal('hide');
                    localStorage.clear();
                    window.location="account/orders"
                    });
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
