<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div><?php echo e('Modificar'); ?></div>
          <form method="POST" action="<?php echo e(url('actualizarRegistro')); ?>" enctype="multipart/form-data">
               <?php echo e(csrf_field()); ?>

             <div class="form-group row">
              <label for="titulo" class="col-md-4 col-form-label text-md-right"><?php echo e('Nombre'); ?></label>
             <div class="col-md-6">
              <input id="titulo" type="text" class="form-control name="nombre" value="">
             </div>
            </div>
            <div class="form-group row">
                <label for="apellidos" class="col-md-4 col-form-label text-md-right" ><?php echo e('Apellido'); ?>

                </label>

                <div class="col-md-6">
                    <input id="apellido" type="text" class="form-control  value="" name="apellidos">
                </div>
            </div>
            <input type="hidden" name="id" value="">

            <div class="form-group row">
                <label for="empresa" class="col-md-4 col-form-label text-md-right"><?php echo e('Empresa'); ?></label>

                <div class="col-md-6">
                    <input id="foto" type="text"  class="" name="empresa">

                </div>
            </div>

            <div class="form-group row">
                <label for="celular" class="col-md-4 col-form-label text-md-right"><?php echo e('Celular'); ?></label>

                <div class="col-md-6">
                    <input id="celular" type="text" class="form-control" name="celular" value="">

                </div>
                </div>

                <div class="form-group row">
                    <label for="telefono_fijo" class="col-md-4 col-form-label text-md-right"><?php echo e('Telefono'); ?></label>

                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control" name="telefono_fijo" value="">

                    </div>
                    </div>

              <div class="form-group row">
                  <label for="telefono_fijo" class="col-md-4 col-form-label text-md-right"><?php echo e('Telefono'); ?></label>

                  <div class="col-md-6">
                      <input id="telefono" type="text" class="form-control" name="telefono_fijo" value="">

                  </div>
                  </div>
          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary" value="agregarRegistro">
                      <?php echo e(__('MODIFICAR')); ?>

                  </button>
              </div>
          </div>
          </div>
      </div>
    </form>
    <!-- insert in the document body -->
<object data='https://westminsterresearch.westminster.ac.uk/download/b57e726698041cf18a7dd5fd49ae4fc0b84085c512899effce79e4e08b367058/21797933/Andrea_BAGDADI_2014.pdf'
        type='application/pdf'
        width='100%'
        height='100%'>
<p>This browser does not support inline PDFs. Please download the PDF to view it: <a href="https://westminsterresearch.westminster.ac.uk/download/b57e726698041cf18a7dd5fd49ae4fc0b84085c512899effce79e4e08b367058/21797933/Andrea_BAGDADI_2014.pdf">Download PDF</a></p>
</object>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Patan/Desktop/gos/resources/views/actualizarRegistro.blade.php ENDPATH**/ ?>