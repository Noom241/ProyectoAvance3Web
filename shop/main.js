function filtrarProductos() {
    const materialSeleccionado = document.getElementById('material').value;
    const estiloSeleccionado = document.getElementById('estilo').value;
    const colorSeleccionado = document.getElementById('color').value;
    const tipoSeleccionado = document.getElementById('tipo').value;
    const searchInput = document.getElementById('searchInput').value.toLowerCase(); // Obtener el valor de búsqueda en minúsculas

    const productos = document.querySelectorAll('.product-item');

    productos.forEach((producto) => {
        const productoMaterial = producto.getAttribute('data-material');
        const productoEstilo = producto.getAttribute('data-estilo');
        const productoColor = producto.getAttribute('data-color');
        const productoTipo = producto.getAttribute('data-tipo');
        const productoNombre = producto.querySelector('.card-title').textContent.toLowerCase(); // Obtener el nombre del producto en minúsculas

        if (
            (materialSeleccionado === 'todos' || productoMaterial === materialSeleccionado) &&
            (estiloSeleccionado === 'todos' || productoEstilo === estiloSeleccionado) &&
            (colorSeleccionado === 'todos' || productoColor === colorSeleccionado) &&
            (tipoSeleccionado === 'todos' || productoTipo === tipoSeleccionado) &&
            (productoNombre.includes(searchInput)) // Comprobar si el nombre del producto contiene el valor de búsqueda
        ) {
            producto.style.display = 'block'; // Mostrar el producto
        } else {
            producto.style.display = 'none'; // Ocultar el producto
        }
    });
}
function addToCart(productName, productPrice) {
    // Simplemente imprimimos los datos del producto seleccionado en la consola
    console.log("Producto añadido al carrito:");
    console.log("Nombre: " + productName);
    console.log("Precio: $" + productPrice);
}

// Llamar a la función cuando se cambia una selección
document.getElementById('material').addEventListener('change', filtrarProductos);
document.getElementById('estilo').addEventListener('change', filtrarProductos);
document.getElementById('color').addEventListener('change', filtrarProductos);
document.getElementById('tipo').addEventListener('change', filtrarProductos);

// Llamar a la función cuando se carga la página y en cada cambio de entrada en la barra de búsqueda
window.addEventListener('load', filtrarProductos);
document.getElementById('searchInput').addEventListener('input', filtrarProductos);

// Agregar un manejador de eventos a los botones "Añadir al carrito"
const addToCartButtons = document.querySelectorAll('.addToCart');
addToCartButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        const productName = event.target.getAttribute('data-product-name');
        const productPrice = event.target.getAttribute('data-product-price');
        addToCart(productName, productPrice);
    });
});