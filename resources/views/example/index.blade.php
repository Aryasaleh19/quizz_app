<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        nav {
            margin-bottom: 20px;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
        }

        .content {
            border: 1px solid #ccc;
            padding: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="#" id="home-link">Home</a>
        <a href="#" id="about-link">About</a>
        <a href="#" id="contact-link">Contact</a>
    </nav>
    <div class="content" id="content">
        <h1>Welcome to Our Company</h1>
        <p>This is the homepage.</p>
    </div>

    <script>
        $(document).ready(function() {
            function loadContent(url, title) {
                console.log(url)
                $.get(url, function(data) {
                    $('#content').html(data);
                    // Mengubah URL tanpa reload
                    history.pushState(null, title, url);
                });
            }

            $('#about-link').click(function(e) {
                e.preventDefault();
                loadContent("{{ route('about') }}", "About Us");
            });

            $('#contact-link').click(function(e) {
                e.preventDefault();
                loadContent("{{ route('contact') }}", "Contact Us");
            });

            $('#home-link').click(function(e) {
                e.preventDefault();
                $('#content').html('<h1>Welcome to Our Company</h1><p>This is the homepage.</p>');
                // Mengubah URL ke halaman utama
                history.pushState(null, "Home", "{{ route('home') }}");
            });

            // Menangani kembali tombol di browser
            window.onpopstate = function() {
                // Ini akan memuat kembali konten saat tombol kembali ditekan
                $.get(location.pathname, function(data) {
                    $('#content').html(data);
                });
            };
        });
    </script>
</body>

</html>
