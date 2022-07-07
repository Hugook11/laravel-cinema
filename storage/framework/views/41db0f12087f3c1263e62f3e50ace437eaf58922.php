<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/programme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/event.css')); ?>">
        <div id="programmePdf" class="container" >
        <div class="row">
            <div class="col-12 col-md-7">
                <img src="<?php echo e(asset('images/img.png')); ?>" />
            </div>
            <div class="col-12 col-md-5 text">
                <h4 class="style4">TÉLÉCHARGEZ <br/> NOTRE PROGRAMME</h4>
                <br>
                <button class="style5"> <img id="pictoblanc" src="<?php echo e(asset('images/pictoblanc.png')); ?>"/><img img id="picto" src="<?php echo e(asset('images/picto.png')); ?>"/> PROGRAMME PDF</button>
            </div>
        </div>
    </div>
    <div class="lignes">
        <hr><img src="<?php echo e(asset('images/C_Picto-logo-carre-rouge_69x69.png')); ?>" alt="zrlkg">
        <hr>
    </div>

    <?php echo $__env->make('partials.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="lignes">
        <hr><img src="<?php echo e(asset('images/C_Picto-logo-carre-rouge_69x69.png')); ?>" alt="zrlkg">
        <hr>
    </div>
    <?php echo $__env->make('partials.event', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\autan\resources\views/programme.blade.php ENDPATH**/ ?>