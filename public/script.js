// Active Nav
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
