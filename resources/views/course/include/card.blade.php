<div class="w-full md:w-1/2 xl:w-1/3 pt-4 px-4 md:pr-2">
    <div class="bg-math-background bg-cover bg-no-repeat border-black border-1 rounded-lg shadow">
        <div class="flex flex-row items-center">
            <div class="flex-shrink flex-grow"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
            <div class="flex-shrink mt-2 p-1 text-center bg-green-900">
                <h5 class="text-white text-xs">7:00 AM - 9:00 AM</h5>
             </div>
        </div>

        <a href="{{route('course.show',$course['id'])}}">
            <div class=" m-4 text-center">
                <h3 class="text-white p-4 font-semibold text-2xl">{{$course['name']}}<span class="text-green-400"><i class="fas fa-caret-down"></i></span></h3>
            </div>
        </a>

       <div class="flex flex-row items-center">
        <div class="bg-black bg-opacity-75 p-1 flex-shrink rounded-bl-md">
           <img class="h-8 w-8 rounded-full m-1" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </div>

        <div class="bg-black bg-opacity-75 flex-grow pl-1 pt-1 rounded-br-md">
           <h5 class="text-white text-sm font-medium capitalize">Mrs. Arlene Tan</h5>
          <h3 class="text-white text-xs pb-2 capitalize">Friday<span class="text-green-400"><i class="fas fa-caret-down"></i></span></h3>
        </div>
      </div>
    </div>
 </div>
