<?php $__env->startSection('template_title'); ?>
    <?php echo e($producto->name ?? 'Show Producto'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('productos.index')); ?>"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            <?php echo e($producto->id_categoria); ?>

                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($producto->name); ?>

                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            <?php echo e($producto->descripcion); ?>

                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            <?php echo e($producto->stock); ?>

                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            <?php echo e($producto->precio); ?>

                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            <?php echo e($producto->status); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InvForm\resources\views/producto/show.blade.php ENDPATH**/ ?>