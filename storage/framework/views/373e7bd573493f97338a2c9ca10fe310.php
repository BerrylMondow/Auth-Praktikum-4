<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link <?php if($currentRouteName == 'employees.index'): ?> active <?php endif; ?>">Employee</a></li>
            </ul>

            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                    <?php endif; ?>

                    <!--<?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>-->
                <?php else: ?>
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle" style="border: 2px solid black;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> <?php echo e(Auth::user()->name); ?>

                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item text-primary" href="<?php echo e(route('profile')); ?>"><i class="bi bi-person-fill text-primary"></i> My Profile</a>
                        <hr style="padding: 0; margin: 0;">
                    <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i class="bi bi-lock-fill text-danger"></i>
                     <?php echo e(__('Log Out')); ?>

                 </a>

                 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                     <?php echo csrf_field(); ?>
                 </form>
                    </ul>
                  </div>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\Semester-4\Laravel-Framework\praktikum-4\resources\views/layouts/nav.blade.php ENDPATH**/ ?>