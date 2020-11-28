<div clas="bg-gray-900 min-h-screen">
    {!! Form::open(['route'=>'submission.store', 'method'=>'POST', 'files'=>true]) !!}
        @csrf
        @include('include.submission.form')
   {!! Form::close() !!}
</div>
