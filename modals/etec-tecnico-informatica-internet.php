<div id="md-formacao-etec-info-int" class="modal md-verde">
    <div class="modal-content">
        <span class="close"><i class="fas fa-times"></i></span>
        <h3 class="modal-header"> <img src="images/icones/reward-cinza.png"/> <?= langs('formacao.TecnicoInformatico'); ?></h3>
        <div class="row">
            <div class="cl-g-9 padding-right-30">
                <span><?= langs('label.Descricao'); ?></span>
                <p><?= langs('formacao.TecInfDescricao'); ?></p>
                <ul>
                    <li><?= langs('formacao.TecInfModulo1'); ?></li>
                    <li><?= langs('formacao.TecInfModulo2'); ?></li>
                    <li><?= langs('formacao.TecInfModulo3'); ?></li>
                </ul>
                <span><?= langs('label.MatrizCurricular'); ?></span>
                <div class="box-accordion">
                    <button class="accordion">1º <?= langs('label.Semestre'); ?></button>
                    <div class="panel">
                        <table>
                            <thead>
                                <tr>
                                    <th rowspan="2"></th>
                                    <th rowspan="2"><?= langs('label.ComponentesCurriculares'); ?></th>
                                    <th class="text-center" colspan="3"><?= langs('label.CargaHorariaHorasAula'); ?></th>
                                </tr>
                                <tr>
                                    <th class="text-center"><?= langs('label.Teoria'); ?></th>
                                    <th class="text-center"><?= langs('label.Pratica'); ?></th>
                                    <th class="text-center"><?= langs('label.Total'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(langs('formacao.AEtecIISemestreUm') as $value){ ?>
                                    <tr>
                                        <td class="text-center"><i class="fas fa-check"></i></td>
                                        <td><?= $value['disciplina']; ?></td>
                                        <td class="text-center"><?= $value['teoria']; ?></td>
                                        <td class="text-center"><?= $value['pratica']; ?></td>
                                        <td class="text-center"><?= $value['total']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <th><?= langs('label.Total'); ?></th>
                                    <td class="text-center">150</td>
                                    <td class="text-center">350</td>
                                    <td class="text-center">500</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <button class="accordion">2º <?= langs('label.Semestre'); ?></button>
                    <div class="panel">
                        <table>
                            <thead>
                                <tr>
                                    <th rowspan="2"></th>
                                    <th rowspan="2"><?= langs('label.ComponentesCurriculares'); ?></th>
                                    <th class="text-center" colspan="3"><?= langs('label.CargaHorariaHorasAula'); ?></th>
                                </tr>
                                <tr>
                                    <th class="text-center"><?= langs('label.Teoria'); ?></th>
                                    <th class="text-center"><?= langs('label.Pratica'); ?></th>
                                    <th class="text-center"><?= langs('label.Total'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(langs('formacao.AEtecIISemestreDois') as $value){ ?>
                                    <tr>
                                        <td class="text-center"><i class="fas fa-check"></i></td>
                                        <td><?= $value['disciplina']; ?></td>
                                        <td class="text-center"><?= $value['teoria']; ?></td>
                                        <td class="text-center"><?= $value['pratica']; ?></td>
                                        <td class="text-center"><?= $value['total']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <th><?= langs('label.Total'); ?></th>
                                    <td class="text-center">50</td>
                                    <td class="text-center">450</td>
                                    <td class="text-center">500</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <button class="accordion active">3º <?= langs('label.Semestre'); ?></button>
                    <div class="panel" style="display:block">
                        <table>
                            <thead>
                                <tr>
                                    <th rowspan="2"></th>
                                    <th rowspan="2"><?= langs('label.ComponentesCurriculares'); ?></th>
                                    <th class="text-center" colspan="3"><?= langs('label.CargaHorariaHorasAula'); ?></th>
                                </tr>
                                <tr>
                                    <th class="text-center"><?= langs('label.Teoria'); ?></th>
                                    <th class="text-center"><?= langs('label.Pratica'); ?></th>
                                    <th class="text-center"><?= langs('label.Total'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(langs('formacao.AEtecIISemestreTres') as $value){ ?>
                                    <tr>
                                        <td class="text-center"><i class="fas fa-check"></i></td>
                                        <td><?= $value['disciplina']; ?></td>
                                        <td class="text-center"><?= $value['teoria']; ?></td>
                                        <td class="text-center"><?= $value['pratica']; ?></td>
                                        <td class="text-center"><?= $value['total']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <th><?= langs('label.Total'); ?></th>
                                    <td class="text-center">50</td>
                                    <td class="text-center">450</td>
                                    <td class="text-center">500</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cl-g-3">
                <ul>
                    <li>
                        <img src="images/etec-lauro-gomes.jpeg" class="logo" title="Logo Etec Lauro Gomes"/>
                    </li>
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
                    <li>
                        <span><?= langs('label.Nivel'); ?></span>
                        <p><?= langs('formacao.TecInfNivel'); ?></p>
                    </li>
                    <li>
                        <span><?= langs('label.Duracao'); ?></span>
                        <p><?= langs('formacao.TecInfDuracao'); ?></p>
                    </li>
                    <li>
                        <span><?= langs('label.Progresso'); ?></span>
                        <div class="bar-progresso">
                            <div></div>
                        </div>
                    </li>
                    <li>
                        <span><?= langs('label.Status'); ?></span>
                        <p><b><?= langs('formacao.TecInfStatus'); ?></b></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>