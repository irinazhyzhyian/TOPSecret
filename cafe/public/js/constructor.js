function translateClassName(color) {
    let name;

    if (color == 'milk_coffee') {
        name = 'Milk coffee';
    } else if (color == 'black_coffee') {
        name = 'Black coffee';
    } else if (color == 'sugar') {
        name = 'Sugar';
    } else if (color === 'caramel') {
        name = 'Caramel syrop';
    } else if (color === 'chocolate') {
        name = 'Chocolate syrop';
    }

    return name;
}

function addNew(color) {
    let stakan = document.querySelector('#stakan');
    let allProducts = document.querySelector('#all-products');
    let countElement = stakan.children.length + 1;

    if (countElement <= 13) {
        allProducts.className = '';
        allProducts.classList.add('d-block');
        stakan.insertAdjacentHTML('beforeend', '<div class="color '+color+' ' + color + '_' + countElement + '"></div>');
        allProducts.insertAdjacentHTML('beforeend', '<div class="d-flex justify-content-center flex-row-reverse"><input type="hidden" name="composition[]" value="' + color + '_' + countElement + '"><div>'+translateClassName(color)+'</div><div class="pl-5" id="delete_it" valueForDelete="' + color + '_' + countElement + '" onclick="deleteThis(this)">X</div></div>');
    }
}

function changeSize(e) {
    let size = 'size-'+e.getAttribute('size');
    let stakan = document.querySelector('#stakan');

    stakan.className = '';
    stakan.classList.add(size);
}

function deleteThis(e) {
    let valueForFindElement = e.getAttribute('valueForDelete');

    document.querySelector('.'+valueForFindElement).remove();
    e.parentElement.remove();
}

function copyData() {
    let elementForCopy = document.querySelector('#stakanCopy');
    let copyHtml =  document.querySelector('#all-products');

    elementForCopy.insertAdjacentHTML('beforeend',copyHtml.innerHTML);
}
