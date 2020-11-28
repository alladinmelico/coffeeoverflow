<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div clas="bg-gray-900 min-h-screen">
                {!! Form::open(['route'=>'course.store', 'method'=>'POST', 'files'=>true]) !!}
                    @csrf
                    @include('include.course.form')
               {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
