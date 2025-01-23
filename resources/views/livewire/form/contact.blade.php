<form class="php-email-form" method="post" role="form" wire:submit="save">
    @csrf
    @method('POST')

    <div class="row">
        <div class="col-md-6 form-group">
            <input class="form-control" wire:model="name" placeholder="Your Name"  type="text" />
            <x-form.validation-message field="name" :value="$name" />
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input class="form-control" wire:model="email" placeholder="Your Email"  type="email" />
            <x-form.validation-message field="email" :value="$email" />
        </div>
    </div>

    <div class="form-group mt-3">
        <input class="form-control" wire:model="subject" placeholder="Subject"  type="text" />
        <x-form.validation-message field="subject" :value="$subject" />
    </div>

    <div class="form-group mt-3">
        <textarea class="form-control" wire:model="message" placeholder="Message" rows="5"></textarea>
        <x-form.validation-message field="message" :value="$message" />
    </div>

    <div class="text-center">
        <button type="submit">
            {{ __('Send Message') }}
        </button>
    </div>
</form>