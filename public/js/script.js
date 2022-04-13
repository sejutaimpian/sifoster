// Active Nav Beranda
const activePage = location.href;
const navLink = document.querySelectorAll('nav ul li a');
const navLinkLength = navLink.length;
for(let i = 0; i<navLinkLength; i++){
    if(navLink[i].href === activePage){
        navLink[i].classList.add("active");
    }
}

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


// Modal Gallery
document.addEventListener('click', function(e){
    if(e.target.classList.contains("gallery-item")){
        const src = e.target.getAttribute("src");
        document.querySelector(".modal-img").src= src;
        const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
        myModal.show();
    }
})

// Datatables
window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});

// Active Nav Login
const activePageLogin = location.href;
const navLinkLogin = document.querySelectorAll('#layoutSidenav .nav a');
const navLinkLengthLogin = navLinkLogin.length;
for(let i = 0; i<navLinkLengthLogin; i++){
    if(navLinkLogin[i].href === activePageLogin){
        navLinkLogin[i].classList.add("active");
    }
}
