<div class="column2">
    <?php if ($historial) : ?>
        <?php foreach ($historial as $hist) : ?>
            <?php
            $timestamp = strtotime($hist->regdate);
            if ($hist->estado == 1) {
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
                    <h4><?php echo $hist->titulo ?></h4>

                    <?php echo $hist->observaciones; ?>

                    <h5 style="margin-top: 15px;">Archivos adjuntos</h5>
                    <div>
                        <a href="<?php bloginfo('wpurl') ?>/clientes/?pdf=true&id=<?php echo $hist->id; ?>" target="_blank" style="text-decoration: underline;">
                            <?php echo $titulo_pdf . "_000" . $hist->id; ?> <i class="fa fa-paperclip"></i>
                        </a>
                    </div>

                    <?php if ($hist->archivo) { ?>
                        <h5 style="margin-top: 15px;">Archivos adicionales</h5>
                        <div>
                            <a href="<?php bloginfo('wpurl') ?>/wp-content/plugins/mopar_taller/uploads/<?php echo $hist->archivo; ?>" target="_blank" style="text-decoration: underline;">
                                <?php echo $hist->archivo; ?> <i class="fa fa-paperclip"></i>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <br style="clear: both;">
            </div>
        <?php endforeach ?>
    <?php else : ?>
        <h3>Aun no hay OTs para el vehículo seleccionado</h3>
    <?php endif ?>
</div>