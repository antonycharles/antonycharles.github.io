<article>
    <div class="cursos-item" onclick="modal.openModal(this)" data-modal="md-livro-desconstruindo-a-web">
        <span class="tab tab-livro"><?= langs('label.Livro'); ?></span>
        <header>
            <h2>Desconstruindo a Web</h2>
            <figure>
                <img src="images/icones/book.png" alt="Desconstruindo a Web"/>
            </figure>
            <div class="overlay">
                <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
            </div>
        </header>
    </div>
    <div id="md-livro-desconstruindo-a-web" class="modal md-small md-vermelho-2">
        <div class="modal-content">
            <span class="close" onclick="modal.closeModal(this)">
                <i class="fas fa-times"></i>
            </span>
            <h3 class="modal-header"><img src="images/icones/book.png"/> Desconstruindo a Web</h3>
            <div class="row">
                <div class="cl-12">
                    <p>O livro <b>Desconstruindo a Web</b> (As tecnologias por trás de uma requisição) da editora <b>Casa do Código</b>, apresenta todos os eventos que ocorrem em uma requisição HTTP, iniciando no navegador, passando pelo sistema operacional, passando pela rede e sendo processada pelo servidor.</p>
                </div>
            </div>
        </div>
    </div>
</article>