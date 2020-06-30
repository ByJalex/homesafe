const comments = new Vue({
	el: "#comments",
	data: {
		come: "",
		params: {},
		myParameter: 0,
		sendParams: {
			idp: 0,
			estre: 3,
			com: this.come
		}
	},
	mounted: function(){
		//this.loadValidation();
	},
	methods: {
		
	},
})