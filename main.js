function guardarCarritoEnLocalStorage(carrito) {
    localStorage.setItem('carrito', JSON.stringify(carrito));
    }

    function cargarCarritoDesdeLocalStorage() {
        const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        return carrito;
        }
