const singleProduct = new Vue({
    el: '#singleProduct',
    data: {
        urlParam: {
            id: '',
            secondaryId: ''
        },
        productInformation: {},
        orders: 'Cargando',
        sum: 1,
        loaderProduct: true
    },
    mounted() {
        this.getUrlParam();
        this.getProductInformation();
        this.getOrders();
    },
    methods: {
        getUrlParam: function () {
            let params = new URLSearchParams(location.search);
            this.urlParam.id = params.get('p');
            this.urlParam.secondaryId = params.get('k');
        },
        getOrders: function () {
            var formData = this.toFormData(this.urlParam);
            axios.post('https://homesafe-sv.herokuapp.com/api/sale/countorders', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    singleProduct.orders = response.data.ordersDetail;
                });
        },
        getProductInformation: function () {
            var formData = this.toFormData(this.urlParam);
            axios.post('https://homesafe-sv.herokuapp.com/api/product/unique', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    singleProduct.productInformation = response.data.uniqueProduct;
                });
        },
        toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
        deductSum: function () {
            if (this.sum == 1) {

            } else {
                this.sum--;
            }
        }
    },
})