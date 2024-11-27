  document.addEventListener('livewire:init', () => {
      jQuery(document).ready(function($) {
          Livewire.on('createModalToggle', (event) => {
              $('#createModalToggle').modal('toggle');
          });
          Livewire.on('updateModalToggle', (event) => {
              $('#updateModalToggle').modal('toggle');
          });
          Livewire.on('deleteModalToggle', (event) => {
              $('#deleteModalToggle').modal('toggle');
          });
      });
  });