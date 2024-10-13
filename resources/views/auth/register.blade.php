<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/8bc50a29d1.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/ico" href="{{asset('assets/images/favicon.ico')}}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>Register</title>
</head>

<body>
    <div class="godaddy_container"
        style="background: url('{{ asset('assets/images/background.jpeg') }}'); background-size: cover;">
        <header class="godaddy_header">
            <div class="godaddy_header_contact_us"><span style="color: white">Contact Us 24/7<i
                        class="fas fa-chevron-down chevron-down-custom-icon"></i></span></div>
        </header>
        <main class="godaddy_content">
            <div class="godaddy_content-sign-in-form">
                <div class="form_header">Sign Up</div>
                <div class="form_sign_up_link"><span>Already have an account?</span> <span class="text-2"><a
                            href="{{route('login')}}">Login</a></span></div>
                <div class="form_body">
                    <form id="registerForm">
                        @csrf
                        <div class="input-group">
                            <label>
                                <div class="label">Email</div>
                                <input class="input-item" type="email" name="email" placeholder="email">
                            </label>
                        </div>
                        <div class="input-group">
                            <label>
                                <div class="label">Username</div>
                                <input class="input-item" type="text" name="username" placeholder="username">
                            </label>
                        </div>
                        <div class="input-group">
                            <label>
                                <div class="label">Password</div>
                                <input class="input-item" type="password" name="password" placeholder="password">
                            </label>
                        </div>
                        
                        <div class="input-group">
                            <button type="submit" class="submit">Create account</button>
                        </div>
                    </form>
                </div>
                <div class="form_footer">
                    By creating an account, you agree to our <span class="text-2">Terms & Conditions</span> and <span
                        class="text-2">Privacy Policy</span>
                </div>
            </div>
        </main>
        <footer class="godaddy_footer">
            <div class="godaddy_footer_text">
                Copyright &#169; 1999 - 2021 Company Name, LLC. All Rights Reserved. <span
                    class="privacy-policy">Privacy Policy</span>
            </div>
        </footer>
    </div>

    <script>
    $(document).ready(function() {
        $('#registerForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route("register") }}',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    toastr.success(response.message);
                    window.location.href = "{{ route('dashboard') }}";
                },
                error: function(xhr) {
                    if (xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        toastr.error('An unexpected error occurred.');
                    }
                }
            });
        });
    });
    </script>
</body>

</html>