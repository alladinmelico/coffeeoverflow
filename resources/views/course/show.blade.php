<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{$course['alternateLink']}}">{{$course['name']}}</a>
                <p>{{$course['descriptionHeading']}}</p>
                <p>{{$course['room']}}</p>
            </div>
        </div>
    </div>
</x-app-layout>
