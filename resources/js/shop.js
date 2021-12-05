function plusProductListener() {
    const buttons = document.querySelectorAll('button.plus-product');
    buttons.forEach((button) => {
        button.addEventListener('click', (evt) => {
            const id = evt.target.dataset.id;
            handlePlusProduct(id);
        });
    });
}

function minusProductListener() {
    const buttons = document.querySelectorAll('button.minus-product');
    buttons.forEach((button) => {
        button.addEventListener('click', (evt) => {
            const id = evt.target.dataset.id;
            handleMinusProduct(id);
        });
    });
}

function handlePlusProduct(product_id) {
    const params = new URLSearchParams({
        'product_id': product_id,
        'number': 1
    });
    const number = document.querySelector('p.count-product-' + product_id);
    const response = fetch('http://localhost:8000/incrementProduct?' + params.toString());
    response.then((res) => res.json()).then((payload) => {
        number.innerHTML = parseInt(number.innerHTML) + 1;
    });
}

function handleMinusProduct(product_id) {
    const params = new URLSearchParams({
        'product_id': product_id,
        'number': -1
    });
    const number = document.querySelector('p.count-product-' + product_id);
    if (parseInt(number.innerHTML) - 1 < 0) {
        return;
    }
    const response = fetch('http://localhost:8000/incrementProduct?' + params.toString());
    response.then((res) => res.json()).then((payload) => {
        number.innerHTML = parseInt(number.innerHTML) - 1;
        if (parseInt(number.innerHTML) === 0) {
            window.location.replace('http://localhost:8000/shop');
        }
    });
}

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
    const response = fetch('/add_product?'+params.toString(), {
        method: 'GET',
        headers: {
            'Content-Type': 'x-www-form-urlencoded',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
    });
    response.then((res) => res.json()).then((payload) => {
        console.log(payload)
    });
    const card = document.querySelector('div.card-body.card-'+product_id);
    card.querySelector('button.add-product').remove();
    card.innerHTML = " <ul class=\"list-horizontal count-product-"+product_id+" text-center\" >" +
        "                                    <li>" +
        "                                        <button data-id=\""+product_id+"\" class=\"minus-product btn btn-dark\">-</button>" +
        "                                    </li>" +
        "                                    <li>" +
        "                                        <p class=\"count-product-"+product_id+" count-text\">1</p>" +
        "                                    </li>" +
        "                                    <li>" +
        "                                        <button data-id=\""+product_id+"\" class=\"plus-product btn btn-dark\">+</button>" +
        "                                    </li>" +
        "                                </ul";
    plusProductListener();
    minusProductListener();
}

handleImages();
addProductListener();
plusProductListener();
minusProductListener();
