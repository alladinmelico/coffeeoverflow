<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div clas="bg-gray-900 min-h-screen">
                <p>{{$course->score ?? 'No score yet'}}</p>
                {{-- @include('schoolwork.index', ['schoolworks'=>$works]) --}}
            </div>
        </div>
    </div>
</x-app-layout>
