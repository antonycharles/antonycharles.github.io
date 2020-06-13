<section class="box-quem-sou">
    <article id="quem-sou" class="quem-sou">
        <div class="grid">
            <div class="row">
                <div class="cl-12 cl-g-7">
                    <header>
                        <h2><span><?= langs('title.QuemSou'); ?></span> <?= langs('title.AntonyCharles'); ?></h2>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nisi, tempus dignissim mauris nec, sodales porta turpis. Duis dignissim, ex non dapibus luctus, erat purus ornare enim, ac condimentum turpis nunc sit amet nulla. Phasellus consequat ultrices arcu, vel viverra nulla porta sed. Pellentesque dapibus eget enim quis molestie. Nunc sollicitudin sagittis lorem, eu convallis quam placerat eget. </p>
                    <p>Aenean nec enim elementum, dictum lorem vitae, consequat felis. Phasellus porta dapibus magna, non elementum metus tincidunt sit amet. Proin id varius turpis. Nunc rhoncus cursus ex sed fringilla. Nullam in egestas purus, non dignissim quam. In hac habitasse platea dictumst.</p>
                </div>
                <div class="cl-12 cl-g-5 text-center">
                    <div class="contatos">
                        <figure>
                            <img src="images/antony-charles.jpg" alt="Antony Charles"/>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <div class="grid">
        <div class="flex-container-tecno">
            <aside class="item" onclick="modal.openModal(this)" data-modal="md-html">
                <figure>
                    <img src="images/icones/html-5.png" alt="<?= langs('title.Html'); ?>"/>
                    <figcaption><?= langs('title.Html'); ?>/<?= langs('title.Css'); ?></figcaption>
                </figure>
                <div class="overlay">
                    <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
                </div>
            </aside>
            <?php include 'modals/html.php'; ?>
            <aside class="item" onclick="modal.openModal(this)" data-modal="md-javascript">
                <figure>
                    <img src="images/icones/javascript.png" alt="<?= langs('title.JavaScript'); ?>"/>
                    <figcaption><?= langs('title.JavaScript'); ?></figcaption>
                </figure>
                <div class="overlay">
                    <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
                </div>
            </aside>
            <?php include 'modals/javascript.php'; ?>
            <aside class="item" onclick="modal.openModal(this)" data-modal="md-dot-net">
                <figure>
                    <img src="images/icones/hashtag.png" alt="<?= langs('title.Net'); ?>"/>
                    <figcaption><?= langs('title.Net'); ?></figcaption>
                </figure>
                <div class="overlay">
                    <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
                </div>
            </aside>
            <?php include 'modals/dot-net.php';?>
            <aside class="item" onclick="modal.openModal(this)" data-modal="md-php">
                <figure>
                    <img src="images/icones/elephant.png" alt="<?= langs('title.Php'); ?>"/>
                    <figcaption><?= langs('title.Php'); ?></figcaption>
                </figure>
                <div class="overlay">
                    <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
                </div>
            </aside>
            <?php include 'modals/php.php'; ?>
            <aside class="item" onclick="modal.openModal(this)" data-modal="md-java">
                <figure>
                    <img src="images/icones/java.png" alt="<?= langs('title.Java'); ?>"/>
                    <figcaption><?= langs('title.Java'); ?></figcaption>
                </figure>
                <div class="overlay">
                    <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
                </div>
            </aside>
            <?php include 'modals/java.php'; ?>
            <!--<aside class="item" onclick="modal.openModal(this)" data-modal="md-css">
                <figure>
                    <img src="images/icones/css.png" alt="<?= langs('title.Css'); ?>"/>
                    <figcaption><?= langs('title.Css'); ?></figcaption>
                </figure>
                <div class="overlay">
                    <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
                </div>
            </aside>-->
            <?php include 'modals/css.php'; ?>
            <aside class="item" onclick="modal.openModal(this)" data-modal="md-sql">
                <figure>
                    <img src="images/icones/sql.png" alt="<?= langs('title.Sql'); ?>"/>
                    <figcaption><?= langs('title.Sql'); ?></figcaption>
                </figure>
                <div class="overlay">
                    <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
                </div>
            </aside>
            <?php include 'modals/sql.php'; ?>
        </div>
    </div>
</section>