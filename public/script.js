// Active Nav
const activePage = location.href;
const navLink = document.querySelectorAll('nav ul li a');
const navLinkLength = navLink.length;
for(let i = 0; i<navLinkLength; i++){
    if(navLink[i].href === activePage){
        navLink[i].classList.add("active");
    }
}

// SwiperJS
// Swiper Title
var swiper = new Swiper(".titleSwiper", {
    spaceBetween: 5,
    slidesPerView: 5,
    watchSlidesProgress: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        576: {
            slidesPerView: 3,
            spaceBetween: 5,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 5,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 5,
        },
    },
});

// Swiper Hero
var swiper2 = new Swiper(".heroSwiper", {
    spaceBetween: 10,
    keyboard: {
        enabled: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});

// Image Preview pada Form
function previewImg(){
    const foto = document.querySelector('#foto');
    const imgPreview = document.querySelector('.img-preview');
    const fileFoto = new FileReader();
    fileFoto.readAsDataURL(foto.files[0]);
    
    fileFoto.onload = function (e){
        imgPreview.src = e.target.result;
    }
}

// ckeditor
