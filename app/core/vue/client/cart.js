const cart = new Vue({
	el: '#cart',
	data: {
		rellenarCarrito: [],
		counterCart: 0,
	},
	mounted: function(){
		//Aqui se crea una variable para verificar la existencia de cart
		let datos = JSON.parse(localStorage.getItem('p_cart'));
		if(datos === null){
			this.rellenarCarrito = [];
		}else{
			this.rellenarCarrito = datos;
			this.counterCart = this.rellenarCarrito.length;
		}
	},
	methods: {
		addTocCart: function(id, cantidad, imagen, nombre, precio){
			cart.rellenarCarrito.push({'id': id, 'cantidad': cantidad, 'imagen':imagen, 'nombre': nombre, 'precio': precio, 'total': precio});
			cart.shortCart();
			cart.counterCart = cart.rellenarCarrito.length;
			localStorage.setItem("p_cart", JSON.stringify(this.rellenarCarrito));
			const n = nombre;
			VanillaToasts.create({
  			title: 'Producto añadido al carrito.',
  			text: n,
  			type: 'success', // success, info, warning, error   / optional parameter
  			timeout: 5000
});
		},
		shortCart: function(){
			const miCarritoSinDuplicados = this.rellenarCarrito.reduce(
			  (acumulador, valorActual) => {
			    const elementoYaExiste = acumulador.find(
			      (elemento) => elemento.id === valorActual.id
			    );
			    if (elementoYaExiste) {
			      return acumulador.map((elemento) => {
			        if (elemento.id === valorActual.id) {
			          return {
			            ...elemento,
			            cantidad: elemento.cantidad + valorActual.cantidad,
						
			          };
			        }

			        return elemento;
			      });
			    }
			    return [...acumulador, valorActual];
			  },
			  []
			);
			this.rellenarCarrito = miCarritoSinDuplicados;
			localStorage.setItem("p_cart", JSON.stringify(this.rellenarCarrito));
		}
	}
})