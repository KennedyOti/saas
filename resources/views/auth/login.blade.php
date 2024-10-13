<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/ico" href="{{ asset('assets/images/favicon.ico') }}" />
    <script src="https://kit.fontawesome.com/8bc50a29d1.js" crossorigin="anonymous"></script>
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
    <title>Login</title>
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
                <div class="form_header">Sign In</div>
                <div class="form_sign_up_link"><span>New users?</span> <span class="text-2"><a
                            href="{{ route('register') }}">Create an account</a></span></div>
                <div class="form_body">
                    <form id="loginForm">
                        @csrf
                        <div class="input-group">
                            <label>
                                <div class="label">Username #</div>
                                <input class="input-item" type="text" name="username" placeholder="">
                            </label>
                        </div>
                        <div class="input-group">
                            <label>
                                <div class="label">Password</div>
                                <input class="input-item" type="password" name="password" placeholder="">
                            </label>
                        </div>
                        <!-- <div class="input-group">
                            <div>
                                <input type="checkbox" class="checkbox-keep-signed-in">
                                <span class="keep-me-signed-in">Keep me signed in on this device</span>
                            </div>
                        </div> -->
                        <div class="input-group">
                            <button type="submit" class="submit">Sign in</button>
                        </div>
                    </form>
                </div>
                <div class="form_footer">
                    Need to find <span class="text-2">your username</span> or <span class="text-2">password</span>?
                </div>
            </div>
        </main>
        <footer class="godaddy_footer">
            <div class="godaddy_footer_text">
                Copyright &#169; 1999 - 2021 Company name, LLC. All Rights Reserved. <span
                    class="privacy-policy">Privacy Policy</span>
            </div>
        </footer>
    </div>

    <script>
    $(document).ready(function() {
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route("login") }}',
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