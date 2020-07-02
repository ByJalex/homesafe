const cart_process = new Vue({
	el: '#cart_process',
	data: {
		showMyCart: [],
		send: {
			totalCompra: 0
		}
	},
	mounted: function(){
		this.getAllContentOfMyCart();
		localStorage.setItem('t', this.sumarFrutas);
	},
	computed: {
		sumarFrutas: function(){
			this.send.totalCompra = 0;
			for (a of this.showMyCart) {
				this.send.totalCompra = this.send.totalCompra + (a.precio * a.cantidad);
				//console.log(a.precio);
			}
			return this.send.totalCompra.toFixed(2);
		}
	},
	methods: {
		//Se crea un metodo para verificar si en realidad se quiere eliminar el objeto del carrito de compras
		deleteProduct(index){
			swal({
			  title: "¿Estas seguro?",
			  text: "Deseas eliminar este producto de tu carrito de compras.",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Eliminar",
			  cancelButtonText: "Cancelar",
			  closeOnConfirm: true,
			  closeOnCancel: true
			},
			function(isConfirm){
			  if (isConfirm) {
			    		cart_process.showMyCart.splice(index, 1);
						localStorage.setItem("p_cart", JSON.stringify(cart_process.showMyCart));
			  } else {
			    //swal("Cancelled", "Your imaginary file is safe :)", "error");
			  }
			});
		},
		//Este metodo sirve para restar las cantidades de los objetos del carrito de compras
		rest: function(index, cantidad){
			this.showMyCart[index].cantidad = cantidad - 1;
			localStorage.setItem("p_cart", JSON.stringify(cart_process.showMyCart));
			localStorage.setItem('t', this.sumarFrutas);
		},
		//Este metodo sirve para sumar las cantidades del carrito de compras
		sum: function(index, cantidad){
			this.showMyCart[index].cantidad = cantidad + 1;
			localStorage.setItem("p_cart", JSON.stringify(cart_process.showMyCart));
			localStorage.setItem('t', this.sumarFrutas);
		},
		//Este metodo srive para obtener todo el contenido que esta en el localStorage relacionado al 
		//Carrito de compras y llenarlo segun los datos existentes.
		getAllContentOfMyCart: function(){
		let datos = JSON.parse(localStorage.getItem('p_cart'));
		if(datos === null){
			this.showMyCart = [];
		}else{
			this.showMyCart = datos;
			const miCarritoSinDuplicados = datos.reduce(
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
			            total: elemento.precio * elemento.cantidad,

			          };
			        }

			        return elemento;
			      });
			    }
			    return [...acumulador, valorActual];
			  },
			  []
			);
			this.showMyCart = miCarritoSinDuplicados;
		}
		}
	}
})