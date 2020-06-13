<section id="experiencia-profissional" class="box box-experiencia">
    <div class="grid">
        <h4 class="box-title box-brown"><?= langs('profissional.title'); ?></h4>
        <div class="row">
            <div class="cl-12 cl-g-6">
                <article class="experiencia-item margin-right">
                    <header>
                        <figure>
                            <img src="images/icones/suitcase-cinza.png" alt="<?= langs('profissional.AnalistaProgramador'); ?>"/>
                        </figure>
                        <div>
                            <h2><?= langs('profissional.AnalistaProgramador'); ?></h2>
                        </div>
                    </header>
                    <div class="row">
                        <div class="cl-12">
                            <ul>
                                <li>
                                    <span><?= langs('label.Empresa'); ?></span>
                                    <p><?= langs('profissional.Atento'); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cl-12 cl-s-6">
                            <ul>
                                <li>
                                    <span><?= langs('label.DataAdmissao'); ?></span>
                                    <p><?= langs('profissional.AtentoDtAdm'); ?></p>
                                </li>
                            </ul>
                        </div>
                        <div class="cl-12 cl-s-6">
                            <ul>
                                <li>
                                    <span><?= langs('label.DataSaida'); ?></span>
                                    <p><?= langs('profissional.AtentoDtSai'); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cl-12">
                            <span><?= langs('label.TecnologiasUsadas'); ?></span>
                            <ul class="list list-tecnologias">
                                <li><?= langs('title.Net'); ?></li>
                                <li><?= langs('title.C'); ?></li>
                                <li><?= langs('title.AspNet'); ?></li>
                                <li><?= langs('title.JavaScript'); ?></li>
                                <li><?= langs('title.HtmlCss'); ?></li>
                                <li><?= langs('title.SqlServer'); ?></li>
                                <li><?= langs('title.Sql'); ?></li>
                                <li><?= langs('title.Ssis'); ?></li>
                                <li><?= langs('title.visualStudio'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-secondary" onclick="modal.openModal(this)" data-modal="md-experiencia-atento">
                            <i class="fas fa-plus"></i> <?= langs('links.Informacao'); ?>
                        </button>
                    </div>
                    <div id="md-experiencia-atento" class="modal md-azul">
                        <div class="modal-content">
                            <span class="close" onclick="modal.closeModal(this)">
                                <i class="fas fa-times"></i>
                            </span>
                            <h3 class="modal-header"><img src="images/icones/suitcase-cinza.png" alt="Analista Programador Júnior"/> Analista Programador Júnior</h3>
                            <div class="row">
                                <div class="cl-g-8">
                                    <p>Atuei como programador na empresa Atento por 1 ano e 5 meses, durante este período fiz parte da equipe de Sistemas Administrativos. Durante este período trabalhei com diversos sistemas voltados para o RH, realizei atividades de correção de bugs, refatoração de código e implementação de novas funcionalidades.</p>
                                    <span><?= langs('label.Destaque') ?></span>
                                    <p>Um Job que realizei na empresa, foi a criação de diversos <b>dashboard</b> para o sistema de recrutamento de pessoas, usando bibliotecas <b>JavaScript</b> para criação dos gráficos e com <b>C#</b> e <b>SQL</b> para realizar a coleta e agrupamento das informações.</p>
                                    <span><?= langs('label.TecnologiasUsadas'); ?></span>
                                    <ul class="list list-tecnologias">
                                        <li><?= langs('title.Net'); ?></li>
                                        <li><?= langs('title.C'); ?></li>
                                        <li><?= langs('title.AspNet'); ?></li>
                                        <li><?= langs('title.JavaScript'); ?></li>
                                        <li><?= langs('title.HtmlCss'); ?></li>
                                        <li><?= langs('title.SqlServer'); ?></li>
                                        <li><?= langs('title.Sql'); ?></li>
                                        <li><?= langs('title.Ssis'); ?></li>
                                        <li><?= langs('title.visualStudio'); ?></li>
                                    </ul>
                                </div>
                                <div class="cl-g-4">
                                    <ul>
                                        <li>
                                            <span><?= langs('label.Empresa'); ?></span>
                                            <p><?= langs('profissional.Atento'); ?></p>
                                        </li>
                                        <li>
                                            <span><?= langs('label.DataAdmissao'); ?></span>
                                            <p><?= langs('profissional.AtentoDtAdm'); ?></p>
                                        </li>
                                        <li>
                                            <span><?= langs('label.DataSaida'); ?></span>
                                            <p><?= langs('profissional.AtentoDtSai'); ?></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="cl-12 cl-g-6">
                <article class="experiencia-item margin-left">
                    <header>
                        <figure>
                            <img src="images/icones/suitcase-cinza.png" alt=""/>
                        </figure>
                        <div>
                            <h2><?= langs('profissional.ProgramadorWeb'); ?></h2>
                        </div>
                    </header>
                    <div class="row">
                        <div class="cl-12">
                            <ul>
                                <li>
                                    <span><?= langs('label.Empresa'); ?></span>
                                    <p><?= langs('profissional.Plyn'); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cl-12 cl-s-6">
                            <ul>
                                <li>
                                    <span><?= langs('label.DataAdmissao'); ?></span>
                                    <p><?= langs('profissional.PlynDtAdm'); ?></p>
                                </li>
                            </ul>
                        </div>
                        <div class="cl-12 cl-s-6">
                            <ul>
                                <li>
                                    <span><?= langs('label.DataSaida'); ?></span>
                                    <p><?= langs('profissional.PlynDtSai'); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cl-12">
                            <span><?= langs('label.TecnologiasUsadas'); ?></span>
                            <ul class="list list-tecnologias">
                                <li><?= langs('title.Php'); ?></li>
                                <li><?= langs('title.Laravel'); ?></li>
                                <li><?= langs('title.Wordpress'); ?></li>
                                <li><?= langs('title.JavaScript'); ?></li>
                                <li><?= langs('title.HtmlCss'); ?></li>
                                <li><?= langs('title.MySql'); ?></li>
                                <li><?= langs('title.Sql'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-secondary" onclick="modal.openModal(this)" data-modal="md-experiencia-plyn">
                            <i class="fas fa-plus"></i> <?= langs('links.Informacao'); ?>
                        </button>
                    </div>
                    <div id="md-experiencia-plyn" class="modal md-azul">
                        <div class="modal-content">
                            <span class="close" onclick="modal.closeModal(this)">
                                <i class="fas fa-times"></i>
                            </span>
                            <h3 class="modal-header"><img src="images/icones/suitcase-cinza.png" alt="Programador Web"/> Programador Web</h3>
                            <div class="row">
                                <div class="cl-g-8">
                                    <p>Atuei como programador na agencia Plyn por 8 meses, durante este período realizei diversos projetos com a linguagem PHP e JavaScript, atuando na criação e manutenção de sites e aplicações web.</p>
                                    <span><?= langs('label.Destaque') ?></span>
                                    <p>Um Job que realizei na empresa, foi a criação de um site <b>WordPress</b> para apresentar os produtos de uma empresa de distribuição de alimentos. O principal desafio deste projeto, foi que todas as informações dos produtos estavam em diversos arquivos <b>Excel</b> e as imagens em diversas pastas.</p> 
                                    <p>A solução apresenta foi criar um script para adequar as informações do Excel para o WordPress.</p>
                                    <span><?= langs('label.TecnologiasUsadas'); ?></span>
                                    <ul class="list list-tecnologias">
                                        <li><?= langs('title.Php'); ?></li>
                                        <li><?= langs('title.Laravel'); ?></li>
                                        <li><?= langs('title.Wordpress'); ?></li>
                                        <li><?= langs('title.JavaScript'); ?></li>
                                        <li><?= langs('title.HtmlCss'); ?></li>
                                        <li><?= langs('title.MySql'); ?></li>
                                        <li><?= langs('title.Sql'); ?></li>
                                    </ul>
                                </div>
                                <div class="cl-g-4">
                                    <ul>
                                        <li>
                                            <span><?= langs('label.Empresa'); ?></span>
                                            <p><?= langs('profissional.Plyn'); ?></p>
                                        </li>
                                        <li>
                                            <span><?= langs('label.DataAdmissao'); ?></span>
                                            <p><?= langs('profissional.PlynDtAdm'); ?></p>
                                        </li>
                                        <li>
                                            <span><?= langs('label.DataSaida'); ?></span>
                                            <p><?= langs('profissional.PlynDtSai'); ?></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>