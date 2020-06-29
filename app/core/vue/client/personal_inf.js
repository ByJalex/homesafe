const personal_inf = new Vue({
	el: '#personal_inf',
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