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
                    Agregar cliente nuevo
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h2 class="card-title text-center">
                            Nuevo cliente
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('clientes/nuevo'); ?>" class="row justify-content-center"
                            method="POST">
                            <div class="col-12 col-md-11 col-lg-8">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control"
                                        value=" <?= $nombre['dato']; ?>">
                                    <label class="error">
                                        <?php echo $nombre['error']; ?>
                                    </label>
                                </div>
                                <p class="text-muted ">Pon el nombre corporativo del cliente, si este cliente tiene
                                    varios
                                    proyectos, estos
                                    se configurarán después con su respectivo nombre</p>

                            </div>
                            <div class="col-12 col-md-11 col-lg-8">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">clave</label>
                                    <input type="text" name="clave" id="clave" class="form-control"
                                        value=" <?= $clave['dato']; ?>">
                                    <label class="error">
                                        <?php echo $clave['error']; ?>
                                    </label>
                                    <p class="text-muted ">Crea una clave para identificar este cliente, esta clave debe
                                        tener el año de ingreso y las iniciales del cliente</p>
                                    <p class="text-muted ">Ejemplo: Akumal entro en 2019 -> AKU2019 </p>
                                </div>

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