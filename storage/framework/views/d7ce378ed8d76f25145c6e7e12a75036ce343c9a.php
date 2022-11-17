<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>

    <?php echo $__env->yieldContent('titulodecadapagina'); ?>
    <?php echo $__env->yieldContent('bootstrap5.1'); ?>
    <?php echo $__env->yieldContent('cssdecadapagina'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/plantilla.css')); ?>">
    <link rel="stylesheet" href="../../resources/sass/app.scss">
    <link rel="stylesheet" href="FontAwesome6.0.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo e(asset('img/bolaicon.png')); ?>" type="image/png" height="50"/>

</head>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #221f28;">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://github.com/DanielMoreno30" target="_blank"><i class="fa-brands fa-github"></i> My GitHub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><?php echo e(trans('multi-leng.inicio')); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sobremi"><?php echo e(trans('multi-leng.sobremi')); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#proyectos"><?php echo e(trans('multi-leng.portfolio')); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills"><?php echo e(trans('multi-leng.contacto')); ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo e(trans('multi-leng.seleccionidioma')); ?>

          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo e(route('language','es')); ?>">Castellano
              <img src="<?php echo e(asset('img/banderaespañola.png')); ?>" width="20" height="20" class="rounded-circle"></a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('language','en')); ?>">English 
              <img src="<?php echo e(asset('img/banderainglesa.png')); ?>" width="20" height="20" class="rounded-circle"></a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('language','ca')); ?>">Catalan
              <img src="<?php echo e(asset('img/banderacatalana.png')); ?>" width="20" height="20" class="rounded-circle"></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <a class="navbar-brand" href="https://www.linkedin.com/in/danielmorenofernandezdmf/" target="_blank"><i class="fa-brands fa-linkedin"></i> My Linkedin</a>
</nav>

<body style="font-family: 'Assistant';">
  <div class="col-12" id="particles-js" style="background-image: url('<?php echo e(asset('img/escritorio.png')); ?>'); background-size: 80% 100%; max-width: 100%; height: 100%; background-color: #221f28; background-position: center; background-repeat: no-repeat;"></div>
  <a href="#sobremi"><h1 class="home-title button">
    <span><?php echo e(trans('multi-leng.bienvenido')); ?></span>
  </h1></a>


<?php echo $__env->yieldContent('contenido'); ?>

<button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top" style="background-color: #00A2FF;">  <i class="fas fa-arrow-up"></i>
</button>
</body>


<?php echo $__env->yieldContent('footer'); ?>

<script src="<?php echo e(asset('js/backtotop.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php echo $__env->yieldContent('javascript'); ?>

</html>
<?php /**PATH C:\xampp\htdocs\PortfolioV1\resources\views/plantillas/plantilla.blade.php ENDPATH**/ ?>