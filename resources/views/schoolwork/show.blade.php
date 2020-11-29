<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($isTeacher)
                <a href="{{route('schoolwork.edit',$schoolwork->id)}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                {!! Form::open(['route' => ['schoolwork.destroy', $schoolwork->id], 'method'=>'POST']) !!}
                    @csrf
                    @method('DELETE')
                    <button class="text-red-400" type="submit"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                {!! Form::close() !!}
            @endif
            <div clas="bg-gray-900 min-h-screen">
                <p>{{$schoolwork->name}}</p>
                @includeWhen($media==null, 'submission.create', ['some' => 'data'])
                @includeWhen($media!=null, 'include.submission.document')
            </div>
        </div>
    </div>
</x-app-layout>
