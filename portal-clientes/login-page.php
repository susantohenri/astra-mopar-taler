<div class="contact_form">
    <form id="contact-form" method="post" action="" autocomplete="off" style="width: 300px; display: block; margin: 0 auto;">
        <input type="hidden" name="post_action" value="login">
        <input style="opacity: 0;position: absolute; left:  -9999px">
        <input type="password" style="opacity: 0;position: absolute; left: -9999px">
        <div class="clearfix">
            <div class="column1">
                <div class="column_inner">
                    <input autocomplete="off" type="email" class="requiredField placeholder" name="user_email" id="email" placeholder="Email" required>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="column1">
                <div class="column_inner">
                    <input autocomplete="new-password" type="password" class="requiredField  placeholder" name="user_pass" id="user_pass" placeholder="Contraseña" required>
                </div>
            </div>
        </div>
        <span class="submit_button_contact">
            <a href="<?= site_url('clientes?section=forgot-password') ?>">Forgot Password ?</a>
            <button class="qbutton" type="submit">Entrar</button>
        </span>
    </form>
</div>

<section class="the_content">
    <div class="col-left">
        <?php the_content(); ?>
    </div>
    <div class="col-right">
        <img src="https://www.doctormopar.com/wp-content/uploads/2020/07/101383658_2567925490085847_5262216614342797622_n.jpg">
    </div>
</section>