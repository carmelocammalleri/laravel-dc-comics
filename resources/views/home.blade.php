<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')
</head>
    <body>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($comics as $comic )

                    <tr>
                        <th scope="row">{{$comic->title}}</th>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </body>
</html>
