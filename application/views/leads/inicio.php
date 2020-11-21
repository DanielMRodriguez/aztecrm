 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <h1>Proyectos</h1>
             </div>
         </div>

         <div class="row">
             <div class="col-12 pt-4">
                 <form class="row" id="form-selectCliente">

                     <div class="col d-flex aling-items-center">

                         <select class="form-control selectpicker" data-style="btn btn-link" id="clientes">
                             <option>Selecciona un cliente</option>
                             <?php foreach ($clientes as $cliente) : ?>
                             <option value="<?= $cliente['id']; ?>"><?= $cliente['nombre']; ?></option>
                             <?php endforeach; ?>
                         </select>
                     </div>
                     <div class="col">
                         <button id="buscar" class="btn btn-info text-light" type="button">
                             Ver proyectos
                         </button>
                     </div>
                 </form>
             </div>

             <div class="col-12 pt-4">
                 <form class="row" id="form-selectProyectos">

                     <div class="col d-flex aling-items-center">
                         <select class="form-control selectpicker" data-style="btn btn-link" id="proyectos">
                             <option>Selecciona un proyecto</option>
                         </select>
                     </div>
                     <div class="col">
                         <button id="buscar" class="btn btn-info text-light" type="button">
                             Ver leads
                         </button>
                     </div>
                 </form>
             </div>
         </div>
         <div class="row tabla-container-hide" id="tabla">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header card-header-text card-header-primary">
                         <div class="card-text">
                             <h2 class="card-title">Leads</h2>
                         </div>
                     </div>
                     <div class="card-body">

                         <table class="table">
                             <thead>
                                 <tr>
                                     <th>Nombre</th>
                                     <th>Teléfono</th>
                                     <th>Correo</th>
                                     <th>Fecha</th>
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