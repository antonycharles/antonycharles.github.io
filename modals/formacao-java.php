<article>
    <div class="cursos-item" onclick="modal.openModal(this)" data-modal="md-formacao-java">
        <span class="tab tab-curso"><?= langs('label.Curso'); ?></span>
        <header>
            <h2>Formação Java - Alura (cursando)</h2>
            <figure>
                <img src="images/icones/083-video-conference.png" alt="<?= langs('title.formacaoJava'); ?>"/>
            </figure>
            <div class="overlay">
                <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
            </div>
        </header>
    </div>
    <div id="md-formacao-java" class="modal md-small md-azul-2">
        <div class="modal-content">
            <span class="close" onclick="modal.closeModal(this)">
                <i class="fas fa-times"></i>
            </span>
            <h3 class="modal-header"><img src="images/icones/083-video-conference.png"/> <?= langs('title.formacaoJava'); ?></h3>
            <div class="row">
                <div class="cl-12">
                    <p>Estou <b>cursando</b> a Formação Java na plataforma Alura.</p>
                    <span class="span">Lista de cursos:</span>
                    <ul class="list list-projetos li-block">
                        <li>Java parte 1: Primeiros passos</li>
                        <li>Java parte 2: Introdução à Orientação a Objetos</li>
                        <li>Java parte 3: Entendendo herança e interface</li>
                        <li>Java parte 4: Entendendo exceções</li>
                        <li>Java parte 5: Pacotes e java.lang</li>
                        <li>Java parte 6: Conhecendo o java.util</li>
                        <li>Java parte 7: Trabalhando com java.io</li>
                        <li>Java: Dominando as Collections</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</article>