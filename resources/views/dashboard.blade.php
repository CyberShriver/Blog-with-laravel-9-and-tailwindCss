<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="font-bold pt-8 pb-2 text-xl ">
                Post of :{{Auth::user()->name}}
            </div> --}}

            {{-- <div>
                @foreach (Auth::user()->posts as $post)
                    <div>
                        {{$post->title}}
                    </div>
                @endforeach
            </div> --}}

            <div class="w-full h-full bg-gray-100">
                <div class="w-4/5 mx-auto">
                    <div class="text-center">
                        <h1 class="text-3xl text-gray-700">
                            All Articles
                        </h1>
                        <hr class="border border-1 border-gray-300 mt-10">
                    </div>
            
                    @if (Auth::user())
            
                    <div class="py-2 sm:py-10">
                        <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
                           href={{route('blog.create')}}>
                            New Article
                        </a>
                    </div>
            
                    @endif
                   
                </div>
            
                {{-- fall back message when we delete post --}}
                @if (session()->has('message'))
                    <div class="pb-8 w-4/5 mx-auto">
            
                            <div class="text-white rounded-t font-bold bg-red-500 px-4 py-2">
                                Warning
                            </div>
                            <div class="rounded-b text-red-700 bg-red-200 border border-t-1 px-4 py-2">
                                {{session()->get('message')}}
                            </div>
            
                    </div>
            
                @endif
            
            
                @foreach(Auth::user()->posts as $post)
                    <div class="w-4/5 mx-auto pb-10">
                        <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
                            <div class="w-11/12 mx-auto pb-10">
                                <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                                    <a href="{{ route('blog.show', $post->id) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>
            
                                <p class="text-gray-900 text-lg py-5 w-full break-words">
                                    {{ $post->excerpt }}
                                </p>
            
                                <span class="text-gray-500 text-sm sm:text-base">
                                   Made by:
                                    <a href=""
                                       class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all">
                                        {{$post->user->name}}
                                    </a>
                                   on {{$post->updated_at->format('d-m-Y')}}
                                </span>
            
                                @if (Auth::id()===$post->user->id)
            
                                <div class="flex gap-5">
                                    <div class=" primary-btn text-base px-4 mt-5 w-max bg-green-300 text-white rounded-md transition-all hover:bg-green-400">
                                        <a href="{{route('blog.edit',$post->id)}}">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{route('blog.destroy',$post->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
            
                                        <button class="primary-btn text-base px-4 mt-5 w-max bg-red-300 text-white rounded-md transition-all hover:bg-red-400">Delete</button>
            
                                        </form>
                                    </div>
                                </div>
                                    
                                @endif
                                
                            </div>
                        </div>
                    </div>
                @endforeach
                
                {{-- pagination --}}
            
                {{-- <div class="mx-auto w-4/5 pb-10 gap-5">
                    {{Auth::user()->$posts->links}}
                </div> --}}
            </div>


        </div>
    </div>
</x-app-layout>
