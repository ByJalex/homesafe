const brand = new Vue({
    el: '#brand',
    data: {
        // Paginacion de la tabla
        paginationNumer: [
            {number: 10},
            {number: 25},
            {number: 50},
            {number: 100}
        ],
        // Obtener el id, para poder eliminar
        getIdBrand: {
            id: 0
        },

        // Para buscar algun elemento de la tabla
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
    //este metodo se ejecuta al inciar la pagina
    mounted() {
        this.getAllBrands();
    },

    computed: {
        //Aqui se filtran los datos segun las busquedas realizadas.
        filteredBrand: function () {
            return this.allBrands.filter((a) => {
                return a.nombre_m.match(this.searchBrand.toLowerCase());
            });
        }
    },
    methods: {
        //El que obtiene todo los datos de la tabla
        getAllBrands: function () {
            axios.get('http://localhost/homesafe/api/brand/allbrands')
                .then(function (response) {
                    brand.allBrands = response.data.allbrands;
                })
        },
        //Para agregar una nueva marca
        addbrand: function () {
            var formData = brand.toFormData(brand.addBrand);
            axios.post('http://localhost/homesafe/api/brand/addbrand', formData, {
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
        //para editar una nueva marca
        editbrand: async function (nombre, imagen, desc, id) {
            // console.log(id);
            brand.editMyBrand.marca = nombre;
            brand.editMyBrand.imagen = imagen;
            brand.editMyBrand.desc = desc;
            brand.editMyBrand.id = id;
        },
        //para peticion ajax
        toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
        //para actualizar una marca
        updateBrand: function () {
            var formData = brand.toFormData(brand.editMyBrand);
            axios.post('http://localhost/homesafe/api/brand/updatebrand', formData, {
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

        // para obtener el id a la hora ded eliminar
        dBrand: function(id){
            brand.getIdBrand.id = id;
            console.log(id);
        },
        //Elimina
        deleteBrand: function () {
            var formData = brand.toFormData(brand.getIdBrand);
            axios.post('http://localhost/homesafe/api/brand/deletebrand', formData, {
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
        //para la paginacion
        getPagination: function(number){
            brand.NUM_RESULTS = number;
            // console.log(number);
        }
    },
})