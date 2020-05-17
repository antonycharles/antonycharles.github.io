<section id="formacao-academica" class="box box-formacao">
    <div class="grid">
        <h4 class="box-title box-green"><?= langs('formacao.title'); ?></h4>
        <div class="row">
            <div class="cl-12 cl-g-6">
                <article class="formacao-item margin-right">
                    <header>
                        <figure>
                            <img src="images/icones/reward-cinza.png" title="<?= langs('formacao.InformaticaNegocio'); ?>"/>
                        </figure>
                        <div>
                            <h2><?= langs('formacao.InformaticaNegocio'); ?></h2>
                        </div>
                    </header>
                    <div class="row">
                        <div class="cl-12 cl-s-8">
                            <ul>
                                <li>
                                    <span><?= langs('label.Instituicao'); ?></span>
                                    <p><?= langs('formacao.InNeFatec'); ?></p>
                                </li>
                                <li>
                                    <span><?= langs('label.Inicio'); ?></span>
                                    <p><?= langs('formacao.InNeInicio'); ?></p>
                                </li>
                                <li>
                                    <span><?= langs('label.Fim'); ?></span>
                                    <p><?= langs('formacao.InNeFim'); ?></p>
                                </li>
                            </ul>
                        </div>
                        <div class="cl-12 cl-s-4">
                            <ul>
                                <li>
                                    <span><?= langs('label.Nivel'); ?></span>
                                    <p><?= langs('formacao.InNeNivel'); ?></p>
                                </li>
                                <li>
                                    <span><?= langs('label.Duracao'); ?></span>
                                    <p><?= langs('formacao.InNeDuracao'); ?></p>
                                </li>
                                <li>
                                    <span><?= langs('label.Status'); ?></span>
                                    <p><b><?= langs('formacao.InNeStatus'); ?></b></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cl-12">
                            <span><?= langs('label.Progresso'); ?></span>
                            <div class="bar-progresso">
                                <div style="width: 66%;"></div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="text-center">
                        <button class="btn btn-secondary modal-open" data-modal="md-formacao-fatec"><i class="fas fa-plus"></i> <?= langs('links.Informacao'); ?></button>
                    </div>
                    <?php include 'modals/fatec-informatica-negocios.php'; ?>
                </article>
            </div>
            <div class="cl-12 cl-g-6">
                <article class="formacao-item margin-left">
                    <header>
                        <figure>
                            <img src="images/icones/reward-verde.png" title="<?= langs('formacao.TecnicoInformatico'); ?>"/>
                        </figure>
                        <div>
                            <h2><?= langs('formacao.TecnicoInformatico'); ?></h2>
                        </div>
                    </header>
                    <div class="row">
                        <div class="cl-12 cl-s-7">
                            <ul>
                                <li>
                                    <span><?= langs('label.Instituicao'); ?></span>
                                    <p><?= langs('formacao.TecInfEtec'); ?></p>
                                </li>
                                <li>
                                    <span><?= langs('label.Inicio'); ?></span>
                                    <p><?= langs('formacao.TecInfInicio'); ?></p>
                                </li>
                                <li>
                                    <span><?= langs('label.Fim'); ?></span>
                                    <p><?= langs('formacao.TecInfFim'); ?></p>
                                </li>
                            </ul>
                        </div>
                        <div class="cl-12 cl-s-5">
                            <ul>
                                <li>
                                    <span><?= langs('label.Nivel'); ?></span>
                                    <p><?= langs('formacao.TecInfNivel'); ?></p>
                                </li>
                                <li>
                                    <span><?= langs('label.Duracao'); ?></span>
                                    <p><?= langs('formacao.TecInfDuracao'); ?></p>
                                </li>
                                <li>
                                    <span><?= langs('label.Status'); ?></span>
                                    <p><b><?= langs('formacao.TecInfStatus'); ?></b></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cl-12">
                            <span><?= langs('label.Progresso'); ?></span>
                            <div class="bar-progresso">
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="text-center">
                        <button class="btn btn-secondary modal-open" data-modal="md-formacao-etec-info-int"><i class="fas fa-plus"></i> <?= langs('links.Informacao'); ?></button>
                    </div>
                    <?php include 'modals/etec-tecnico-informatica-internet.php'; ?>
                </article>
            </div>
        </div>
    </div>
</section>