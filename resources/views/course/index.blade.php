<x-app-layout>
    @if (session('success'))
        <div class="flex bg-green-200 p-4">
            <div class="mr-4">
            <div class="h-10 w-10 text-white bg-green-600 rounded-full flex justify-center items-center">
                <i class="fa fa-check fa-2x" aria-hidden="true"></i>
            </div>
            </div>
            <div class="flex justify-between w-full">
            <div class="text-green-600">
                <p class="mb-2 font-bold">
                Succes
                </p>
                <p class="text-xs">
                    {{ session('success') }}
                </p>
            </div>
            <div class="text-sm text-gray-500">
                <span>x</span>
            </div>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div clas="bg-gray-900 min-h-screen">
                <button><a href="{{route('course.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></button>
                @foreach ($courses as $course)
                    <x-card>
                        <x-slot name="head">
                            <a href="{{route('course.show',$course->id)}}">{{$course->name}}</a>
                        </x-slot>
                        <x-slot name="body">
                            {{$course->description}}
                        </x-slot>
                        <x-slot name="footer">
                            {{$course->updated_at}}
                        </x-slot>
                    </x-card>
                @endforeach
            </div>
        </div>
    </div>

    @push('modals')

    @endpush
</x-app-layout>
