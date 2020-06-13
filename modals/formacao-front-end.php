<article>
    <div class="cursos-item" onclick="modal.openModal(this)" data-modal="md-formacao-front-end">
        <span class="tab tab-curso"><?= langs('label.Curso'); ?></span>
        <header>
            <h2>Formação Front-End - Alura</h2>
            <figure>
                <img src="images/icones/083-video-conference.png" alt="Formação Front End"/>
            </figure>
            <div class="overlay">
                <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
            </div>
        </header>
    </div>
    <div id="md-formacao-front-end" class="modal md-small md-azul-2">
        <div class="modal-content">
            <span class="close" onclick="modal.closeModal(this)">
                <i class="fas fa-times"></i>
            </span>
            <h3 class="modal-header"><img src="images/icones/083-video-conference.png"/> Formação Front-End - Alura</h3>
            <div class="row">
                <div class="cl-12">
                    <p>Conclui a Formação Front-End na plataforma Alura, realizei diversos cursos referentes ao Html, Css e Javascript.</p>
                    <span class="span">Lista de cursos:</span>
                    <ul class="list list-projetos li-block">
                        <li>HTML5 e CSS3 parte 1: A primeira página da Web</li>
                        <li>HTML5 e CSS3 parte 2: Posicionamento, listas e navegação</li>
                        <li>HTML5 e CSS3 parte 3: Trabalhando com formulários e tabelas</li>
                        <li>HTML5 e CSS3 parte 4: Avançando no CSS</li>
                        <li>JavaScript: primeiros passos com a linguagem</li>
                        <li>JavaScript: introdução a Orientação a Objetos</li>
                        <li>JavaScript: Interfaces e Herança em Orientação a Objetos</li>
                        <li>Sass e Compass: Descomplicando o CSS</li>
                        <li>Flexbox: Posicione elementos na tela</li>
                        <li>CSS Grid: Simplificando layouts</li>
                        <li>Web Design Responsivo: Páginas que se adaptam do mobile ao desk</li>
                        <li>Arquitetura CSS: Descomplicando os problemas</li>
                        <li>JavaScript: Conhecendo o Browser e padrões de projeto</li>
                        <li>JavaScript: Aprofundando em MVC, padrão Proxy e Factory</li>
                        <li>JavaScript: Salvando dados localmente com IndexedDB</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</article>