function removeProductListener() {
    const buttons = document.querySelectorAll('button.rm_product');
    buttons.forEach((button) => {
        button.addEventListener('click', (evt) => {
            const id = evt.target.dataset.id;
            handleRemoveProduct(id, evt.target.dataset.cost);
        });
    });
}

function openDealListener() {
    const buttons = document.querySelectorAll('button.open-deal');
    buttons.forEach((button) => {
        button.addEventListener('click', (evt) => {
            handleOpenDeal();
        });
    });
}

function closeDealListener() {
    const buttons = document.querySelectorAll('button.close-deal');
    buttons.forEach((button) => {
        button.addEventListener('click', (evt) => {
            const id = evt.target.dataset.id;
            handleCloseDeal(id);
        });
    });
}

function clickRadioListener() {
    const buttons = document.querySelectorAll('input.form-check-input');
    buttons.forEach((button) => {
        button.addEventListener('click', (evt) => {
            const id = evt.target.dataset.id;
            const input = document.querySelector('input.form-check-input.' + id);
            handleClickRadio(input);
        });
    });
}


function handleRemoveProduct(product_id, deltaCost) {
    const params = new URLSearchParams({
        '_token': document.querySelector('meta[name="csrf-token"]').content,
        'product_id': product_id
    });
    const response = fetch('http://localhost:8000/rm_product?' + params.toString());
    response.then((res) => res.json()).then((payload) => {
    });
    document.getElementById('product' + product_id).remove();
    const totalCost = document.querySelector('i.total-cost');
    totalCost.innerHTML = parseInt(totalCost.innerHTML) - parseInt(deltaCost);
}


function handleCloseDeal(deal_id) {
    const params = new URLSearchParams({
        'deal_id': deal_id
    });
    const response = fetch('http://localhost:8000/close_deal?' + params.toString());
    response.then((res) => res.json()).then((payload) => {
        window.location.replace('http://localhost:8000/paid/' + payload.deal_id);
    });
}

function handleOpenDeal() {
    const params = new URLSearchParams({
        'cost_type': document.querySelector('input[name=gridRadios][checked]').value
    });
    const response = fetch('http://localhost:8000/open_deal?' + params.toString());
    response.then((res) => res.json()).then((payload) => {
        if (payload.cost_type === 'card') {
            window.location.replace('http://localhost:8000/acquiring/' + payload.deal_id);
        } else {
            window.location.replace('http://localhost:8000/paid/' + payload.deal_id);
        }
    });
}

function handleClickRadio(el) {
    var siblings = document.querySelectorAll('input[name=gridRadios]');
    for (var i = 0; i < siblings.length; i++) {
        siblings[i].removeAttribute('checked');
    }
    el.setAttribute('checked', true)
}



removeProductListener();
openDealListener();
closeDealListener();
clickRadioListener();
