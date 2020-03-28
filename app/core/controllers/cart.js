const cart = new Vue({
    el: '#cart',
    data: {
        titulo: 'carrito de compras',
        produtos: [],
        miCarrito: [],
        total: 0,
        totalCompra: 0,
        miCarritoProcesado: [],
    },
    mounted: function () {
        this.cantidadProd();
        var datos = JSON.parse(localStorage.getItem('homesafe'));
        if (datos === null) {
            this.miCarrito = [];
        } else {
            this.miCarrito = datos;
        }
        this.mostrarProductos();
        this.mostrarCarrito();
    },
    computed: {
        sumarCompra: function () {
            this.totalCompra = 0;
            for (carrito of this.miCarritoProcesado) {
                this.totalCompra = this.totalCompra + carrito.precio;
            }
            return this.totalCompra;
        },
        cantidadProdd: function () {
            this.total = this.miCarritoProcesado.length;
            return this.total;
        },
    },
    methods: {
        mostrarProductos: function () {
            axios.post('../../core/api/products.php?accion=viewAllProducts')
                .then(function (response) {
                    cart.produtos = response.data.popularProducts;
                });
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
            this.calcSuma();
            localStorage.setItem('homesafe', JSON.stringify(this.miCarrito));
        },
        eliminarProdCarrito: function (id, index) {
            this.miCarritoProcesado.splice(index, 1);
            this.cantidadProd();
            localStorage.setItem('homesafe', JSON.stringify(this.miCarrito));
            console.log('index eliminado:' + index + ' id_producto: ' + id);
            this.limpiarMiCarrito(id);
        },
        limpiarMiCarrito: function (id) {
            this.miCarrito = this.miCarrito.filter(function (indice) {
                return indice.id_producto !== id;
            })
            console.log(this.miCarrito);
            localStorage.setItem('homesafe', JSON.stringify(this.miCarrito));
        },
        calcSuma: function () {
            const miCarritoSinDuplicados = this.miCarrito.reduce((acumulador, valorActual) => {
                const elementoYaExiste = acumulador.find(elemento => elemento.id_producto === valorActual.id_producto);
                if (elementoYaExiste) {
                    return acumulador.map((elemento) => {
                        if (elemento.id_producto === valorActual.id_producto) {
                            return {
                                ...elemento,
                                cantidad: elemento.cantidad + valorActual.cantidad,
                                precio: elemento.precio + valorActual.precio
                            }
                        }
                        return elemento;
                    });
                }
                return [...acumulador, valorActual];
            }, []);
            this.miCarritoProcesado = miCarritoSinDuplicados;
        },
        mostrarCarrito: function () {
            this.calcSuma();
        },
        restarProducto: function (id, nombre) {
            for (var i = 0; i < this.miCarrito.length; i++) {
                if (this.miCarrito[i].nombre == nombre) {
                    this.miCarrito.splice(i, 1);
                    break;
                }
            }
            this.cantidadProd();
            this.calcSuma();
            console.log(this.miCarrito);
            console.log(nombre);
            localStorage.setItem('homesafe', JSON.stringify(this.miCarrito));
        }
    },
})