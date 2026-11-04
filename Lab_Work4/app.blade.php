
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fa;
        }

        nav {
            background: #123047;
            padding: 18px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 25px;
        }

        .hero {
            background: linear-gradient(120deg, #087e8b, #123047);
            color: white;
            padding: 90px 20px;
            text-align: center;
        }

        .content {
            padding: 40px 20px;
            text-align: center;
            min-height: 250px;
        }

        footer {
            background: #123047;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

<nav>
    <a href="/">TravelWorld</a>
    <a href="/">Home</a>
    <a href="/about">About</a>
</nav>

@yield('content')

<footer>
    <p>© 2026 TravelWorld | Explore the World</p>
</footer>

</body>
</html>
