<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(request()->is('admin/*') ? 'Admin - ' . config('app.name') : config('app.name')); ?> - <?php echo $__env->yieldContent('title', 'Default Title'); ?></title>
    <!-- CSS files -->
    <link href="<?php echo e(asset('tabler/dist/css/tabler.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('tabler/dist/css/tabler-vendors.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('tabler/dist/css/demo.min.css')); ?>" rel="stylesheet"/>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
            integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Include DataTables CSS and JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"/>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.4.0/tabler-icons.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
          rel='stylesheet'/>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH C:\laragon\www\automation\resources\views/layouts/app.blade.php ENDPATH**/ ?>