<?php $__env->startSection('title', 'Settings'); ?>
<?php $__env->startSection('settings-active', 'active'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Settings</h4>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('dashboard.pages.settings.update-settings');

$__html = app('livewire')->mount($__name, $__params, 'lw-3355800753-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <!-- / Content -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/dashboard/pages/settings/view.blade.php ENDPATH**/ ?>