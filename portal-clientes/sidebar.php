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
        <div>
            <a href="<?= site_url('clientes') ?>"><button type="button" class="btn-perfil">Home</button></a>
            <a href="?section=profile"><button type="button" class="btn-perfil">Mi Perfil</button></a>
            <a href="?section=horas-agendadas"><button type="button" class="btn-perfil">Horas Agendadas</button></a>
            <a href="?section=cotizaciones"><button type="button" class="btn-perfil">Cotizaciones</button></a>
            <a href="?section=trabajos-realizados"><button type="button" class="btn-perfil">Trabajos Realizados</button></a>
            <a href="?section=logout"><button type="button" class="btn-salir">Salir</button></a>
        </div>
    </div>
</aside>