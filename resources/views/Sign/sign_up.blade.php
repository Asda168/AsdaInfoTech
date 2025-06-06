<button class="btn btn-github mt-3" aria-label="Sign up with GitHub">
    <svg class="me-2" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/>
    </svg>
    Sign up with GitHub
</button>
<button class="btn btn-google" aria-label="Sign up with Google">
    <svg class="me-2" width="16" height="16" viewBox="0 0 48 48">
        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6"/>
        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
    </svg>
    Sign up with Google
</button>

<!-- Divider -->
<div class="divider">or</div>

<!-- Email and Password Fields -->
<div class="mb-3">
    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
</div>
<div class="mb-3 position-relative">
    <input type="password" class="form-control" placeholder="Password" id="password_sign_up" aria-label="Password">
    <button class="btn position-absolute end-0 top-50 translate-middle-y" type="button" onclick="togglePasswordSignUp()" aria-label="Toggle password visibility">
        <svg width="16" height="16" fill="currentColor" id="eye-icon-sign-up">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.5 8c1.1-2.7 3.6-4.5 6.5-4.5s5.4 1.8 6.5 4.5c-1.1 2.7-3.6 4.5-6.5 4.5S2.6 10.7 1.5 8z"/>
            <path d="M8 10a2 2 0 100-4 2 2 0 000 4z"/>
        </svg>
    </button>
</div>

<!-- Terms and Conditions -->
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
    <label class="form-check-label consent-label" for="terms">
        I declare that I have read and accept the <a href="#" class="text-orange">Terms and Conditions</a> and <a href="#" class="text-orange">Privacy Policy</a>
    </label>
    <div id="terms-error" class="consent-error" style="display: none;">You must accept our Terms and Conditions</div>
</div>

<!-- Consent for Data Processing -->
<div class="mb-3">
    <label class="form-label">
        I consent to the processing of personal data for information on upcoming events, commercial offers, or job offers from Codemotion. To withdraw consent, refer to the <a href="#" class="text-orange">Privacy Policy</a>
    </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="consent_processing" id="consent_processing_yes" value="yes">
        <label class="form-check-label" for="consent_processing_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="consent_processing" id="consent_processing_no" value="no">
        <label class="form-check-label" for="consent_processing_no">No</label>
    </div>
</div>

<!-- Consent for Data Sharing -->
<div class="mb-3">
    <label class="form-label">
        I consent to Codemotion sharing my personal data with its partners and sponsors for news on upcoming events, commercial offers, and job offers.
    </label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="consent_sharing" id="consent_sharing_yes" value="yes">
        <label class="form-check-label" for="consent_sharing_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="consent_sharing" id="consent_sharing_no" value="no">
        <label class="form-check-label" for="consent_sharing_no">No</label>
    </div>
</div>

<!-- Sign Up Button -->
<button class="btn btn-signin" onclick="validateSignUp()">Sign Up</button>
