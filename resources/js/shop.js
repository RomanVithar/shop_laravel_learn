function handleImages() {
    const images = document.querySelectorAll('img');
    images.forEach((image) => {
        image.onerror = function () {
            image.src = "{{ asset('images/not_load.jpg') }}"
        }
    });
}

