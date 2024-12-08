<div>
    <form wire:submit.prevent="submit">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="name" wire:model="name" placeholder="Your Name">
                    <label for="name">Your Name</label>
                    <x-dashboard.layouts.error :error="'name'" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" wire:model="email" placeholder="Your Email">
                    <label for="email">Your Email</label>
                    <x-dashboard.layouts.error :error="'email'" />
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" id="subject" wire:model="subject" placeholder="Subject">
                    <label for="subject">Subject</label>
                    <x-dashboard.layouts.error :error="'subject'" />
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" wire:model="message"></textarea>
                    <label for="message">Message</label>
                    <x-dashboard.layouts.error :error="'message'" />
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
            </div>
        </div>
    </form>
</div>