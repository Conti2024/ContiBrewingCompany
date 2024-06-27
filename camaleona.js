const cerveza = document.querySelector('.cerveza');
document.addEventListener('mousemove', function(e) {
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    const cervezaX = (window.innerWidth / 2 - mouseX) * 0.1;
    const cervezaY = (window.innerHeight / 2 - mouseY) * 0.1;
    cerveza.style.transform = `translate(${cervezaX}px, ${cervezaY}px)`;
});