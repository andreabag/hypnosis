<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><?php echo e('Crear'); ?></div>
                  <div class="card-body">
                    <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Cliente</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Datos de facturacion</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Configuracion</a>
                      </li>
                    </ul>
                      <form method="POST" action="<?php echo e(url('agregarRegistro')); ?>" enctype="multipart/form-data">
                          <?php echo e(csrf_field()); ?>

                      <div class="form-group row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input type="text" name="nombre" value="" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Apellido</label>
                          <input type="text" name="apellido" value="" class="form-control">
                        </div>
                      </div>
                    </div>
                        <div class="form-group">
                          <label for="">Empresa</label>
                          <input type="text" name="empresa" value="" class="form-control">
                        </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" name="email" value="" class="form-control">
                        </div>
                      </div>
                        <div class="col-md-6">
                          <div class="form-group">
                           <label for="">Celular</label>
                          <input type="text" name="telefono_fijo" value="" class="form-control">
                         </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                         <div class="form-group">
                           <label for="">Telefono_fijo</label>
                          <input type="text" name="telefono_fijo" value="" class="form-control">
                         </div>
                        </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Calle_nro</label>
                          <input type="text" name="calle_nro" value="" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Codigo Postal</label>
                          <input type="text" name="codigo_postal" value="" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Saldo</label>
                          <input type="text" name="saldo" value="" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="nombre" value="" class="btn btn-success btn btn-primary btn-lg btn-block">Guardar</button>
                    </div>
                      </form>
                    </div>
                  </div>
               </div>
             </div>
            </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Patan/Desktop/gos/resources/views/agregarRegistro.blade.php ENDPATH**/ ?>