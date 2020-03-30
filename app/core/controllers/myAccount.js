const account = new Vue({
    el: '#account',
    data: {
        myInformation: []
    },
    mounted: function () {
        this.getMyInformation();
    },
    methods: {
        getMyInformation: function () {
            axios.get('../../core/api/account.php?accion=myAccount')
                .then(function (response) {
                    account.myInformation = response.data.myAcount;
                });
        }
    },
})