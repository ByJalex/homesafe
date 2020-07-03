//Todo este js siver para poder cargar la vista de cada producto indivual ademas de sus comentarios
const singleProduct = new Vue({
    el: '#singleProduct',
    data: {
        urlParam: {
            id: '',
            secondaryId: ''
        },
        params: {},
        myParameter: 0,
        productInformation: {},
        orders: 'Cargando',
        sum: 1,
        loaderProduct: true,
        products: false,
        comments: false,
        allComments: [],
        counterComments: 0,
        loadDataProduct: true,
        commentary: '',
        loaderComment: true,
        sendParams: {
            idp: 0,
            estre: 3,
            com: '',
            //3 por defecto xD
            getstar: 3
        },
    },
    //Esto se ejecuta a la hora que se carga la pagina
    mounted() {
        this.getUrlParam();
        this.getProductInformation();
        this.getOrders();
        this.chargeComments();
    },
    methods: {
        openModal: function(){
            $('#exampleModal').modal('open')
        },
        selectstar: function(star){
            this.sendParams.getstar = star;
        },
        add: function(id, cantidad, imagen, nombre, precio){
            cart.addTocCart(id, cantidad, imagen, nombre, precio);
        },
        //Cargar los comentarios del producto y cambiar 
        sendMessage: function(){
            comments.sendComment(this.commentary);
            comments.come = this.commentary;
        },
        chargeComments: function(){
            axios.get('http://localhost/homesafe/api/product/commentTest?p='+this.urlParam.secondaryId)
            .then(response=>(
                (this.allComments = response.data.comments),
                (this.counterComments = this.allComments.length),
                ($('#exampleModal').modal('hide'))
                ));
        },
        changeToInf: function(){
            this.comments ? ((this.products = true), (this.comments = false)) : this.comments = true;
        },
        changeToComments: function(){
            this.products ? ((this.comments = true), (this.products = false)) : this.products = true;
        },
        getUrlParam: function () {
            let params = new URLSearchParams(location.search);
            this.urlParam.id = params.get('p');
            this.urlParam.secondaryId = params.get('k');
        },
        //Este carga la cantidad de ordenes que se han hecho de ese mismo producto
        getOrders: function () {
            var formData = this.toFormData(this.urlParam);
            axios.post('http://localhost/homesafe/api/sale/countorders', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    singleProduct.orders = response.data.ordersDetail;
                });
        },
        //Este metodo carga toda la informacion de los productos
        getProductInformation: function () {
            var formData = this.toFormData(this.urlParam);
            axios.post('http://localhost/homesafe/api/product/unique', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    singleProduct.productInformation = response.data.uniqueProduct;
                    singleProduct.loadDataProduct = false;
                    singleProduct.products = true;
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
        },
        ////////////////////////////Enviar comentarios del producto////////////////////////////
        sendComment: function(parameter){
            comments.come = parameter;
            console.log(this.come);
            this.loadValidation();
        },
        sendMessage: function(){
            var formData = this.toFormData(this.sendParams);
            axios.post('http://localhost/homesafe/api/review/sendreview', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                     swal("Exito", "Comentario enviado.", "success");
                        singleProduct.chargeComments();
                        singleProduct.sendParams.com = "";
                });
        },
        val: function(){
            this.params.test.id_cliente != this.myParameter ? swal("Error", "No puedes comentar un producto que aún no has comprado.", "error") : this.sendMessage();
        },
        loadValidation: function(){
            let params = new URLSearchParams(location.search);
            this.sendParams.idp = params.get('k');
            singleProduct.loaderComment = false;
            axios.get('http://localhost/homesafe/api/review/send?p='+ this.sendParams.idp)
            .then(response=>(
                (this.params = response.data),
                (singleProduct.loaderComment = true),
                (this.myParameter = response.data.myId),
                (this.val())
                ));
        },
        toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
    },
})