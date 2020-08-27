const stock = new Vue({
    el: '#stock',
    data: {
        paginationNumer: [
            { number: 10 },
            { number: 25 },
            { number: 50 },
            { number: 100 }
        ],
        getIdStock: {
            id: 0
        },

        searchStock: '',
        allStock: [],
        NUM_RESULTS: 10,
        pag: 1,

        // Y tambinen una variable
        // No se puede tener duplicidad :o
        addStocks: {
            cantidad: '',
            producto: ''
        },
        editStock: {
            cantidad: '',
            producto: ''
        }
    },
    mounted() {
        this.getAllStock();
        this.stockChart();
        const a = document.getElementById("dawdadawgrfrhft")
        console.log(a)
    },

    computed: {
        filteredStock: function() {
            return this.allStock.filter((a) => {
                return a.nombre_p.match(this.searchStock.toLowerCase());
            });
        }
    },

    methods: {
        loadChart: function(myParameter) {

            new Morris.Bar({
                element: 'dawdadawgrfrhft',
                data: myParameter,
                xkey: 'label',
                ykeys: ['value'],
                labels: ['Cantidad']
            });
        },
        stockChart: function() {
            axios.get('http://localhost/homesafe/api/stock/loadChartSale')
                .then(response => {
                    this.loadChart(response.data.popularProducts)
                })
        },
        getAllStock: function() {
            axios.get('http://localhost/homesafe/api/stock/allStock')
                .then(function(response) {
                    stock.stockChart = response.data.stock;
                })
        },
        // addStock es una funcion
        addStock: function() {
            var formData = stock.toFormData(stock.addStocks);
            axios.post('http://localhost/homesafe/api/stock/addStock', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function(response) {
                    swal("Exito", "Agregado correctamente", "success");
                    stock.getAllStock();
                    stock.addStocks.cantidad = '';
                    stock.addStocks.producto = '';
                    $('#addStock').modal('hide');
                });

        },
        toFormData: function(obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
        getPagination: function(number) {
            brand.NUM_RESULTS = number;
        }
    }
})