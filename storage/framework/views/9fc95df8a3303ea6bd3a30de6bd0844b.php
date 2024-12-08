<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our
                Projects<span></span></p>
            <h1 class="text-center mb-5">Recently Completed Projects</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2" data-filter="*">All</li>
                    <?php if(count($categories) > 0): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="mx-2" data-filter=".category-<?php echo e($category->id); ?>"><?php echo e($category->name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <?php if(count($projects) > 0): ?>
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 portfolio-item category-<?php echo e($project->category_id); ?> wow fadeInUp"
                        data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?php echo e(asset($project->image)); ?>"
                                    style="width: 100%;height:150px;" alt="<?php echo e($project->name); ?>">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="<?php echo e(asset($project->image)); ?>"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href="<?php echo e($project->link); ?>"><i
                                            class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2"><?php echo e($project->category->name); ?></p>
                                <h5 class="lh-base mb-0"><?php echo e($project->name); ?></a>
                                <h6 class="lh-base mb-0"><?php echo e($project->description); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Projects End -->
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/components/front/partials/projects.blade.php ENDPATH**/ ?>