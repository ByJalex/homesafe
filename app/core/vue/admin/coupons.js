const coupon = new Vue({
    el: '#coupon',
    data: {
        paginationNumer: [
            { number: 10 },
            { number: 25 },
            { number: 50 },
            { number: 100 }
        ],
        getIdCoupon: {
            id: 0
        },

        searchCoupon: '',
        allCoupons: [],
        NUM_RESULTS: 10,
        pag: 1,
        addCoupons: {
            cupon: '',
            descuento: 0,
            cantidad: 0
        },
        editMyCoupon: {
            cupon: '',
            descuento:0,
            cantidad: 0,
            idDropdownEstate: 1,
            id: 0
        },
        couponDropdown: [],
        couponDropdownEstate: 'Validez',
        
    },
    mounted() {
        this.getAllCoupons();
        this.getValidityCoupon();
    },

    computed: {
        filteredCoupon: function () {
            return this.allCoupons.filter((a) => {
                return a.cupon.match(this.searchCoupon.toLowerCase());
            });
        }
    },
    methods: {
        generateNewCoupon: function () {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/coupons/generatecupon')
                .then(function (response) {
                    coupon.addCoupons.cupon = response.data.code;
                })
        },
        dropdownCoupon: function (id, state) {
            this.couponDropdownEstate = state;
            this.editMyCoupon.idDropdownEstate = id;
        },
        getValidityCoupon: function () {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/coupons/getvalidity')
                .then(function (response) {
                    coupon.couponDropdown = response.data.validity;
                })
        },
        getAllCoupons: function () {
            axios.get('https://homesafe-sv.herokuapp.com/homesafe/api/coupons/allcoupons')
                .then(function (response) {
                    coupon.allCoupons = response.data.allcoupons;
                })
        },
        addCoupon: function () {
            var formData = coupon.toFormData(coupon.addCoupons);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/coupons/addcoupons', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function (response) {
                    swal("Exito", "Agregado correctamente", "success");
                    coupon.getAllCoupons();
                    coupon.addCoupons.cupon = '';
                    coupon.addCoupons.descuento = 0;
                    coupon.addCoupons.cantidad = 0;
                    $('#addCoupon').modal('hide');
                });
        },
        editCoupon: async function (cupon, desc, cantidad, validez, id) {
            coupon.editMyCoupon.cupon = cupon;
            coupon.editMyCoupon.descuento = desc;
            coupon.editMyCoupon.cantidad = cantidad;
            coupon.editMyCoupon.idDropdownEstate = validez;
            coupon.editMyCoupon.id = id;
        },
        toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
        updateCoupon: function () {
            var formData = coupon.toFormData(coupon.editMyCoupon);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/coupons/updatecoupons', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function () {
                    swal("Exito", "Actualizado correctamente", "success");
                    coupon.getAllCoupons();
                    $('#updateCoupons').modal('hide');
                });
        },

        dCoupon: function (id) {
            coupon.getIdCoupon.id = id;
        },
        deleteCoupon: function () {
            var formData = coupon.toFormData(coupon.getIdCoupon);
            axios.post('https://homesafe-sv.herokuapp.com/homesafe/api/coupons/deletecoupons', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(function () {
                    swal("Exito", "Eliminado correctamente", "success");
                    coupon.getAllCoupons();
                    $('#deleteCoupons').modal('hide');
                });
        },
        getPagination: function (number) {
            coupon.NUM_RESULTS = number;
        }
    },
})