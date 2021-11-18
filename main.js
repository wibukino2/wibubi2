function openProduct(){
    window.location('chitietsanpham.html')
}
// document.getElementById("js-dangnhap-btn").onclick = loginForm;

function loginForm(){

    
    document.getElementById("js-modal-login").classList.add('open');

}

function offloginForm(){

    
    document.getElementById("js-modal-login").classList.remove('open');

}
function offRegisForm(){

    
    document.getElementById("js-modal-regis").classList.remove('open');

}

function onRegisForm(){
    document.getElementById("js-modal-login").classList.remove('open');

    document.getElementById("js-modal-regis").classList.add('open');
}

const iconRun = document.querySelector('.header__logo-img')

const iconAnimate = iconRun.animate([{ transform: "rotate(360deg)" }], {
    duration: 10000,
    iterations: Infinity
    });


//danh muc
const name_item = document.querySelectorAll('.home-product-item__name')
const search_item = document.getElementById('search-item')
const element_product = document.querySelectorAll('.product-all')
const filter_btn = document.querySelectorAll('#category-list .category-item')
console.log(Array.from(filter_btn));
Array.from(filter_btn).forEach(function (element) {
    element.addEventListener('click', function (e) {
        for(let i=0; i<filter_btn.length; i++) {
            filter_btn[i].classList.remove('category-item--active');
        }
        this.classList.add('category-item--active');
        
        let name_filter = element.dataset.filter;

    Array.from(element_product).forEach(function(item){
        if (item.dataset.item === name_filter || name_filter === 'all')
        item.style.display = 'block';
        else {
            item.style.display = 'none';
        }
    })
    })
})

//search
// const element_product = document.querySelectorAll('.product-all')
// const search_item = document.getElementById('search-item')
    search_item.addEventListener('keyup', searchItem)
    function searchItem(){
        // chuyển thành viết thường
        let valueItem = search_item.value.toLowerCase();
        Array.from(element_product).forEach(function(element){
            let nameItem = element.querySelector('.home-product-item__name').textContent;
            if (nameItem.toLowerCase().indexOf(valueItem) !== -1)
            {
                element.style.display = 'block';
            }
            else
            {
                element.style.display = 'none';
            }
        })
        checkEmpty(element_product);
    }

    function checkEmpty(element){
        let count = 0;
        for(let i = 0; i < element.length; i++){
            if (element[i].style.display == 'block')
            count++;
        }

        if (count == 0){
            document.querySelector('#no__product').textContent = 'Can\'t find'; 
        }
        else{
            document.querySelector('#no__product').textContent = ''; 
        }
    }

