<?php

$csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
);
$nombre = array('error' => '', 'dato' => '');
$clave = array('error' => '', 'dato' => '');


if ($this->session->flashdata('formErrores')) {
    $errores = $this->session->flashdata('formErrores');
    $datos = $this->session->flashdata('formDatos');
    $nombre['error'] = $errores['nombre'];
    $nombre['dato'] = $datos['nombre'];

    $clave['error'] = $errores['clave'];
    $clave['dato'] = $datos['clave'];
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-4">
                <h1>
                    Crear proyecto
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h2 class="card-title text-center">
                            Nuevo proyecto en <br>
                            <b><?= $cliente[0]['nombre']; ?></b>
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('proyectos/nuevo'); ?>" class="row justify-content-center"
                            method="POST">
                            <div class="col-12">
                                <p class="">Antes de iniciar una campaña genera un nuevo proyecto para enlazar los
                                    formularios de
                                    contacto a la clave que se generara</p>
                            </div>
                            <div class="col-12 col-md-11 col-lg-8">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control"
                                        value=" <?= $nombre['dato']; ?>">
                                    <label class="error">
                                        <?php echo $nombre['error']; ?>
                                    </label>
                                </div>
                                <p class="text-muted ">
                                    Puedes separar los proyectos por nombre<br> Ejemplo: Torre Oficinas, Departamentos,
                                    Invernaderos
                                </p>

                            </div>
                            <!--  -->
                            <div class="col-12 col-md-11 col-lg-8">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Clave</label>
                                    <input type="text" name="clave" id="clave" class="form-control"
                                        value=" <?= $clave['dato']; ?>">
                                    <label class="error">
                                        <?php echo $clave['error']; ?>
                                    </label>
                                </div>
                                <p class="text-muted ">
                                    Genera la clave identificadora del proyecto con una conbinación de la clave del
                                    cliente y la fecha del día mes/día ejemplo:<br>
                                    cliente: akumal AKU2018 > proyecto : villas AKU20180830
                                </p>

                            </div>
                            <!-- CLIENTE ID -->
                            <input type="hidden" name="cliente_id" value="<?= $clienteId; ?>">
                            <!--  -->
                            <div class="col-12 col-md-11 col-lg-8">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Descripción</label>
                                    <textarea name="descripcion" id="descripcion" class="form-control"></textarea>

                                </div>
                                <p class="text-muted ">
                                    Agrega algún comentario acerca del proyecto.
                                </p>

                            </div>


                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Agregar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>