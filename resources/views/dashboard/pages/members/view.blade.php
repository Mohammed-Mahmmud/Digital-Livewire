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
                      <th width="30%">Name</th>
                      <th width="20%">position</th>
                      <th width="30%">image</th>

                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                  @if (count($data) > 0)
                      @foreach ($data as $item)
                          <tr class="table-light">
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->name }}</td>
                              <td><span class="badge bg-label-info me-1">{{ $item->position }}</span></td>
                              <td>
                                  <img src="{{ asset($item->image) }}" alt="{{ $item->image }}" height="50">
                              </td>
                              <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                          data-bs-toggle="dropdown">
                                          <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu ">
                                          <a class="dropdown-item" href="#"
                                              wire:click.prevent="$dispatchTo('dashboard.pages.members.update','edit',{id:{{ $item->id }}})"><i
                                                  class="bx bx-edit-alt me-1"></i>
                                              Edit</a>
                                          <a class="dropdown-item" href="#"
                                              wire:click.prevent="$dispatchTo('dashboard.pages.members.delete','destroy',{id:{{ $item->id }}})"><i
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
          <div class="m-5"> {{ $data->links() }}</div>
      </div>
  </div>
