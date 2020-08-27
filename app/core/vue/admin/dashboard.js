const dashboard = new Vue({
    el: '#dashboard',
    data: {
        customers: 0,
        sales: 0,
        review: 0,
        productsSoulOut: {},
        salePorcent: '',
        testChart: []
    },
    mounted() {
        this.getParametersDashboard();
        this.salesNow();
        this.revieNow();
        this.soldoutProduct();
        this.stockChart();
        this.stockChart2();
    },
    computed: {

    },
    methods: {
        chart: function(myParameter) {
            new Morris.Donut({
                element: 'myfirstchart',
                data: myParameter,
                xkey: 'year',
                ykeys: ['value'],
                labels: ['label']
            });
        },
        chart2: function(asd) {
            new Morris.Bar({
                element: 'adawdawdawdawdawsaw',
                data: asd,
                xkey: 'label',
                ykeys: ['value'],
                labels: ['Cantidad']
            });
        },
        stockChart: function() {
            axios.get('http://localhost/homesafe/api/stock/prodGraphic')
                .then(response => {
                    this.chart2(response.data.popularProducts)
                })
        },

        getParametersDashboard: function() {
            axios.get('http://localhost/homesafe/api/dashboard/countcustomers')
                .then(function(response) {
                    dashboard.customers = response.data.customers;
                });
        },
        salesNow: function() {
            axios.get('http://localhost/homesafe/api/dashboard/countsalesnow')
                .then(function(response) {
                    dashboard.sales = response.data.salesnow;
                    var numeroUno = parseInt(dashboard.sales.count, 10);
                    dashboard.salePorcent = (numeroUno * 2.5);
                    console.log(dashboard.salePorcent);
                });
        },
        revieNow: function() {
            axios.get('http://localhost/homesafe/api/dashboard/countreviewnow')
                .then(function(response) {
                    dashboard.review = response.data.reviewnow;
                });
        },
        soldoutProduct: function() {
            axios.get('http://localhost/homesafe/api/dashboard/productsoldout')
                .then(function(response) {
                    dashboard.productsSoulOut = response.data.productsoldout;
                });
        },
    },
})