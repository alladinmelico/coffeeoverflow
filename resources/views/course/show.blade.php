<x-app-layout>
    @includeWhen(session('success'), 'include.alert.success')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (auth()->user()->id == $course->teacher_id)
                <a href="{{route('course.edit',$course->id)}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                {!! Form::open(['route' => ['course.destroy', $course->id], 'method'=>'POST']) !!}
                    @csrf
                    @method('DELETE')
                    <button class="text-red-400" type="submit"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                {!! Form::close() !!}
                <a href="{{route('schoolwork.create', ['course'=>$course->id])}}"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Add Post</a>
            @endif
            <div clas="bg-gray-900 min-h-screen">
                <p>{{$course->name}}</p>
                @include('schoolwork.include.cards', ['schoolworks'=>$works])
            </div>
        </div>
    </div>
</x-app-layout>
