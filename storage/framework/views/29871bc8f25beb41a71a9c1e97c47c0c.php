
<?php $__env->startSection('content'); ?>
<header>
    <link rel="stylesheet" href="<?php echo e(asset('modal.css')); ?>">
</header>
<div class="modal">
    <div class="modal-body">
        <h1>Titulo da Arte:</h1>
        <input type="text" class="title">
        <h1>Descrição:</h1>
        <input type="text" class="description">
        <div class="modal-footer">
            <input type="file" class="image" alt="Enviar Imagem">
            <div class="buttons">
                <button class="cancel">Cancelar</button>
                <button class="send">Enviar</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mateus Price\Documents\ArtLuminiere\resources\views/modal.blade.php ENDPATH**/ ?>