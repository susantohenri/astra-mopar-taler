<?php /* Template Name: Portal Clientes */

$moparTheme = new MoparTheme();

get_header();
wp_register_style('portal-clientes', get_stylesheet_directory_uri(__FILE__) . '/portal-clientes.css?token=' . time());
wp_enqueue_style('portal-clientes');

while (have_posts()) :
    the_post();
    ?>
    <div id="portal-clientes">
        <div class="cabecera"></div>
        <h3 class="page-title">Portal de Clientes</h3>
    <?php
    MoparTheme::load_page();
    ?></div><?php
endwhile;
get_footer();
