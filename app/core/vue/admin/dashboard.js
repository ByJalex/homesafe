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
        // Aqui se cargan todos los metodos de los graficos
        this.stockChart1();
        this.stockChart2();
        this.stockChart3();
        this.stockChart4();
        this.stockChart5();
    },
    computed: {

    },
    methods: {
        // Todas estas funciones de chart 1, 2 3, 4, 5 con las funciones para los graficos,
        // y para estas graficas ocupamos morris.js ya que es mas facil de implementar.
        chart1: function(myParameter) {
            new Morris.Donut({
                element: 'chart1',
                data: myParameter,
                xkey: 'year',
                ykeys: ['value'],
                labels: ['label']
            });
        },
        chart2: function(asd) {
            new Morris.Bar({
                element: 'chart2',
                data: asd,
                xkey: 'label',
                ykeys: ['value'],
                labels: ['Cantidad']
            });
        },
        chart3: function(asd) {
            new Morris.Bar({
                element: 'chart3',
                data: asd,
                xkey: 'label',
                ykeys: ['value'],
                labels: ['Cantidad']
            });
        },
        chart4: function(asd) {
            new Morris.Donut({
                element: 'chart4',
                data: asd,
                xkey: 'label',
                ykeys: ['value'],
                labels: ['value']
            });
        },
        chart5: function(asd) {
            new Morris.Bar({
                element: 'chart5',
                data: asd,
                xkey: 'label',
                ykeys: ['value'],
                labels: ['Cantidad']
            });
        },
        //Aqui se mandan a llamar desde la api cada consulta para el grafico
        stockChart1: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/stock/chartGraphic1')
                .then(response => {
                    this.chart1(response.data.popularProducts)
                })
        },
        stockChart2: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/stock/chartGraphic2')
                .then(response => {
                    this.chart2(response.data.popularProducts)
                })
        },
        stockChart3: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/stock/chartGraphic3')
                .then(response => {
                    this.chart3(response.data.popularProducts)
                })
        },
        stockChart4: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/stock/chartGraphic4')
                .then(response => {
                    this.chart4(response.data.popularProducts)
                })
        },
        stockChart5: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/stock/chartGraphic5')
                .then(response => {
                    this.chart5(response.data.popularProducts)
                })
        },

        getParametersDashboard: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/dashboard/countcustomers')
                .then(function(response) {
                    dashboard.customers = response.data.customers;
                });
        },
        salesNow: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/dashboard/countsalesnow')
                .then(function(response) {
                    dashboard.sales = response.data.salesnow;
                    var numeroUno = parseInt(dashboard.sales.count, 10);
                    dashboard.salePorcent = (numeroUno * 2.5);
                    //console.log(dashboard.salePorcent);
                });
        },
        revieNow: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/dashboard/countreviewnow')
                .then(function(response) {
                    dashboard.review = response.data.reviewnow;
                });
        },
        soldoutProduct: function() {
            axios.get('https://homesafe-sv.herokuapp.com/api/dashboard/productsoldout')
                .then(function(response) {
                    dashboard.productsSoulOut = response.data.productsoldout;
                });
        },
    },
})