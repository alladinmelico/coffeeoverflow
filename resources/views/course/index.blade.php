<x-app-layout>

    @includeWhen(session('success'), 'include.alert.success')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div clas="bg-blue-100 min-h-screen">
                <div class="p-5 bg-blue-100">
                    <div class="flex justify-end">

                        @include('include.course.enroll')
                    </div>
                    <div class="container w-1/3 flex flex-row">
                        <h4 class="m-3">Mga tinuturo kong Asignatura</h4>
                        <button class="border-2 border-blue-500 px-4 py-2 text-blue-500 hover:text-white hover:bg-blue-500 rounded"><a href="{{route('course.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></button>
                    </div>
                    <div class="flex flex-wrap mb-2 sm:pl-24 sm:pr-24 sm:pt-9">
                        @foreach ($personalCourses as $course)
                            <div class="w-full md:w-1/2 xl:w-1/3 pt-4 px-4 md:pr-2">
                                <div class=" bg-cover bg-no-repeat border-black border-1 rounded-lg shadow"
                                    >
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink flex-grow"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                                        <div class="flex-shrink mt-2 p-1 text-center bg-green-900">
                                            <h5 class="text-white text-xs bg-white">{{Carbon\Carbon::createFromTimeStamp(strtotime(( $course->updated_at)))->diffForHumans()}}</h5>
                                         </div>
                                    </div>

                                    <div class=" m-4 text-center">
                                      <h3 class="text-white p-4 font-semibold text-2xl"><a href="{{route('course.show',$course->id)}}">{{$course->name}}</a><span class="text-green-400"><i class="fas fa-caret-down"></i></span></h3>
                                    </div>

                                   <div class="flex flex-row items-center">
                                    <div class="bg-black bg-opacity-75 p-1 flex-shrink rounded-bl-md">
                                        <i class="fa fa-book fa-2x" aria-hidden="true"></i>
                                    </div>

                                    <div class="bg-black bg-opacity-75 flex-grow pl-1 pt-1 rounded-br-md">
                                       <h5 class="text-white text-sm font-medium capitalize">{{$course->description}}</h5>
                                    </div>
                                  </div>
                                </div>
                             </div>
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
