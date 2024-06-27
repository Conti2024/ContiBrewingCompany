function addToCart(productId) {
    // Aquí obtienes la información del producto usando el ID
    // Por ejemplo, podrías buscar en una base de datos o en un objeto predefinido

    // Luego, creas un objeto que represente el producto
    var product = {
        id: productId,
        name: "CERVEZA TUCANA",
        price: 60.00,
        quantity: 1 // Inicialmente agregamos una unidad del producto
    };

    // Llamamos a una función para agregar el producto al carrito
    //addToCartUI(product);
}

function addToCartUI(product) {
    var cartContainer = document.getElementById("cart-container");

    // Crear un elemento div para mostrar el producto en el carrito
    var productElement = document.createElement("div");
    productElement.classList.add("cart-item");
    productElement.innerHTML = `
        <p>${product.name}</p>
        <p>${product.price}</p>
        <input type="number" value="${product.quantity}" min="1" onchange="updateQuantity('${product.id}', this.value)">
        <button onclick="removeFromCart('${product.id}')">Remove</button>
    `;

    // Agregar el elemento del producto al contenedor del carrito
    cartContainer.appendChild(productElement);
}

