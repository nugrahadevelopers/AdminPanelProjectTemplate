<x-auth-layout pageTitle="LUPA PASSWORD">
    <div class="container-tight py-4">
        <div class="text-center mb-4">
            <a href="/" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('static/logo-dark.png') }}"
                    height="36" alt=""></a>
        </div>
        <form class="card card-md" action="{{ route('password.request') }}" method="POST">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ trans('forgot-password.forgot_password') }}</h2>
                <p class="text-muted mb-4">{{ trans('forgot-password.description') }}</p>
                <x-auth-session-status :status="session('status')"></x-auth-session-status>
                <x-auth-validation-errors :errors="$errors"></x-auth-validation-errors>
                <div class="mb-3">
                    <label class="form-label">{{ trans('forgot-password.email_address') }}</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">
                        <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <polyline points="3 7 12 13 21 7" />
                        </svg>
                        {{ trans('forgot-password.send_me_new_email_reset') }}
                    </button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            {{ trans('forgot-password.back_to_login_page') }} <a href=".{{ route('login') }}">-></a>
        </div>
    </div>
</x-auth-layout>
