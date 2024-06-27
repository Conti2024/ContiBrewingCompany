window.addEventListener('DOMContentLoaded', (event) => {
    // Reproducir automáticamente los vídeos una vez que la página se haya cargado completamente
    const videos = document.querySelectorAll('.video');
    videos.forEach(video => {
        video.play();
    });
});