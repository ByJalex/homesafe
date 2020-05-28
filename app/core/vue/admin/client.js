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
            cupon: '',
            descuento: 0,
            cantidad: 0,
            idDropdownEstate: 1,
            id: 0
        },
    },
    mounted() {
        this.getAllClients();
    },

    computed: {
        filteredClient: function () {
            return this.allClients.filter((a) => {
                return a.correo_c.match(this.searchClient.toLowerCase());
            });
        }
    },
    methods: {
        getAllClients: function () {
            axios.get('http://localhost/homesafe/api/client/allclient')
                .then(function (response) {
                    client.allClients = response.data.allclients;
                })
        },
        addClient: function () {
            var formData = client.toFormData(client.addClients);
            axios.post('http://localhost/homesafe/api/coupons/addcoupons', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    swal("Exito", "Agregado correctamente", "success");
                    client.getAllClients();
                    client.addClients.cupon = '';
                    client.addClients.descuento = 0;
                    client.addClients.cantidad = 0;
                    $('#addClient').modal('hide');
                });
        },
        editClient: async function (cupon, desc, cantidad, validez, id) {
            client.editMyClient.cupon = cupon;
            client.editMyClient.descuento = desc;
            client.editMyClient.cantidad = cantidad;
            client.editMyClient.idDropdownEstate = validez;
            client.editMyClient.id = id;
        },
        toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
        updateClient: function () {
            var formData = client.toFormData(client.editMyClient);
            axios.post('http://localhost/homesafe/api/coupons/updatecoupons', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function () {
                    swal("Exito", "Actualizado correctamente", "success");
                    client.getAllClients();
                    $('#updateClients').modal('hide');
                });
        },

        dClient: function (id) {
            client.getIdClient.id = id;
        },
        deleteClient: function () {
            var formData = client.toFormData(client.getIdClient);
            axios.post('http://localhost/homesafe/api/coupons/deletecoupons', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function () {
                    swal("Exito", "Eliminado correctamente", "success");
                    client.getAllClients();
                    $('#deleteClients').modal('hide');
                });
        },
        getPagination: function (number) {
            client.NUM_RESULTS = number;
        }
    },
})