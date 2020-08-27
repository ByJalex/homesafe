const category = new Vue({
    el: '#category',
    data: {
        // Paginacion de la tabla
        paginationNumer: [
            { number: 10 },
            { number: 25 },
            { number: 50 },
            { number: 100 }
        ],
        // Obtener el id, para poder eliminar
        getIdCategory: {
            id: 0
        },

        // Para buscar algun elemento de la tabla
        searchCategory: '',
        allCategory: [],
        NUM_RESULTS: 10,
        pag: 1,
        addCategorys: {
            categoria: '',
            imagen: null,
        },
        editMyCategory: {
            categoria: '',
            imagen: null,
            id: 0,
        }
    },
    //este metodo se ejecuta al inciar la pagina
    mounted() {
        this.getAllCategory();
        this.stockChart();
    },

    computed: {
        //Aqui se filtran los datos segun las busquedas realizadas.
        filteredCategory: function() {
            return this.allCategory.filter((a) => {
                return a.categoria_p.match(this.searchCategory.toLowerCase());
            });
        }
    },
    methods: {
        loadChart: function(myParameter) {
            new Morris.Donut({
                element: 'chartCategory',
                data: myParameter,
                xkey: 'year',
                ykeys: ['value'],
                labels: ['label']
            });
        },
        stockChart: function() {
            axios.get('http://localhost/homesafe/api/stock/categoryGraphic')
                .then(response => {
                    this.loadChart(response.data.popularProducts)
                })
        },
        //El que obtiene todo los datos de la tabla
        getAllCategory: function() {
            axios.get('http://localhost/homesafe/api/category/allCategory')
                .then(function(response) {
                    category.allCategory = response.data.allcategory;
                })
        },

        //Para agregar una nueva marca
        addCategory: function() {
            var formData = category.toFormData(category.addCategorys);
            axios.post('http://localhost/homesafe/api/category/addcategory', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function(response) {
                    swal("Exito", "Agregado correctamente", "success");
                    category.getAllCategory();
                    category.addCategorys.categoria = '';
                    $('#addCategory').modal('hide');
                });
        },
        //para editar una nueva marca
        editCategory: async function(nombre, imagen, id) {
            category.editMyCategory.categoria = nombre;
            category.editMyCategory.imagen = imagen;
            category.editMyCategory.id = id;
        },
        //para peticion ajax
        toFormData: function(obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
        //para actualizar una marca
        updateCategory: function() {
            var formData = category.toFormData(category.editMyCategory);
            axios.post('http://localhost/homesafe/api/category/updatecategory', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function() {
                    swal("Exito", "Actualizado correctamente", "success");
                    category.getAllCategory();
                    category.editMyCategory.categoria = '';
                    category.editMyCategory.id = '';
                    $('#updateCategory').modal('hide');
                });
        },

        // para obtener el id a la hora ded eliminar
        dCategory: function(id) {
            category.getIdCategory.id = id;
            console.log(id);
        },
        //Elimina
        deleteCategory: function() {
            var formData = category.toFormData(category.getIdCategory);
            axios.post('http://localhost/homesafe/api/category/deletecategory', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function() {
                    swal("Exito", "Eliminado correctamente", "success");
                    category.getAllCategory();
                    $('#deleteCategory').modal('hide');
                });
        },
        //para la paginacion
        getPagination: function(number) {
            category.NUM_RESULTS = number;
        }
    },
})