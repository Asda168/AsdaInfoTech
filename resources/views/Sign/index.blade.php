<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #1a252f;
            display: flex;
            flex-direction: column; /* Stack elements vertically */
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 15px;
            box-sizing: border-box;
        }
        .form-logo {
            display: block;
            margin: 0 auto 20px auto; /* Center the image with margin-bottom for spacing */
            max-width: 150px; /* Adjust based on your logo size */
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .nav-tabs .nav-link {
            color: #6c757d;
            font-size: clamp(0.9rem, 2.5vw, 1rem);
        }
        .nav-tabs .nav-link.active {
            color: #f28c38;
            border-bottom: 2px solid #f28c38;
        }
        .btn-github, .btn-google, .btn-signin {
            width: 100%;
            margin-bottom: 10px;
            font-size: clamp(0.85rem, 2.5vw, 0.95rem);
        }
        .btn-github {
            background-color: #333;
            color: #fff;
        }
        .btn-google {
            background-color: #fff;
            color: #333;
            border: 1px solid #ccc;
        }
        .btn-signin {
            background-color: #f28c38;
            color: #fff;
        }
        .divider {
            text-align: center;
            margin: 15px 0;
            color: #6c757d;
            font-size: clamp(0.8rem, 2vw, 0.9rem);
        }
        .forgot-password {
            color: #f28c38;
            text-decoration: none;
            font-size: clamp(0.8rem, 2vw, 0.9rem);
        }
        .form-control, .form-check-label {
            font-size: clamp(0.85rem, 2.5vw, 0.95rem);
        }
        .consent-error {
            color: #dc3545;
            font-size: 0.85rem;
        }
        @media (max-width: 576px) {
            .form-container {
                padding: 15px;
            }
            .btn-github, .btn-google, .btn-signin {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
<!-- Logo Image -->
<img src="{{ asset('image/logo') }}" alt="Form Logo" class="form-logo">

<!-- Form Container -->
<div class="form-container">
    <!-- Tabs -->
    <ul class="nav nav-tabs" id="authTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">Sign Up</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="signin-tab" data-bs-toggle="tab" data-bs-target="#signin" type="button" role="tab" aria-controls="signin" aria-selected="true">Sign In</button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="authTabContent">
        <!-- Sign In Tab -->
        <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
            @include('sign.sign_in')
        </div>
        <!-- Sign Up Tab -->
        <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
            @include('sign.sign_up')
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS for Password Toggle and Tab Activation -->
<script>
    // Ensure Sign In tab is active on page load
    document.addEventListener('DOMContentLoaded', function () {
        const signInTab = document.getElementById('signin-tab');
        const bootstrapTab = new bootstrap.Tab(signInTab);
        bootstrapTab.show();
    });

    // Password toggle for Sign In
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = '<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.5 8c1.1-2.7 3.6-4.5 6.5-4.5s5.4 1.8 6.5 4.5c-1.1 2.7-3.6 4.5-6.5 4.5S2.6 10.7 1.5 8z"/><path d="M8 10a2 2 0 100-4 2 2 0 000 4z"/><path d="M2 2l12 12" stroke="currentColor" stroke-width="1.5"/>';
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = '<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.5 8c1.1-2.7 3.6-4.5 6.5-4.5s5.4 1.8 6.5 4.5c-1.1 2.7-3.6 4.5-6.5 4.5S2.6 10.7 1.5 8z"/><path d="M8 10a2 2 0 100-4 2 2 0 000 4z"/>';
        }
    }

    // Password toggle for Sign Up
    function togglePasswordSignUp() {
        const passwordInput = document.getElementById('password_sign_up');
        const eyeIcon = document.getElementById('eye-icon-sign-up');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = '<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.5 8c1.1-2.7 3.6-4.5 6.5-4.5s5.4 1.8 6.5 4.5c-1.1 2.7-3.6 4.5-6.5 4.5S2.6 10.7 1.5 8z"/><path d="M8 10a2 2 0 100-4 2 2 0 000 4z"/><path d="M2 2l12 12" stroke="currentColor" stroke-width="1.5"/>';
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = '<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.5 8c1.1-2.7 3.6-4.5 6.5-4.5s5.4 1.8 6.5 4.5c-1.1 2.7-3.6 4.5-6.5 4.5S2.6 10.7 1.5 8z"/><path d="M8 10a2 2 0 100-4 2 2 0 000 4z"/>';
        }
    }

    // Basic validation for Sign Up
    function validateSignUp() {
        const termsCheckbox = document.getElementById('terms');
        const termsError = document.getElementById('terms-error');
        if (!termsCheckbox.checked) {
            termsError.style.display = 'block';
            return false;
        } else {
            termsError.style.display = 'none';
            alert('Sign Up form submitted!');
        }
    }
</script>
</body>
</html>
