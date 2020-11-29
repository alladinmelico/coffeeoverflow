<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div clas="bg-gray-900 min-h-screen">
                {!! Form::model($course, ['route'=>['course.update',$course->id], 'method'=>'POST', 'files'=>true]) !!}
                    @method('PATCH')
                    @csrf
                    @include('include.course.form')
               {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
