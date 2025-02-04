<div>
    <form wire:submit="save">
        <input wire:model="email" type="email" />
        <input type="submit" value="Yes, subscribe me!" />
    </form>
    <x-form.validation-message field="email" :value="$email" />
</div>
