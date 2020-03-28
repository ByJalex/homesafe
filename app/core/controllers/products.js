/*Este archivo JavaScript va a manejar la funcionalidad con todos los productos (Agregar al carrito, 
agregar a la lista de deseos, etc).
*/
var app = new Vue({
    el: '#app',
    data: {
        /*EXPLORAR VARIABLES*/
        seeProd: 'product.php',
        allProductsPopular: [],
        /*CARRITO*/
        miCarrito: [],
        miCarritoProcesado: [],

        /*CATEGORIAS*/
        allCategory: []
    },
    mounted: function () {
        this.getPopularProducts();
        this.getCategory();
        var datos = JSON.parse(localStorage.getItem('homesafe'));
        if (datos === null) {
            this.miCarrito = [];
        } else {
            this.miCarrito = datos;
        }
    },
    computed: {

    },
    methods: {
        /*PETICIONES HTTP*/
        getPopularProducts: function () {
            axios.get('../api/products.php?accion=popularProducts')
                .then(function (response) {
                    app.allProductsPopular = response.data.popularProducts;
                    $('#preloader').css('display', 'none');
                });
        },
        getCategory: function () {
            axios.get('../api/category.php?accion=allCategorys')
                .then(function (response) {
                    app.allCategory = response.data.allCategorys;
                });
        },

        /*CARRITO DE COMPRAS*/
        cantidadProd: function () {
            this.total = this.miCarritoProcesado.length;
            return this.total;
        },
        redirectPopularProduct: function (index) {
            var ruta = this.seeProd + '?id_prod=' + index;
            return ruta;
        },
        cantidadProd: function () {
            this.total = this.miCarritoProcesado.length;
            return this.total;
        },
        agregarCarro: function (indice, nombre, precio) {
            this.miCarrito.push({
                id_producto: indice,
                nombre: nombre,
                cantidad: 1,
                precio: parseFloat(precio),
                precioUnitario: parseFloat(precio)
            });
            this.cantidadProd();
            localStorage.setItem('homesafe', JSON.stringify(this.miCarrito));
        },

        /*MI LISTA DE DESEOS*/
        agregarListaDeDeseos: function (nombreProd) {
            console.log('Agregaste el producto "' + nombreProd + '" a la lista de deseos');
        }
    },
    computed: {

    },
})

