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

    const datatablesDaftarBaru = document.getElementById('datatablesDaftarBaru');
    if (datatablesDaftarBaru) {
        new simpleDatatables.DataTable(datatablesDaftarBaru);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesAnggotaAdmin = document.getElementById('datatablesAnggotaAdmin');
    if (datatablesAnggotaAdmin) {
        new simpleDatatables.DataTable(datatablesAnggotaAdmin);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesAnggotaUser = document.getElementById('datatablesAnggotaUser');
    if (datatablesAnggotaUser) {
        new simpleDatatables.DataTable(datatablesAnggotaUser);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesPelatihUser = document.getElementById('datatablesPelatihUser');
    if (datatablesPelatihUser) {
        new simpleDatatables.DataTable(datatablesPelatihUser);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesPelatihAdmin = document.getElementById('datatablesPelatihAdmin');
    if (datatablesPelatihAdmin) {
        new simpleDatatables.DataTable(datatablesPelatihAdmin);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesKategoriAdmin = document.getElementById('datatablesKategoriAdmin');
    if (datatablesKategoriAdmin) {
        new simpleDatatables.DataTable(datatablesKategoriAdmin);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesKompetisiAdmin = document.getElementById('datatablesKompetisiAdmin');
    if (datatablesKompetisiAdmin) {
        new simpleDatatables.DataTable(datatablesKompetisiAdmin);
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
