 <form wire:submit.prevent="logout">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <button type="submit" class="dropdown-item"><i class="bx bx-power-off me-2"></i>
         <span class="align-middle">Log Out</span></button>
 </form>
