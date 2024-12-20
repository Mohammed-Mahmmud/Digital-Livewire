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
                      <th>Icon</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                  @if (count($services) > 0)
                      @foreach ($services as $item)
                          <tr class="table-light">
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->name }}</td>
                              <td><span class="badge bg-label-info me-1"><i class="{{ $item->icon }}"></i></span></td>
                              <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                          data-bs-toggle="dropdown">
                                          <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu ">
                                          <a class="dropdown-item" href="#"
                                              wire:click.prevent="$dispatchTo('dashboard.pages.services.update','edit',{id:{{ $item->id }}})"><i
                                                  class="bx bx-edit-alt me-1"></i>
                                              Edit</a>
                                          <a class="dropdown-item" href="#"
                                              wire:click.prevent="$dispatchTo('dashboard.pages.services.delete','destroy',{id:{{ $item->id }}})"><i
                                                  class="bx bx-trash me-1"></i>
                                              Delete</a>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                      @endforeach
                  @else
                      <tr>
                          <td colspan="3" class="text-center text-danger">No Data</td>
                      </tr>
                  @endif
              </tbody>
          </table>
          <div class="m-5"> {{ $services->links() }}</div>
      </div>
  </div>
