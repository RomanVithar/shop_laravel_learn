function handleImages() {
    const images = document.querySelectorAll('img');
    images.forEach((image) => {
        image.onerror = function () {
            image.src = "images/not_load.jpg"
        }
    });
}

function addProductListener() {
    const buttons = document.querySelectorAll('button.add-product');
    buttons.forEach((button) => {
        button.addEventListener('click', (evt) => {
            const id = evt.target.dataset.id;
            handleAddProduct(id);
        });
    });
}

function handleAddProduct(product_id) {
    const params = new URLSearchParams({
        'product_id': product_id
    });
    const response = fetch('http://localhost:8000/add_product?' + params.toString());
    console.log("test log");
    response.then((res) => res.json()).then((payload) => {
        console.log(payload);
    });
    const card = document.querySelector('div.card-body.card-'+product_id);
    card.querySelector('button.add-product').remove();
}

handleImages();
addProductListener();
// /add_product
