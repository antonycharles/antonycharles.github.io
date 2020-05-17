<section id="cursos-extras" class="box box-cursos">
    <div class="grid">
        <h4 class="box-title box-blue"><?= langs('cursos.title'); ?></h4>
        <div class="row">
            <div class="cl-12 cl-m-6 cl-g-4">
                <?php include 'modals/formacao-dotnet-alura.php'; ?>
            </div>
            <div class="cl-12 cl-m-6 cl-g-4">
                <article>
                    <div class="cursos-item modal-open" data-modal="md-formacao-java-alura">
                        <span class="tab tab-curso"><?= langs('label.Curso'); ?></span>
                        <header>
                            <h2><?= langs('cursos.title'); ?> <span><?= langs('cursos.title'); ?></span></h2>
                            <figure>
                                <img src="images/icones/002-annual.png" title="<?= langs('cursos.title'); ?>"/>
                            </figure>
                            <div class="overlay">
                                <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
                            </div>
                        </header>
                    </div>
                    <div id="md-formacao-java-alura" class="modal md-small md-azul-2">
                        <div class="modal-content">
                            <span class="close"><i class="fas fa-times"></i></span>
                            <h3 class="modal-header"><img src="images/icones/002-annual.png"/> <?= langs('cursos.title'); ?></h3>
                            <div class="row">
                                <div class="cl-12">
                                    <p>O Tecnólogo em Informática para Negócios é o profissional capaz de buscar as melhores oportunidades de negócio, analisar tendências e encontrar novos caminhos para a empresa. O principal diferencial desse profissional é criar estratégias para viabilizar o alinhamento da Tecnologia da <?= langs('links.Informacao'); ?> à Gestão de Negócios. </p>
                                    <p>O Tecnólogo em Informática para Negócios é o profissional capaz de buscar as melhores oportunidades de negócio, analisar tendências e encontrar novos caminhos para a empresa. O principal diferencial desse profissional é criar estratégias para viabilizar o alinhamento da Tecnologia da <?= langs('links.Informacao'); ?> à Gestão de Negócios. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="cl-12 cl-m-6 cl-g-4">
                <article>
                    <div class="cursos-item">
                        <span class="tab tab-livro"><?= langs('label.Livro'); ?></span>
                        <header>
                            <h2><?= langs('cursos.title'); ?></h2>
                            <figure>
                                <img src="images/icones/006-budget.png" title="<?= langs('cursos.title'); ?>"/>
                            </figure>
                            <div class="overlay">
                                <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
                            </div>
                        </header>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>