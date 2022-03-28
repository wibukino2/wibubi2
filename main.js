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

//demo
    
    function btnDemo(){
        document.getElementById("videoDemo").classList.add("open")
        var iframe = document.createElement('iframe');
        iframe.src = 'https://www.youtube.com/embed/azE1bLGueJY';
        iframe.width = "100%"
        iframe.height = "100%"
        iframe.id = "videoId"
        document.querySelector('.webDemo').appendChild(iframe);
    }
    function offVideoDemo(){
        var iframe = document.getElementById('videoId')
        document.getElementById("videoDemo").classList.remove("open")
        document.querySelector('.webDemo').removeChild(iframe)

    }

    function openCartList() {
        document.getElementById("cartItem").classList.add("open")
    }
    function closeCartList() {
        document.getElementById("cartItem").classList.remove("open")
    }
    
    const btnRelax = () => {
        var link = 'music.html'
        window.location.assign(link)
    }
