

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

        