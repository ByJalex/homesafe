const cart_process = new Vue({
	el: '#cart_process',
	data: {
		showMyCart: []
	},
	mounted: function(){
		this.getAllContentOfMyCart();
	},
	methods: {
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