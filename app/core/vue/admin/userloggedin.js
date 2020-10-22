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
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/auth/userloggedin')
                .then(function (response) {
                    userloggedin.userInformation = response.data.userloggedin;
                });
        }
    },
})