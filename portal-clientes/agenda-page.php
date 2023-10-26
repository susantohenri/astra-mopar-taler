<div class="column2">
    <?php if ($agendas) : ?>
        <?php foreach ($agendas as $agenda) : ?>
            <?php $timestamp = strtotime("{$agenda->fecha} {$agenda->hora}"); ?>
            <div class="history_items">
                <div class="fecha">
                    <em class="mes"><?php echo Mopar::getNombreMes(date('n', $timestamp), true); ?></em>
                    <em class="dia"><?php echo date('d', $timestamp) ?></em>
                    <em class="ano"><?php echo date('Y', $timestamp) ?></em>
                </div>
                <div class="contenido">
                    <b>
                        <em class="dia"><?php echo date('H', $timestamp) ?></em>
                        :
                        <em class="ano"><?php echo date('i', $timestamp) ?></em>
                    </b>
                    <?php echo $agenda->solicitud; ?>
                </div>
                <br style="clear: both;">
            </div>
        <?php endforeach ?>
    <?php else : ?>

    <?php endif ?>
</div>