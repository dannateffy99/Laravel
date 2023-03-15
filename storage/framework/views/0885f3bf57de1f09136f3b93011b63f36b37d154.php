<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('id_categoria')); ?>

            <?php echo e(Form::text('id_categoria', $producto->id_categoria, ['class' => 'form-control' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Id Categoria'])); ?>

            <?php echo $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Nombre')); ?>

            <?php echo e(Form::text('name', $producto->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Descripcion')); ?>

            <?php echo e(Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion'])); ?>

            <?php echo $errors->first('descripcion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Stock')); ?>

            <?php echo e(Form::text('stock', $producto->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock'])); ?>

            <?php echo $errors->first('stock', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('precio')); ?>

            <?php echo e(Form::text('precio', $producto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio'])); ?>

            <?php echo $errors->first('precio', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('status')); ?>

            <?php echo e(Form::text('status', $producto->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status'])); ?>

            <?php echo $errors->first('status', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\InvForm\resources\views/producto/form.blade.php ENDPATH**/ ?>