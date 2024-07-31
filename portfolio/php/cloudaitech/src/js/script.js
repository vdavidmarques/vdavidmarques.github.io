function openMenu() {
    var element = document.querySelectorAll(".navbar");
    element.forEach(function(el){
        el.classList.add("active");
      });
}

function closeMenu(){
    var close = document.querySelectorAll(".navbar");
    close.forEach(function(item){
        item.classList.remove("active");
    });
}

var trigger = document.querySelector('.cases .swiper .swiper-slide')
var closeModal = document.querySelector('.modal .close')
var el = document.querySelector('.modal')

trigger.addEventListener('click', function () {
  el.classList.add("!block");
})

closeModal.addEventListener('click', function(){
    el.classList.remove("!block");
})