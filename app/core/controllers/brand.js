Vue.component('brand-li', {
    props: ['nombre', 'redireccion', 'asd'],
    template: `
        <li><a :href="'brands.php?brand='+redireccion">{{nombre}}</a><li>
    `
})

var brand = new Vue({
    el: '#brand',
    data: {
        url: 'brands.php',
        hola: 'hola mundo',
        allBrands: [],
    },
    mounted: function () {
        this.getBrands();
    },
    methods: {
        getBrands: function () {
            axios.get('http://localhost/homesafe/app/core/api/brand.php?accion=allBrands')
                .then(function (response) {
                    brand.allBrands = response.data.allBrands;
                });
        },
    },
    template: `
    <div>
    <brand-li v-for="item in allBrands" :nombre="item.nombre_m" :redireccion="item.nombre_m"></brand-li>
    </div>
    `
});
