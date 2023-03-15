<?php $__env->startSection('template_title'); ?>
    Producto
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Producto')); ?>

                            </span>

                            <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('categorias.index')); ?>">Ir a Categorias</a>
                            </div>
                              <div class="float-right">
                                <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear Nuevo')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Categoria</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Stock</th>
										<th>Precio</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($producto->id_categoria); ?></td>
											<td><?php echo e($producto->name); ?></td>
											<td><?php echo e($producto->descripcion); ?></td>
											<td><?php echo e($producto->stock); ?></td>
											<td><?php echo e($producto->precio); ?></td>
											<td><?php echo e($producto->status); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('productos.destroy',$producto->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('productos.show',$producto->id)); ?>"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('productos.edit',$producto->id)); ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $productos->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InvForm\resources\views/producto/index.blade.php ENDPATH**/ ?>