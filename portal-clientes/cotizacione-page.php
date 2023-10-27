<div class="column2">
    <?php if ($cotizaciones) : ?>
        <?php foreach ($cotizaciones as $cotizacione) : ?>
            <?php
            $timestamp = strtotime($cotizacione->regdate);
            if ($cotizacione->estado == 1) {
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
                    <h4><?php echo $cotizacione->titulo ?></h4>

                    <?php echo $cotizacione->observaciones; ?>

                    <h5 style="margin-top: 15px;">Archivos adjuntos</h5>
                    <div>
                        <a href="<?php bloginfo('wpurl') ?>/clientes/?pdf=true&id=<?php echo $cotizacione->id; ?>" target="_blank" style="text-decoration: underline;">
                            <?php echo $titulo_pdf . "_000" . $cotizacione->id; ?> <i class="fa fa-paperclip"></i>
                        </a>
                    </div>
                </div>
                <br style="clear: both;">
            </div>
        <?php endforeach ?>
    <?php else : ?>

    <?php endif ?>
</div>