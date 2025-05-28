<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* html {
            min-height: 100%;
            display: flex;
            flex-flow: column;
        }
        body {
            font-family: 'Montserrat', Helvetica, sans-serif !important;
            font-size: 16px;
            flex-grow: 1;
            display: flex;
            flex-flow: column;
            margin: 0;
        }
        main {
            flex-grow: 1;
        } */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Montserrat', Helvetica, sans-serif !important;
            font-size: 16px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            margin: 0;
        }


        header {
            position: sticky;
            top: 0;
            background: white;
            z-index: 999;
            border-bottom: 1px solid #ccc;
        }
        
        .page-title {
            color: #38220f;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .page-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            width: 80px;
            height: 4px;
            background: #b97c50;
            border-radius: 2px;
        }
        h2{
            font-family: 'playfair display'
        }
        .search-form{
            margin: auto;
        }
    </style>
    <title>Lumière</title>
</head>
<body>
    @include('include.header')
    <main class="" >
        @yield('content')
    </main>
    @include('include.footer')
</body>
</html>