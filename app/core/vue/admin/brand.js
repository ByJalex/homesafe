const brand = new Vue({
    el: '#brand',
    data: {
        paginationNumer: [
            { number: 10 },
            { number: 25 },
            { number: 50 },
            { number: 100 }
        ],
        getIdBrand: {
            id: 0
        },

        searchBrand: '',
        allBrands: [],
        NUM_RESULTS: 10,
        pag: 1,
        addBrand: {
            marca: '',
            imagen: null,
            desc: ''
        },
        editMyBrand: {
            marca: '',
            imagen: null,
            desc: '',
            id: 0,
            desc: ''
        }
    },
    mounted() {
        this.getAllBrands();
    },

    computed: {
        filteredBrand: function () {
            return this.allBrands.filter((a) => {
                return a.nombre_m.match(this.searchBrand.toLowerCase());
            });
        }
    },
    methods: {
        getAllBrands: function () {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/brand/allbrands')
                .then(function (response) {
                    brand.allBrands = response.data.allbrands;
                })
        },
        addbrand: function () {
            var formData = brand.toFormData(brand.addBrand);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/brand/addbrand', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    swal("Exito", "Agregado correctamente", "success");
                    brand.getAllBrands();
                    brand.addBrand.marca = '';
                    brand.addBrand.desc = '';
                    $('#addBrand').modal('hide');
                });
        },
        editbrand: async function (nombre, imagen, desc, id) {
            brand.editMyBrand.marca = nombre;
            brand.editMyBrand.imagen = imagen;
            brand.editMyBrand.desc = desc;
            brand.editMyBrand.id = id;
        },
        toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
        updateBrand: function () {
            var formData = brand.toFormData(brand.editMyBrand);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/brand/updatebrand', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function () {
                    swal("Exito", "Actualizado correctamente", "success");
                    brand.getAllBrands();
                    brand.editMyBrand.marca = '';
                    brand.editMyBrand.imagen = '';
                    brand.editMyBrand.desc = '';
                    brand.editMyBrand.id = '';
                    $('#updateBrand').modal('hide');
                });
        },

        dBrand: function (id) {
            brand.getIdBrand.id = id;
            console.log(id);
        },
        deleteBrand: function () {
            var formData = brand.toFormData(brand.getIdBrand);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/brand/deletebrand', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function () {
                    swal("Exito", "Eliminado correctamente", "success");
                    brand.getAllBrands();
                    $('#deleteBrand').modal('hide');
                });
        },
        getPagination: function (number) {
            brand.NUM_RESULTS = number;
        }
    },
})