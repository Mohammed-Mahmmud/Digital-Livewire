  <div class="card">
      <h4 class="card-header">Search</h4>
      <div class="container d-flex justify-content-center">
          <label for="search"></label>
          <input type="search" class=" form-control w-50 text-center" id="search" placeholder="Search for names.."
              wire:model.live="search">
      </div>
      <div class=" text-nowrap">
          <table class="table">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Count</th>
                      <th>Icon</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                  <!--[if BLOCK]><![endif]--><?php if(count($counters) > 0): ?>
                      <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class="table-light">
                              <td><?php echo e($loop->iteration); ?></td>
                              <td><?php echo e($item->name); ?></td>
                              <td><span class="badge bg-label-info me-1"><?php echo e($item->count); ?></span></td>

                              <td><i class="<?php echo e($item->icon); ?> "></i></td>
                              <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                          data-bs-toggle="dropdown">
                                          <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu ">
                                          <a class="dropdown-item" href="#"
                                              wire:click.prevent="$dispatchTo('dashboard.pages.counters.update','edit',{id:<?php echo e($item->id); ?>})"><i
                                                  class="bx bx-edit-alt me-1"></i>
                                              Edit</a>
                                          <a class="dropdown-item" href="#"
                                              wire:click.prevent="$dispatchTo('dashboard.pages.counters.delete','destroy',{id:<?php echo e($item->id); ?>})"><i
                                                  class="bx bx-trash me-1"></i>
                                              Delete</a>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                  <?php else: ?>
                      <tr>
                          <td colspan="3" class="text-center text-danger">No Data</td>
                      </tr>
                  <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
              </tbody>
          </table>
          <div class="m-5"> <?php echo e($counters->links()); ?></div>
      </div>
  </div>
<?php /**PATH /home/mohamed-khater/Documents/projects/Digital-Livewire/DigitalLivewire/resources/views/dashboard/pages/counters/view.blade.php ENDPATH**/ ?>