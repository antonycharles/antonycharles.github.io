<article>
    <div class="cursos-item" onclick="modal.openModal(this)" data-modal="md-seguranca-em-aplicacoes-web">
        <span class="tab tab-livro"><?= langs('label.Livro'); ?></span>
        <header>
            <h2>Segurança em Aplicações web</h2>
            <figure>
                <img src="images/icones/book.png" alt="Segurança em Aplicações web"/>
            </figure>
            <div class="overlay">
                <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
            </div>
        </header>
    </div>
    <div id="md-seguranca-em-aplicacoes-web" class="modal md-small md-vermelho-2">
        <div class="modal-content">
            <span class="close" onclick="modal.closeModal(this)">
                <i class="fas fa-times"></i>
            </span>
            <h3 class="modal-header"><img src="images/icones/book.png"/> Segurança em Aplicações web</h3>
            <div class="row">
                <div class="cl-12">
                    <p>O livro <b>Segurança Em aplicações web</b> da editora <b>Casa do Código</b>, apresenta algumas das principais vulnerabilidade de aplicações web, explica como estas ameaças funcionam e como fazer para corrigir tais inseguranças.</p>
                </div>
            </div>
        </div>
    </div>
</article>