<?php
$csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <!-- custome -->
    <link href="<?php echo base_url(); ?>assets/css/custome/login.min.css" rel="stylesheet" />
</head>

<body>

    <section class="container login">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-10 col-lg-6">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h1 class="text-center">¡Bienvenido de nuevo!</h1>
                    </div>
                    <form action="<?php echo base_url('login'); ?>" class="row" method="POST" id="formulario">
                        <div class="col-12 mt-5">

                        </div>
                        <div class="col-12 ">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Correo electrónico</label>
                                <input type="email" name="correo" id="correo" class="form-control" required
                                    value="<?php echo set_value('correo'); ?>">
                                <label class="error">
                                    <?php echo form_error('correo'); ?>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" required
                                    value="<?php echo set_value('password'); ?>">
                                <label class="error">
                                    <?php echo form_error('password'); ?>
                                </label>
                            </div>
                        </div>
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        <div class="col-12 form-group">
                            <button class="btn btn-primary btn-lg d-block m-auto" type="button"
                                id="enviar">Entrar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.validate.min.js"></script>

    <script>
    $(document).ready(function() {
        var validarFormulario = function(form) {
            form.validate({
                rules: {
                    correo: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 3,
                    }
                },

                messages: {
                    correo: {
                        required: "El campo es obligatorio",
                        email: "Ingresa un email válido",
                    },
                    password: {
                        required: "El campo es obligatorio",
                    }
                },
            });

            return form.valid();
        };


        $("form")
            .find("#enviar")
            .click(function(e) {
                var form = $("#formulario");
                if (validarFormulario(form)) {
                    form.submit();
                }
            });
    })
    </script>

</body>

</html>