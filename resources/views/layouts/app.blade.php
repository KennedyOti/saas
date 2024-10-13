<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Saas</title>
    <link rel="icon" type="image/ico" href="{{asset('assets/images/favicon.ico')}}" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&family=Work+Sans:wght@300;400;600&family=Comfortaa:wght@500&display=swap"
        rel="stylesheet" />
    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/home.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/about.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/8bc50a29d1.js"crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    @include('partials.header')
    @yield('content')
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.nav__button').addEventListener('click', () => {
                const navLinks = document.querySelector('.nav__links');
                navLinks.classList.toggle('hidden-in-md');
                if (!navLinks.classList.contains('hidden-in-md')) {
                    navLinks.style.maxHeight = `${document.querySelector('.nav__links').scrollHeight}px`;
                } else {
                    navLinks.style.maxHeight = 0;
                }
            });
        });
    </script>
</body>

</html>