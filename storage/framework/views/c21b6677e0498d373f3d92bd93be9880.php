 <!-- Navbar & Hero Start -->
 <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
     <a href="" class="navbar-brand p-0">
         <h1 class="m-0">DGital</h1>
         
     </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="fa fa-bars"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav mx-auto py-0">
             <a href="<?php echo e(route('front.pages')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('index-active'); ?>">Home</a>
             <a href="<?php echo e(route('front.pages', ['slug' => 'about'])); ?>"
                 class="nav-item nav-link <?php echo $__env->yieldContent('about-active'); ?>">About</a>
             <a href="<?php echo e(route('front.pages', ['slug' => 'services'])); ?>"
                 class="nav-item nav-link <?php echo $__env->yieldContent('service-active'); ?>">Service</a>
             <a href="<?php echo e(route('front.pages', ['slug' => 'projects'])); ?>"
                 class="nav-item nav-link <?php echo $__env->yieldContent('project-active'); ?>">Project</a>
             <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle <?php echo $__env->yieldContent('team-testimonial-active'); ?>" data-bs-toggle="dropdown">Pages</a>
                 <div class="dropdown-menu m-0">
                     <a href="<?php echo e(route('front.pages', ['slug' => 'team'])); ?>"
                         class="dropdown-item <?php echo $__env->yieldContent('team-active'); ?>">Our Team</a>
                     <a href="<?php echo e(route('front.pages', ['slug' => 'testimonial'])); ?>"
                         class="dropdown-item <?php echo $__env->yieldContent('testimonial-active'); ?>">Testimonial</a>
                 </div>
             </div>
             <a href="<?php echo e(route('front.pages', ['slug' => 'contact'])); ?>"
                 class="nav-item nav-link <?php echo $__env->yieldContent('contact-active'); ?>">Contact</a>
         </div>
         <a href="<?php echo e(route('front.pages', ['slug' => 'contact'])); ?>"
             class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get
             Started</a>
     </div>
 </nav>
 <!-- Navbar & Hero End -->
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/components/front/layouts/navbar.blade.php ENDPATH**/ ?>