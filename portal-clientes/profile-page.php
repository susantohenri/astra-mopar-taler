<div class="column2">
    <h2 style="text-align: left;"><?php echo $_SESSION['mopar_portal_clientes_nombre'] ?></h2>
    <br>
    <div id="profile-form">
        <form method="post" action="">
            <input type="hidden" name="post_action" value="profile">
            <div class="two_columns_50_50 clearfix">
                <div class="col1">
                    <div class="column_inner">
                        <label for="nombres">Nombre</label>
                        <input type="text" class="requiredField" name="nombres" id="nombres" value="<?php echo $this_cliente->nombres ?>" required />
                    </div>
                </div>
                <div class="col2">
                    <div class="column_inner">
                        <label for="apellidoPaterno">Apellido Paterno</label>
                        <input type="text" name="apellidoPaterno" id="apellidoPaterno" value="<?php echo $this_cliente->apellidoPaterno ?>" />
                    </div>
                </div>
            </div>
            <div class="two_columns_50_50 clearfix">
                <div class="col1">
                    <div class="column_inner">
                        <label for="apellidoMaterno">Apellido Materno</label>
                        <input type="text" name="apellidoMaterno" id="apellidoMaterno" value="<?php echo $this_cliente->apellidoMaterno ?>" />
                    </div>
                </div>
                <div class="col2">
                    <div class="column_inner">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="requiredField" name="telefono" id="telefono" value="<?php echo $this_cliente->telefono ?>" required />
                    </div>
                </div>
            </div>

            <div class="two_columns_50_50 clearfix">
                <div class="col1">
                    <div class="column_inner">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="requiredField" name="pass" id="pass" value="**********" />
                    </div>
                </div>
                <div class="col2">
                    <div class="column_inner">
                        <label for="pass">Confirmar Contraseña</label>
                        <input type="password" class="requiredField" name="repass" id="repass" value="**********" />
                    </div>
                </div>
            </div>

            <span class="submit_button_contact">
                <button type="submit">Guardar</button>
            </span>
        </form>
    </div>
</div>