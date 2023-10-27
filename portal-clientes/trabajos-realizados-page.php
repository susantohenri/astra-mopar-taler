<div class="column2">
    <?php if ($trabajos) : ?>
        <?php foreach ($trabajos as $trabajo) : ?>
            <?php
            $timestamp = strtotime($trabajo->regdate);
            if ($trabajo->estado == 1) {
                $titulo_pdf = 'cotización';
            } else {
                $titulo_pdf = 'Trabajo Realizado';
            }
            ?>
            <div class="history_items">
                <div class="fecha">
                    <em class="mes"><?php echo Mopar::getNombreMes(date('n', $timestamp), true); ?></em>
                    <em class="dia"><?php echo date('d', $timestamp) ?></em>
                    <em class="ano"><?php echo date('Y', $timestamp) ?></em>
                </div>
                <div class="contenido">
                    <h4><?php echo $trabajo->titulo ?></h4>

                    <?php echo $trabajo->observaciones; ?>

                    <h5 style="margin-top: 15px;">Archivos adjuntos</h5>
                    <div>
                        <a href="<?php bloginfo('wpurl') ?>/clientes/?pdf=true&id=<?php echo $trabajo->id; ?>" target="_blank" style="text-decoration: underline;">
                            <?php echo $titulo_pdf . "_000" . $trabajo->id; ?> <i class="fa fa-paperclip"></i>
                        </a>
                    </div>
                </div>
                <br style="clear: both;">
            </div>
        <?php endforeach ?>
    <?php else : ?>

    <?php endif ?>
</div>