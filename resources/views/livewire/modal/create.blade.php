<div aria-hidden="true" class="modal fade" id="modal-create" tabindex="-1" wire:ignore.self>
	<div class="modal-dialog">
		<div class="modal-content">

            {{-- HEDER --}}
			<div class="modal-header bg-primary">
				<h1 class="modal-title fs-5 text-white fw-bold">
                    @if ($modelo_clase)
                        {{ __('Agregar') }} {{ Str::title($modelo_clase) }}
                    @endif
                </h1>
				<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
			</div>

            {{--  BODY --}}
			<div class="modal-body">
                @if ($modelo_clase)
                    @livewire("form.{$modelo_clase}.upsert")
                @endif
			</div>

            {{-- FOOTER --}}
			<div class="modal-footer">
				<button class="btn btn-secondary col-4" data-bs-dismiss="modal" type="button" wire:click="$dispatch('close-modal-create')">
                    {{ __('Cerrar Ventana') }}
                </button>

                @if ($modelo_clase)
                    <button class="btn btn-primary col-4" type="button" wire:click="$dispatch('save-{{$modelo_clase}}')">
                        {{ __('Guardar') }}
                    </button>
                @endif

			</div>
		</div>
	</div>

    <script>
        document.addEventListener('livewire:init', () => {
            const element = document.getElementById('modal-create')
            const modal = new bootstrap.Modal(element);

            Livewire.on('self-open-modal-create', function(){
                modal.show();
            });
    
            Livewire.on('self-close-modal-create', function(){
                modal.hide();
            });
        });
    </script>
</div>
