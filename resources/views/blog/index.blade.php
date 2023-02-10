<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>blog</title>
</head>
<body class="container mx-auto px-12">
    <nav>
        <a href={{ route('blog.show',['id'=>1]) }} @class(['p-4', 'font-bold' => true])>Goto Blog</a>
    </nav>
    <h1 class=" text-center text-2xl font-bold capitalize p-4">Programming not easy at the begining</h1>
    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, at aspernatur delectus quisquam doloribus, qui quibusdam iusto consequatur nisi,
         sed ipsum non ratione. Atque, dolores nisi possimus velit distinctio at?</div>

         {{-- <q>{{$author}}</q> --}}
</body>
</html>