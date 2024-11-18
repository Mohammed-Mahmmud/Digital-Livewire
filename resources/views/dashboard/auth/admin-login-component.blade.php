@if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<form class="mb-3" wire:submit.prevent="submit">
    <div class="mb-3">
        <label for="email" class="form-label">Email or Username</label>
        <input type="text" class="form-control" wire:model="email" placeholder="Enter your email or username"
            autofocus />
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="input-group input-group-merge">
            <input type="password" class="form-control" wire:model="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" wire:model="remember" id="remember-me" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit" wire:loading.attr="disabled">
            <span wire:loading.remove>Sign in</span>
            <div class="tezt-center">
                <div class="spinner-border spinner-border-sm text-white" role="status" wire:loading
                    wire:target="submit">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </button>
    </div>
</form>
