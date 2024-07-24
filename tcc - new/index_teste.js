
window.addEventListener("scroll", function(){
    let header = document.querySelector('.container-cabecalho') 
    header.classList.toggle('rolagem',window.scrollY > 0)
    })
    window.addEventListener("scroll", function(){
        let header = document.querySelector('.principal') 
        header.classList.toggle('aparecer',window.scrollY > 0)
        })
        window.addEventListener("scroll", function(){
            let header = document.querySelector('.cabecalho') 
            header.classList.toggle('aparecer2',window.scrollY > 0)
            })
        function abrir(){
            document.getElementById("menuoculto").style.width="300px"
        }
        function fechar(){
            document.getElementById("menuoculto").style.width="0px";
        }
        let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("botao");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000);
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}