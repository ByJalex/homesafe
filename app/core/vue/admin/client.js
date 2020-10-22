const client = new Vue({
    el: '#client',
    data: {
        paginationNumer: [
            { number: 10 },
            { number: 25 },
            { number: 50 },
            { number: 100 }
        ],
        getIdClient: {
            id: 0
        },
        searchDetail: '',
        searchClient: '',
        allClients: [],
        NUM_RESULTS: 10,
        pag: 1,
        addClients: {
            cupon: '',
            descuento: 0,
            cantidad: 0
        },
        editMyClient: {
            id_cliente: '',
            correo_c: 0,
            nombre_c: 0,
            usu_c: 1,
            direccion_c: 0,
            telefono_c: '',
            imagen_c: 0,
            id_estado_user: 0,
        },
        clientInformation: {
            name: 'Josue Alfonso',
            correo: 'ayalavalencia11@gmail.com',
            usuario: 'josue_ayala27',
            direccion: '29 av norte colonia zacamil pasaje valencia #36',
            telefono: '2531-2362',
            imagen: '',
            estado: 'Activo'
        },
        saleDetail: []
    },
    mounted() {
        this.getAllClients();
        this.stockChart();
    },

    computed: {
        filteredClient: function() {
            return this.allClients.filter((a) => {
                return a.correo_c.match(this.searchClient.toLowerCase());
            });
        },
        filteredDetail: function() {
            return this.saleDetail.filter((a) => {
                return a.fecha.match(this.searchDetail.toLowerCase());
            });
        }
    },
    methods: {
        loadChart: function(myParameter) {
            new Morris.Donut({
                element: 'chartAa',
                data: myParameter,
                xkey: 'year',
                ykeys: ['value'],
                labels: ['label']
            });
        },
        loadChart2: function(a) {
            new Morris.Donut({
                element: 'testChart',
                data: a,
                xkey: 'year',
                ykeys: ['value'],
                labels: ['label']
            });
        },
        stockChart: function() {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/stock/clientsGraphic')
                .then(response => {
                    this.loadChart(response.data.popularProducts), this.loadChart2(response.data.popularProducts)
                })
        },
        clearArray: function() {
            console.log('xd');
            this.saleDetail = [];
        },
        getSaleDetail: function(id) {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/sale/detail?i=' + id)
                .then(function(response) {
                    client.saleDetail = response.data.detailSale;
                })
        },
        getAllClients: function() {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/client/allclient')
                .then(function(response) {
                    client.allClients = response.data.allclients;
                })
        },
        addClient: function() {
            var formData = client.toFormData(client.addClients);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/coupons/addcoupons', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function(response) {
                    swal("Exito", "Agregado correctamente", "success");
                    client.getAllClients();
                    client.addClients.cupon = '';
                    client.addClients.descuento = 0;
                    client.addClients.cantidad = 0;
                    $('#addClient').modal('hide');
                });
        },
        editClient: function(correo_c, nombre_c, id_cliente, usu_c, direccion_c, telefono_c, imagen_c, id_estado_user, estado_user) {
            client.editMyClient.id_cliente = id_cliente;
            client.editMyClient.correo_c = correo_c;
            client.editMyClient.nombre_c = nombre_c;
            client.editMyClient.usu_c = usu_c;
            client.editMyClient.direccion_c = direccion_c;
            client.editMyClient.telefono_c = telefono_c;
            client.editMyClient.imagen_c = imagen_c;
            client.editMyClient.id_estado_user = estado_user;
        },
        toFormData: function(obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
        updateClient: function() {
            var formData = client.toFormData(client.editMyClient);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/coupons/updatecoupons', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function() {
                    swal("Exito", "Actualizado correctamente", "success");
                    client.getAllClients();
                    $('#updateClients').modal('hide');
                });
        },

        dClient: function(id) {
            client.getIdClient.id = id;
        },
        deleteClient: function() {
            var formData = client.toFormData(client.getIdClient);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/coupons/deletecoupons', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function() {
                    swal("Exito", "Eliminado correctamente", "success");
                    client.getAllClients();
                    $('#deleteClients').modal('hide');
                });
        },
        getPagination: function(number) {
            client.NUM_RESULTS = number;
        }
    },
})