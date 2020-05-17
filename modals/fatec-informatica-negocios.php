<div id="md-formacao-fatec" class="modal md-verde">
    <div class="modal-content">
        <span class="close"><i class="fas fa-times"></i></span>
        <h3 class="modal-header"> <img src="images/icones/reward-cinza.png"/> <?= langs('formacao.InformaticaNegocio'); ?></h3>
        <div class="row">
            <div class="cl-g-9 padding-right-30">
                <span><?= langs('label.Descricao'); ?></span>
                <p><?= langs('formacao.InNeDescricao1'); ?></p>
                <p><?= langs('formacao.InNeDescricao2'); ?></p>

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
                                <?php foreach(langs('formacao.AFatecINSemestreUm') as $value){ ?>
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
                                    <td class="text-center">230</td>
                                    <td class="text-center">250</td>
                                    <td class="text-center">480</td>
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
                                <?php foreach(langs('formacao.AFatecINSemestreDois') as $value){ ?>
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
                                    <td class="text-center">260</td>
                                    <td class="text-center">220</td>
                                    <td class="text-center">480</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <button class="accordion">3º <?= langs('label.Semestre'); ?></button>
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
                                <?php foreach(langs('formacao.AFatecINSemestreTres') as $value){ ?>
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
                                    <td class="text-center">260</td>
                                    <td class="text-center">220</td>
                                    <td class="text-center">480</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <button class="accordion active">4º <?= langs('label.Semestre'); ?></button>
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
                                <?php foreach(langs('formacao.AFatecINSemestreQuatro') as $value){ ?>
                                    <tr>
                                        <td class="text-center"><i class="fas fa-hourglass-half"></i></td>
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
                                    <td class="text-center">220</td>
                                    <td class="text-center">260</td>
                                    <td class="text-center">480</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <button class="accordion">5º <?= langs('label.Semestre'); ?></button>
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
                                <?php foreach(langs('formacao.AFatecINSemestreCinco') as $value){ ?>
                                    <tr>
                                        <td class="text-center"><i class="fas fa-minus"></i></td>
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
                                    <td class="text-center">270</td>
                                    <td class="text-center">290</td>
                                    <td class="text-center">560</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <button class="accordion">6º <?= langs('label.Semestre'); ?></button>
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
                                <?php foreach(langs('formacao.AFatecINSemestreSexto') as $value){ ?>
                                    <tr>
                                        <td class="text-center"><i class="fas fa-minus"></i></td>
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
                                    <td class="text-center">390</td>
                                    <td class="text-center">410</td>
                                    <td class="text-center">800</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cl-g-3">
                <ul>
                    <li>
                        <img src="images/fatec-sao-bernardo-campo.jpg" class="logo" title="Logo Fatec São Bernardo do Campo" />
                    </li>
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
                    <li>
                        <span><?= langs('label.Nivel'); ?></span>
                        <p><?= langs('formacao.InNeNivel'); ?></p>
                    </li>
                    <li>
                        <span><?= langs('label.Duracao'); ?></span>
                        <p><?= langs('formacao.InNeDuracao'); ?></p>
                    </li>
                    <li>
                        <span><?= langs('label.Progresso'); ?></span>
                        <div class="bar-progresso">
                            <div style="width: 66%;"></div>
                        </div>
                    </li>
                    <li>
                        <span><?= langs('label.Status'); ?></span>
                        <p><b><?= langs('formacao.InNeStatus'); ?></b></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>