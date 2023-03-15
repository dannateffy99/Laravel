<?php $__env->startSection('template_title'); ?>
    <?php echo e($categoria->name ?? 'Show Categoria'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('categorias.index')); ?>"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($categoria->name); ?>

                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            <?php echo e($categoria->descripcion); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InvForm\resources\views/categoria/show.blade.php ENDPATH**/ ?>