 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <h1>Clientes</h1>

             </div>
         </div>

         <div class="row">
             <div class="col-12">
                 <a class="btn btn-info text-light" href="<?= base_url('clientes/nuevo'); ?>">
                     <i class="material-icons">add</i> Crear nuevo cliente
                 </a>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header card-header-text card-header-primary">
                         <div class="card-text">
                             <h2 class="card-title">Activos</h2>
                         </div>
                     </div>
                     <div class="card-body">

                         <table class="table">
                             <thead>
                                 <tr>
                                     <th class="text-center">ID</th>
                                     <th>Nombre</th>
                                     <th>Clave</th>
                                     <th class="text-center">Acciones</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($clientes as $cliente) : ?>
                                 <tr>
                                     <td class="text-center"><?= $cliente['id']; ?></td>
                                     <td><?= $cliente['nombre']; ?></td>
                                     <td><?= $cliente['clave']; ?></td>
                                     <td class="td-actions text-center">
                                         <a href="<?php echo base_url("proyectos/nuevo/$cliente[id]"); ?>" type="button"
                                             rel="tooltip" class="btn btn-success" data-toggle="tooltip"
                                             data-placement="top" title="Crear proyecto">
                                             <i class="material-icons">add</i>
                                         </a>
                                         <button type="button" rel="tooltip" class="btn btn-info" data-toggle="tooltip"
                                             data-placement="top" title="Editar">
                                             <i class="material-icons">edit</i>
                                         </button>
                                         <button type="button" rel="tooltip" class="btn btn-danger"
                                             data-toggle="tooltip" data-placement="top" title="Desactivar">
                                             <i class="material-icons">close</i>
                                         </button>
                                     </td>
                                 </tr>
                                 <?php endforeach; ?>


                             </tbody>
                         </table>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>