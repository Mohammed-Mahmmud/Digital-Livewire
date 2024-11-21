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
                      <th>Name</th>
                      <th>Progress</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                  @if (count($skills) > 0)
                      @foreach ($skills as $item)
                          <tr class="table-warning">
                              <td>{{ $item->name }}</td>
                              <td><span class="badge bg-label-info me-1">{{ $item->progress }}</span></td>
                              <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                          data-bs-toggle="dropdown">
                                          <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                          <a class="dropdown-item" href="javascript:void(0);"><i
                                                  class="bx bx-edit-alt me-1"></i> Edit</a>
                                          <a class="dropdown-item" href="javascript:void(0);"><i
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
              {{ $skills->links() }}
          </table>
      </div>
  </div>
