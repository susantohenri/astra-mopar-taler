<aside class="sidebar">
    <div id="recent-posts-8" class="widget widget_recent_entries posts_holder">
        <h5>Mis Vehiculos</h5>
        <ul>
            <?php foreach ($mis_autos as $vehiculo) { ?>
                <li>
                    <a href="<?php echo get_bloginfo('wpurl') . '/clientes/?vid=' . $vehiculo->id ?>"> <i class="menu_icon fa-car fa"></i> <?php echo $vehiculo->marca . " - " . $vehiculo->modelo . " - " . $vehiculo->patente; ?></a>
                </li>
            <?php } ?>
        </ul>
        <br>
        <button type="button" class="btn-perfil"><a href="?section=profile">Mi Perfil</a></button>
        <button type="button" class="btn-salir"><a href="?section=logout">Salir</a></button>
    </div>
</aside>