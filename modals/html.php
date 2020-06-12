<div id="md-html" class="modal md-small md-laranja">
    <div class="modal-content">
        <span class="close" onclick="modal.closeModal(this)">
            <i class="fas fa-times"></i>
        </span>
        <h3 class="modal-header">
            <img src="images/icones/html-5.png" alt="<?= langs('title.Html'); ?> modal"/>
            <?= langs('title.Html'); ?>/<?= langs('title.Css'); ?>
        </h3>
        <div class="row">
            <div class="cl-12">
                <p>Tenho bom conhecimento da linguagem de marcação padrão da web o HTML, fazendo o uso adequado das suas principais tags e respeitando as regras semânticas definidas pela W3c.</p>
                <p>Também consigo fazer uso da linguagem Css para definir o estilo do HTML.</p>
                <span class="span"><?= langs('cursos.title'); ?>:</span>
                <button class="btn btn-info btn-block" onclick="modal.openModal(this)" data-modal="md-formacao-front-end">
                    Formação Front-End
                </button>
                <span class="span">Tags:</span>
                <ul class="list list-projetos">
                    <li>HTML Tags</li>
                    <li>HTML Forms</li>
                    <li>HTML Media</li>
                    <li>HTML Semantic</li>
                    <li>CSS Selectors</li>
                    <li>CSS Responsive</li>
                    <li>CSS Grid</li>
                </ul>
            </div>
        </div>
    </div>
</div>