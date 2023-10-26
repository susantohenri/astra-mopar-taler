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
        <form action="" method="post">
            <!-- <button type="button" class="btn-perfil" onclick="event.preventDefault();location.href='<?php echo get_bloginfo('wpurl') ?>/clientes/?page=profile'">Mi Perfil</button> -->
            <button class="btn-perfil" onclick="event.preventDefault(); location.href='<?php echo get_bloginfo('wpurl') ?>/clientes/?page=profile'">Mi Perfil</button>
            <input type="hidden" name="post_action" value="logout">
            <button type="submit" class="btn-salir">Salir</button>
        </form>
    </div>
</aside>