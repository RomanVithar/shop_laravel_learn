/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/layout.js ***!
  \********************************/
function removeProductListener() {
  var buttons = document.querySelectorAll('button.rm_product');
  buttons.forEach(function (button) {
    button.addEventListener('click', function (evt) {
      var id = evt.target.dataset.id;
      handleRemoveProduct(id, evt.target.dataset.cost);
    });
  });
}

function openDealListener() {
  var buttons = document.querySelectorAll('button.open-deal');
  buttons.forEach(function (button) {
    button.addEventListener('click', function (evt) {
      handleOpenDeal();
    });
  });
}

function closeDealListener() {
  var buttons = document.querySelectorAll('button.close-deal');
  buttons.forEach(function (button) {
    button.addEventListener('click', function (evt) {
      var id = evt.target.dataset.id;
      handleCloseDeal(id);
    });
  });
}

function clickRadioListener() {
  var buttons = document.querySelectorAll('input.form-check-input');
  buttons.forEach(function (button) {
    button.addEventListener('click', function (evt) {
      var id = evt.target.dataset.id;
      var input = document.querySelector('input.form-check-input.' + id);
      handleClickRadio(input);
    });
  });
}

function handleRemoveProduct(product_id, deltaCost) {
  var params = new URLSearchParams({
    '_token': document.querySelector('meta[name="csrf-token"]').content,
    'product_id': product_id
  });
  var response = fetch('http://localhost:8000/rm_product?' + params.toString());
  response.then(function (res) {
    return res.json();
  }).then(function (payload) {});
  document.getElementById('product' + product_id).remove();
  var totalCost = document.querySelector('i.total-cost');
  totalCost.innerHTML = parseInt(totalCost.innerHTML) - parseInt(deltaCost);
}

function handleCloseDeal(deal_id) {
  var params = new URLSearchParams({
    'deal_id': deal_id
  });
  var response = fetch('http://localhost:8000/close_deal?' + params.toString());
  response.then(function (res) {
    return res.json();
  }).then(function (payload) {
    console.log(payload.deal_id);
    window.location.replace('http://localhost:8000/paid/' + payload.deal_id);
  });
}

function handleOpenDeal() {
  var params = new URLSearchParams({
    'cost_type': document.querySelector('input[name=gridRadios][checked]').value
  });
  var response = fetch('http://localhost:8000/open_deal?' + params.toString());
  response.then(function (res) {
    return res.json();
  }).then(function (payload) {
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

  el.setAttribute('checked', true);
}

function plusProductListener() {
  var buttons = document.querySelectorAll('button.plus-product');
  buttons.forEach(function (button) {
    button.addEventListener('click', function (evt) {
      var id = evt.target.dataset.id;
      handlePlusProduct(id);
    });
  });
}

function minusProductListener() {
  var buttons = document.querySelectorAll('button.minus-product');
  buttons.forEach(function (button) {
    button.addEventListener('click', function (evt) {
      var id = evt.target.dataset.id;
      handleMinusProduct(id);
    });
  });
}

function handlePlusProduct(product_id) {
  var params = new URLSearchParams({
    'product_id': product_id,
    'number': 1
  });
  var number = document.querySelector('p.count-product-' + product_id);
  var response = fetch('http://localhost:8000/incrementProduct?' + params.toString());
  response.then(function (res) {
    return res.json();
  }).then(function (payload) {
    number.innerHTML = parseInt(number.innerHTML) + 1;
  });
}

function handleMinusProduct(product_id) {
  var params = new URLSearchParams({
    'product_id': product_id,
    'number': -1
  });
  var number = document.querySelector('p.count-product-' + product_id);

  if (parseInt(number.innerHTML) - 1 < 0) {
    return;
  }

  var response = fetch('http://localhost:8000/incrementProduct?' + params.toString());
  response.then(function (res) {
    return res.json();
  }).then(function (payload) {
    number.innerHTML = parseInt(number.innerHTML) - 1;

    if (parseInt(number.innerHTML) === 0) {
      window.location.replace('http://localhost:8000/shop');
    }
  });
}

removeProductListener();
openDealListener();
closeDealListener();
clickRadioListener();
plusProductListener();
minusProductListener();
/******/ })()
;