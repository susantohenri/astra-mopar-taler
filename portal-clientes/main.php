<div class="column2">
    <div class="autos-list">
        <h3>Seleccione un vehículo</h3>
        <div class="separator  small left  " style="margin-top: 7px;margin-bottom: 38px;"></div>
        <?php foreach ($mis_autos as $vehiculo) : ?>
            <a class="item" href="<?php echo get_bloginfo('wpurl') . '/clientes/?vid=' . $vehiculo->id ?>">
                <img src="<?php bloginfo('wpurl') ?>/wp-content/plugins/mopar_taller/uploads/<?= $vehiculo->imagen; ?>">
                <span><?php echo $vehiculo->marca . " - " . $vehiculo->modelo . " <br> " . $vehiculo->patente; ?></span>
            </a>
        <?php endforeach ?>
    </div>
</div>