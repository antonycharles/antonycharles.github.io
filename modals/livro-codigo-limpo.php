<article>
    <div class="cursos-item" onclick="modal.openModal(this)" data-modal="md-livro-codigo-limpo">
        <span class="tab tab-livro"><?= langs('label.Livro'); ?></span>
        <header>
            <h2>Clean Code</h2>
            <figure>
                <img src="images/icones/book.png" alt="Clean Code"/>
            </figure>
            <div class="overlay">
                <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
            </div>
        </header>
    </div>
    <div id="md-livro-codigo-limpo" class="modal md-small md-vermelho-2">
        <div class="modal-content">
            <span class="close" onclick="modal.closeModal(this)">
                <i class="fas fa-times"></i>
            </span>
            <h3 class="modal-header"><img src="images/icones/book.png"/> Clean Code</h3>
            <div class="row">
                <div class="cl-12">
                    <p></p>
                    <span class="span">Lista de cursos:</span>
                    <ul class="list list-projetos li-block">
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</article>