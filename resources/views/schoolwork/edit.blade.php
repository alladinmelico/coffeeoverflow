<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div clas="bg-gray-900 min-h-screen">
                {!! Form::model($schoolwork,['route'=>['schoolwork.update',$schoolwork->id], 'method'=>'POST', 'files'=>true]) !!}
                    @csrf
                    @method('PUT')
                    @include('include.schoolwork.form')
               {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
