<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
   <div class="container">
       <a class="navbar-brand size" href="<?php echo e(url('/')); ?>">
           <?php echo e(config('app.name')); ?>

       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
           <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <!-- Left Side Of Navbar -->
           <ul class="navbar-nav mr-auto">

           </ul>
           <!-- Center Side Of Navbar -->
           <ul class="navbar-nav mr-auto">

           </ul>

           <!-- Right Side Of Navbar -->
           <ul class="navbar-nav ml-auto">
                   <li class="nav-item <?php echo e(Request::is('/') ? 'active':''); ?>">
                      <a class="nav-link" href="<?php echo e(route('home')); ?>">Home </a>
                   </li>       
                   <li class="nav-item <?php echo e(Request::is('about') ? 'active':''); ?>">
                      <a class="nav-link" href="<?php echo e(route('about')); ?>">About us </a>
                   </li>   
                   <li class="nav-item <?php echo e(Request::is('courses') ? 'active':''); ?>">
                      <a class="nav-link" href="<?php echo e(route('courses')); ?>">Courses </a>
                   </li>   
                   <li class="nav-item <?php echo e(Request::is('contacts') ? 'active':''); ?>">
                      <a class="nav-link" href="<?php echo e(route('contacts')); ?>">Contacts </a>
                   </li>                                                                
                   <!-- Authentication Links -->
                   <?php if(auth()->guard()->guest()): ?>
                     <li class="nav-item <?php echo e(Request::is('login') ? 'active':''); ?>">
                         <a class="nav-link" href="<?php echo e(route('login')); ?>"><span class="gold"><?php echo e(__('Administration')); ?></span></a>
                     </li>
                     <!-- 
                     <li class="nav-item">
                         <a class="nav-link" href=""></a> --> <!-- href=" route('register') "><?php echo e(__('Register')); ?></a>  -->
                     <!-- </li> -->
                   <?php else: ?>
                   <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                       </a>

                       <div class="dropdown-menu dropdown-menu-right size" aria-labelledby="navbarDropdown">
                           <?php if(auth()->guard()->check()): ?>
                              <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                           <?php endif; ?>
                           <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               <?php echo e(__('Logout')); ?>

                           </a>

                           <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                               <?php echo csrf_field(); ?>
                           </form>
                       </div>
                   </li>
                   <?php endif; ?>
           </ul>
       </div>
   </div>
  </nav><?php /**PATH /home/alex/www/laravel-napaeduhub/resources/views/front/navbar.blade.php ENDPATH**/ ?>