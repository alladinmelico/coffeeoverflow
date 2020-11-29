<x-app-layout>
    @includeWhen(session('success'), 'include.alert.success')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div clas="bg-gray-900 min-h-screen">
                <div class="p-5 bg-cool-gray-200">
                    <div class="bg-green-100">
                        @include('include.course.enroll')
                    </div>
                    <h4>Mga tinuturo kong Asignatura</h4>
                    <button><a href="{{route('course.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></button>
                    <div class="bg-blue-300">
                        @foreach ($personalCourses as $course)
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

                <div>
                    @foreach ($courses as $course)
                        <x-card>
                            <x-slot name="head">
                                <a href="{{route('course.show',$course->course->id)}}">{{$course->course->name}}</a>
                            </x-slot>
                            <x-slot name="body">
                                {{$course->course->description}}
                            </x-slot>
                            <x-slot name="footer">
                                {{$course->course->updated_at}}
                            </x-slot>
                        </x-card>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    @push('modals')

    @endpush
</x-app-layout>
