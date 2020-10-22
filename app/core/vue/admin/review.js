const review = new Vue({
    el: '#review',
    data: {
        // Paginacion de la tabla
        paginationNumer: [
            { number: 10 },
            { number: 25 },
            { number: 50 },
            { number: 100 }
        ],
        // Obtener el id, para poder eliminar
        getIdReview: {
            id: 0
        },
        
        // Para buscar algun elemento de la tabla
        searchReview: '',
        allReviews: [],
        NUM_RESULTS: 10,
        pag: 1,
        addReviews: {
            categoria: '',
            imagen: null,
        },
        editMyReview: {
            categoria: '',
            imagen: null,
            id: 0,
        }
    },
    //este metodo se ejecuta al inciar la pagina
    mounted() {
        this.getAllReview();
    },

    computed: {
        //Aqui se filtran los datos segun las busquedas realizadas.
        filteredReview: function () {
            return this.allReviews.filter((a) => {
                return a.nombre_p.match(this.searchReview.toLowerCase());
            });
        }
    },
    methods: {
        //El que obtiene todo los datos de la tabla
        getAllReview: function () {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/review/allreview')
                .then(function (response) {
                    review.allReviews = response.data.allreview;
                })
        },
        //Para agregar una nueva marca
        addReview: function () {
            var formData = review.toFormData(review.addReviews);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/category/addcategory', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    swal("Exito", "Agregado correctamente", "success");
                    review.getAllReview();
                    review.addReviews.categoria = '';
                    $('#addReview').modal('hide');
                });
        },
        //para editar una nueva marca
        editReview: async function (nombre, imagen, id) {
            review.editMyReview.categoria = nombre;
            review.editMyReview.imagen = imagen;
            review.editMyReview.id = id;
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
        updateReview: function () {
            var formData = review.toFormData(review.editMyReview);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/category/updatecategory', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function () {
                    swal("Exito", "Actualizado correctamente", "success");
                    review.getAllReview();
                    review.editMyReview.categoria = '';
                    review.editMyReview.id = '';
                    $('#updateReview').modal('hide');
                });
        },

        // para obtener el id a la hora ded eliminar
        dReview: function (id) {
            review.getIdReview.id = id;
            console.log(id);
        },
        //Elimina
        deleteReview: function () {
            var formData = review.toFormData(review.getIdReview);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/category/deletecategory', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function () {
                    swal("Exito", "Eliminado correctamente", "success");
                    review.gettegReview();
                    $('#deleteReview').modal('hide');
                });
        },
        //para la paginacion
        getPagination: function (number) {
            review.NUM_RESULTS = number;
        }
    },
})

