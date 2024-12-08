<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span>
        </p>
        <h1 class="text-center mb-5">What Say Our Clients!</h1>
        <div class="owl-carousel testimonial-carousel">
            <!--[if BLOCK]><![endif]--><?php if(count($testimonials) > 0): ?>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i><?php echo e($item->description); ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="<?php echo e(asset($item->image)); ?>" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1"><?php echo e($item->name); ?></h5>
                                <span><?php echo e($item->position); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
<!-- Testimonial End -->
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/components/front/partials/testimonial.blade.php ENDPATH**/ ?>