const userloggedin = new Vue({
    el: '#userloggedin',
    data: {
        userInformation: {
            
        }
    },
    mounted() {
        this.getUserLoggedIn();
    },
    methods: {
        getUserLoggedIn: function () {
            axios.get('http://localhost/homesafe/api/auth/userloggedin')
                .then(function (response) {
                    userloggedin.userInformation = response.data.userloggedin;
                });
        }
    },
})