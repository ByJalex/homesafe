const inf = new Vue({
	el: '#login',
	data: {
		userInformation: {

		}
	},
	mounted(){
        this.getUserInformation();
    },
	methods: {
		//Esto metodo se usa para cargar la informacion del usuario
		getUserInformation: function(){
			axios.get('http://localhost/homesafe/api/auth/loggedinclient')
			.then(response=>(
                (this.userInformation = response.data.userloggedin)
             ))
		}
	}
})