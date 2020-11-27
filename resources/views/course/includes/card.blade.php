<div class="p-8 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 max-w-md hover:w">

    <!-- Article -->
    <div class="overflow-hidden rounded-lg shadow-lg">

        <a href="{{route('course.show',$course->id)}}">
            <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
        </a>

        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
            <h1 class="text-lg">
                <a class="no-underline hover:underline text-black" href="{{route('course.show',$course->id)}}">
                    {{$course->name}}
                </a>
            </h1>
            <p class="text-grey-darker text-sm">
                {{Carbon\Carbon::createFromTimeStamp(strtotime(($course->created_at)))->diffForHumans()}}
            </p>
        </header>

        <footer class="flex items-center justify-between leading-none p-2 md:p-4">
            <a class="flex items-center no-underline hover:underline text-black" href="#">
                <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                <p class="ml-2 text-sm">
                    {{$course->teacher->name}}
                </p>
            </a>
        </footer>

    </div>
    <!-- END Article -->

</div>
