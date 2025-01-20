<div aria-hidden="true" class="modal fade" id="modal-delete" tabindex="-1" wire:ignore.self>
	<div class="modal-dialog">
		<div class="modal-content">

            {{-- HEDER --}}
			<div class="modal-header bg-danger">
				<h1 class="modal-title fs-5 text-white fw-bold">
                    {{ __('Eliminar') }}
                </h1>
				<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
			</div>

            {{--  BODY --}}
			<div class="modal-body">
				<h5 class="text-center">
                    {{ __('¿Estas Seguro que deseas eliminar este dato?') }}
                </h5>

                <span class="fw-bold text-dark text-center d-block">
                    @if($modelo)
                        {{ $modelo->getDescripcion() }}
                    @endif
                </span>
			</div>

            {{-- FOOTER --}}
			<div class="modal-footer">
				<button class="btn btn-secondary col-4" data-bs-dismiss="modal" type="button">
                    {{ __('Cerrar Ventana') }}
                </button>
				<button class="btn btn-danger col-4" type="button" wire:click="delete">
                    {{ __('Si, Eliminar !') }}
                </button>
			</div>
		</div>
	</div>

    <script>
        document.addEventListener('livewire:init', () => {
            const element = document.getElementById('modal-delete')
            const modal = new bootstrap.Modal(element);

            Livewire.on('self-open-modal-delete', function(){
                modal.show();
            });
    
            Livewire.on('self-close-modal-delete', function(){
                modal.hide();
            });
        });
    </script>
</div>
