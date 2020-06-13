<div id="md-java" class="modal md-small md-vermelho">
    <div class="modal-content">
        <span class="close" onclick="modal.closeModal(this)">
            <i class="fas fa-times"></i>
        </span>
        <h3 class="modal-header">
            <img src="images/icones/java.png" class="ver-bottom" alt="<?= langs('title.Java'); ?> modal"/> <?= langs('title.Java'); ?>
        </h3>
        <div class="row">
            <div class="cl-12">
                <p>Tenho um <b>baixo conhecimento com a plataforma Java</b>, os conhecimentos que adquiri foram obtidos através de cursos realizados na plataforma Alura e pelo fato de ser a linguagem padrão da <b>Universidade</b>.</p>
                <span class="span"><?= langs('cursos.title'); ?>:</span>
                <button class="btn btn-info btn-block" onclick="modal.openModal(this)" data-modal="md-formacao-java">
                    <?= langs('title.formacaoJava'); ?>
                </button>
            </div>
        </div>
    </div>
</div>