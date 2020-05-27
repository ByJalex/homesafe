const dashboard = new Vue({
    el: '#dashboard',
    data: {
        customers: 0,
        sales: 0,
        review: 0,
        productsSoulOut: {},
        salePorcent: ''
    },
    mounted() {
        this.getParametersDashboard();
        this.salesNow();
        this.revieNow();
        this.soldoutProduct();
    },
    computed: {

    },
    methods: {
        getParametersDashboard: function () {
            axios.get('https://localhost/homesafe/api/dashboard/countcustomers')
                .then(function (response) {
                    dashboard.customers = response.data.customers;
                });
        },
        salesNow: function () {
            axios.get('https://localhost/homesafe/api/dashboard/countsalesnow')
                .then(function (response) {
                    dashboard.sales = response.data.salesnow;
                    var numeroUno = parseInt(dashboard.sales.count, 10);
                    dashboard.salePorcent = (numeroUno * 2.5);
                    console.log(dashboard.salePorcent);
                });
        },
        revieNow: function () {
            axios.get('https://localhost/homesafe/api/dashboard/countreviewnow')
                .then(function (response) {
                    dashboard.review = response.data.reviewnow;
                });
        },
        soldoutProduct: function () {
            axios.get('https://localhost/homesafe/api/dashboard/productsoldout')
                .then(function (response) {
                    dashboard.productsSoulOut = response.data.productsoldout;
                });
        },
    },
})
