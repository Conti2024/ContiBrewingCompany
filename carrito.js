//carrito

const carrito = document.getElementById('carrito');
const elementos = document.getElementById('lista');
const elementos2 = document.getElementById('lista-2');
const lista = document.querySelector('#lista-carrito');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');


cargarEventListeners();

function cargarEventListeners(){
    elementos2.addEventListener('click', comprarElemento);

    carrito.addEventListener('click', eliminarElemento)

    vaciarCarritoBtn.addEventListener('click',vaciarCarrito);

    document.addEventListener('DOMContentLoaded', leerLocalStorage);

}

function comprarElemento(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {// Encontrar el contenedor del producto más cercano
       const elemento = e.target.parentElement.parentElement;
       leerDatosElemento(elemento);
    }
}


function leerDatosElemento(elemento){
    const infoElemento =  {
        imagen  : elemento.querySelector('img').src,
        titulo :  elemento.querySelector('h3').textContent,
        precio :  elemento.querySelector('.precio').textContent,
        id :  elemento.querySelector('a').getAttribute('data-id')
    } 

    insertarCarrito(infoElemento);
}


// Declarar una variable total al inicio para llevar la cuenta del total
let total = 0;

function insertarCarrito(elemento) {
    const row = document.createElement('tr');
    row.innerHTML = `
    <td>
        <img src="${elemento.imagen}" width=100>
    </td>
    <td>
        ${elemento.titulo}
    </td>
    <td>
        $${elemento.precio}
    </td>
    <td>
        <a href="#" class="borrar" data-id="${elemento.id}">x</a>
    </td>
    `;
    
    // Agregar la fila al carrito
    lista.appendChild(row);
    
    // Verificar si el precio es un número antes de sumarlo al total
    const precioNumerico = parseFloat(elemento.precio);
    if (!isNaN(precioNumerico)) {
        // Sumar el precio del elemento al total
        total += precioNumerico;
        
        // Mostrar el total en algún lugar de tu página
        document.getElementById('total').innerText = `TOTAL: $${total.toFixed(2)}`;
    } else {
        console.error(`El precio "${elemento.precio}" no es un número válido.`);
    }
    
    // Guardar el elemento en el localStorage
    guardarElementoLocalStorage(elemento);
}



function eliminarElemento(e) {
    e.preventDefault();

    let elemento,
        elementoId,
        precio;

    if (e.target.classList.contains('borrar')) {
        elemento = e.target.parentElement.parentElement;
        precio = parseFloat(elemento.querySelector('td:nth-child(3)').innerText.slice(1)); // Obtener el precio del elemento
        total -= precio; // Restar el precio del elemento eliminado del total
        elemento.remove();

        // Mostrar el total actualizado en algún lugar de tu página
        document.getElementById('total').innerText = `Total: $${total.toFixed(2)}`;

        elementoId = elemento.querySelector('a').getAttribute('data-id');
    }

    eliminarElementoLocalStorage(elementoId);
}


// Función para mostrar el total
function mostrarTotal() {
    const totalElement = document.getElementById('total');
    if (total === 0) {
        totalElement.innerText = 'TOTAL: $0';
    } else {
        totalElement.innerText = `TOTAL: $${total.toFixed(2)}`;
    }
}


function vaciarCarrito() {
    // Eliminar todos los elementos del carrito
    while (lista.firstChild) {
        lista.removeChild(lista.firstChild);
    }

    // Vaciar el localStorage
    vaciarLocalStore();
    
    // Restablecer el total a 0
    total = 0;
    
    // Mostrar el total actualizado en la página
    mostrarTotal();
    
    return false;
}



function guardarElementoLocalStorage(elemento){

    let elementos;

    elementos = obtenerelementosLocalStorage();

    elementos.push(elemento);

    localStorage.setItem('elementos' , JSON.stringify(elementos));
}


function obtenerelementosLocalStorage(){
    let elementosLS;

    if(localStorage.getItem('elementos') === null){
        elementosLS= [];
    }else{
        elementosLS = JSON.parse(localStorage.getItem('elementos'));
    }

    return elementosLS;
}


function leerLocalStorage( ){
     let elementosLS;

     elementosLS = obtenerelementosLocalStorage();

     elementosLS.forEach(function(elemento){

        const row = document.createElement('tr');
        row.innerHTML = `
        <td>
            <img src="${elemento.imagen}" width=100>
        </td>
    
        <td>
            ${elemento.titulo}
        </td>
        <td>
            ${elemento.precio}
        </td>
        <td>
            <a href="#" class="borrar" data-id="${elemento.id}">X</a>
        </td>
        `;
    
        lista.appendChild(row);

     });
}


function eliminarElementoLocalStorage(elemento){
    let elementosLS;

    elementosLS = obtenerelementosLocalStorage();
    elementosLS.forEach(function(elementoLS, index){
        if(elementoLS.id === elemento){
            elementosLS.splice(index, 1); 
        }
    });
    localStorage.setItem('elementos', JSON.stringify(elementosLS));
}

function vaciarLocalStore() {
    localStorage.clear();
}

document.addEventListener("DOMContentLoaded", function() {
    var menuToggle = document.getElementById("menuToggle");
    var navigation = document.querySelector(".navigation");

    menuToggle.addEventListener("click", function() {
        navigation.classList.toggle("show");
    });
});