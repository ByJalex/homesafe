const pay = new Vue({
	el: '#pay',
	data: {
		userInformation: {

		}
	},
	mounted(){
        this.getUserInformation();
    },
	methods: {
		getUserInformation: function(){
			axios.get('http://localhost/homesafe/api/auth/loggedinclient')
			.then(response=>(
                (this.userInformation = response.data.userloggedin)
             ))
		}
	}
})