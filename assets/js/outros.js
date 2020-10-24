const outros = {
    constructor(){
        this.palco = document.getElementById("glider");
    },

    loadCursos(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let dados = JSON.parse(this.responseText);
                outros.adicionaCursos(dados);
            }
        };
        
        xhttp.open("GET", "assets/json/cursos.json", true);
        xhttp.send();
    },

    adicionaCursos(dados){
        this.palco.innerHTML = "";

        for (i in dados) {
            if(dados[i].tipo == "curso"){
                this.palco.innerHTML += outros.templateCurso(dados[i]);
            }else if(dados[i].tipo == "livro"){
                this.palco.innerHTML += outros.templateLivro(dados[i]);
            }
        }

        outros.runGlider();
    },

    templateCurso(item){
        return `<aside class="cursos__item">
                    <span class="tab tab__curso">Curso</span>
                    <figure>
                        <img src="assets/img/icones/083-video-conference.png" alt="${item.titulo}">
                    </figure>
                    <h2>${item.titulo}</h2>
                    <hr/>
                    <p>${item.instituicao}</p>
                    <p><b><i class="far fa-clock"></i> ${item.duracao}</b></p>
                    <a class="btn btn__secondary" href="${item.link}" target="_blank">
                        <i class="fas fa-external-link-alt" aria-hidden="true"></i> Certificado
                    </a>
                </aside>`;
    },

    templateLivro(item){
        return `<aside class="cursos__item">
                    <span class="tab tab__livro">Livro</span>
                    <figure>
                        <img src="assets/img/icones/book.png" alt="${item.titulo}">
                    </figure>
                    <h2>${item.titulo}</h2>
                    <hr/>
                    <p>${item.instituicao}</p>
                </aside>`;
    },

    runGlider(){
        window._ = new Glider(document.querySelector('.glider'), {
            slidesToShow: 1, //'auto',
            slidesToScroll: 1,
            draggable: true,
            scrollLock: false,
            dots: '',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        slidesToScroll: 'auto',
                        itemWidth: 300,
                        slidesToShow: 'auto',
                        exactWidth: true
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToScroll: 4,
                        slidesToShow: 4,
                        dots: false,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToScroll: 3,
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToScroll: 2,
                        slidesToShow: 2,
                        dots: false,
                        arrows: false,
                        scrollLock: true
                    }
                }
            ]
        });
    }
};

function startOutrosBodyOnload(){
	outros.constructor();
    outros.loadCursos();
}
