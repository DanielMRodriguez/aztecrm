 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <h1>Proyectos</h1>
             </div>
         </div>

         <div class="row">
             <div class="col-12 pt-4">
                 <form class="row">

                     <div class="col d-flex aling-items-center">

                         <select class="form-control selectpicker" data-style="btn btn-link" id="clientes">
                             <option>Selecciona un cliente</option>
                             <?php foreach ($clientes as $cliente) : ?>
                             <option value="<?= $cliente['id']; ?>"><?= $cliente['nombre']; ?></option>
                             <?php endforeach; ?>
                         </select>
                     </div>
                     <div class="col">
                         <button id="buscar" class="btn btn-info text-light" href="<?= base_url('clientes/nuevo'); ?>">
                             Ver proyectos
                         </button>
                     </div>
                 </form>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header card-header-text card-header-primary">
                         <div class="card-text">
                             <h2 class="card-title">Proyectos</h2>
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
                             <tbody id="table-body">
                                 <tr>
                                     <td colspan="4">
                                         <h3 class="text-center">Selecciona un cliente para mostrar sus proyectos
                                             activos</h3>
                                     </td>

                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>