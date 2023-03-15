<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('Nombre')); ?>

            <?php echo e(Form::text('name', $categoria->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Descripcion')); ?>

            <?php echo e(Form::text('descripcion', $categoria->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion'])); ?>

            <?php echo $errors->first('descripcion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\InvForm\resources\views/categoria/form.blade.php ENDPATH**/ ?>