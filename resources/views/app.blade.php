<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- Cross Site request Forgery--}}
    <meta name="csrf-token" content={{csrf_token()}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Tasksman</title>
</head>
    <body>
        <div class="container">
            <div id="app"></div>

            {{--  Add JavaScript file that contains React  --}}
            <script src="{{ asset('js/app.js') }}"></script>
        </div>
    </body>
</html>