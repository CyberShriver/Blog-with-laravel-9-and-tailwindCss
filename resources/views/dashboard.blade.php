<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="font-bold pt-8 pb-2 text-xl ">
                Post of :{{Auth::user()->name}}
            </div>

            <div>
                @foreach (Auth::user()->posts as $post)
                    <div>
                        {{$post->title}}
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>
