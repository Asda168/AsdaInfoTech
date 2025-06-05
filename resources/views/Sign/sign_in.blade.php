<a href="/auth/github" class="btn btn-dark mt-3 d-flex align-items-center" style="gap: 8px;">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
        <path d="..." />
    </svg>
    Sign in with GitHub
</a>

<a href="{{ route('google.login') }}" class="btn btn-google" aria-label="Sign in with Google">
    <svg class="me-2" width="16" height="16" viewBox="0 0 48 48">
        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6"/>
        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
    </svg>
    Sign in with Google
</a>

<div class="divider">or</div>

<div class="mb-3">
    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
</div>
<div class="mb-3 position-relative">
    <input type="password" class="form-control" placeholder="Password" id="password" aria-label="Password">
    <button class="btn position-absolute end-0 top-50 translate-middle-y" type="button" onclick="togglePassword()" aria-label="Toggle password visibility">
        <svg width="16" height="16" fill="currentColor" id="eye-icon">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.5 8c1.1-2.7 3.6-4.5 6.5-4.5s5.4 1.8 6.5 4.5c-1.1 2.7-3.6 4.5-6.5 4.5S2.6 10.7 1.5 8z"/>
            <path d="M8 10a2 2 0 100-4 2 2 0 000 4z"/>
        </svg>
    </button>
</div>

<div class="mb-3 text-start">
    <a href="#" class="forgot-password">Forgot password?</a>
</div>

<button class="btn btn-signin">Sign in</button>
