<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div clas="bg-gray-900 min-h-screen">
                {!! Form::open(['route'=>'schoolwork.store', 'method'=>'POST', 'files'=>true]) !!}
                    @csrf
                    @include('include.schoolwork.form')
               {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
