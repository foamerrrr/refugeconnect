<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>RefugeConnect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">

    {{-- Police Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f5f8fa;
        }
        a {
            color: #52c9ff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        header, footer {
            padding: 1rem;
            text-align: center;
        }
        main {
            max-width: 900px;
            margin: 0 auto;
            padding: 1rem;
        }
        .page-title {
            text-align: center;
            margin: 1.5rem 0;
            font-weight: 600;
            font-size: 28px;
        }
        .btn {
            padding: 0.4rem 0.8rem;
            display: inline-block;
            margin-right: 0.5rem;
        }
        .animal-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        .animal-card {
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 0.8rem 0.8rem 0.6rem;
            width: calc(33% - 1rem);
            box-sizing: border-box;
            text-align: start;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .animal-card-name {
            font-weight: bold;
            font-size: 24px;
        }
        .animal-card img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 0.75rem;
            border-radius: 12px 12px 0 0;
        }
        .header-bar {
            background-color: #f5f8fa;
            padding: 1rem 2rem;
        }
        .header-inner {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-nav {
            display: flex;
            gap: 1.5rem;
            font-size: 16px;
        }
        .animal-show {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        .animal-show-image {
            width: 260px;
            border-radius: 12px;
            object-fit: cover;
        }
        .animal-card-actions {
            margin-top: auto;
            text-align: center;
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>

