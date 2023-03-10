<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta 
        name="description"
        content="{{$post->meta->meta_description ? $post->meta->meta_description : ''}}"
    > --}}
    {{-- <meta 
        name="robots"
        content="{{$post->meta->meta_robots ? $post->meta->meta_robots : ''}}"
    >
    <meta 
        name="keywords"
        content="{{$post->meta->meta_keywords ? $post->meta->meta_keywords : ''}}"
    > --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="w-4/5 mx-auto">
        <div class="pt-10">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                < Back to previous page
            </a>
        </div>

        <h4 class="text-left sm:text-center text-2xl sm:text-4xl md:text-5xl font-bold text-gray-900 py-10 sm:py-20">
            {{ $post->title }}
        </h4>

        <div class="text-left sm:text-left sm:inline block text-gray-900 pb-10 sm:pt-0 pt-0 sm:pt-10 pl-0 sm:pl-4 -mt-8 sm:-mt-0">
            <div class="text-xl font-bold inline"> Category:</div>
            <span class=" italic inline">
                @foreach ($post->categories as $category )                       
                #{{$category->title}},
                @endforeach
            </span>
          
        </div>

        <div class="block lg:flex flex-row mt-5">
            <div class="basis-9/12 text-center sm:block sm:text-left">
                <span class=" font-bold text-left sm:text-left sm:inline block text-gray-900 pb-10 sm:pt-0 pt-0 sm:pt-10 pl-0 sm:pl-4 -mt-8 sm:-mt-0">
                    Made by:
                    <a
                        href=""
                        class="font-bold text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                        Patrick shriver
                    </a>
                    On 10-02-2023
                </span>
            </div>
        </div>

        <div class="pt-10 pb-10 text-gray-900 text-xl">
            <p class="font-bold text-2xl text-black pt-10">
                {{ $post->excerpt }}
            </p>

            <p class="text-base text-black pt-10">
                {{ $post->body }}
            </p>
        </div>
    </div>
</html>