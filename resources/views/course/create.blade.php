<x-modal>
    <x-slot name="title">
        Create Course
    </x-slot>
    <x-slot name="body">
        <div class="max-w-lg max-w-xs mx-auto text-center py-12 mt-4">
            <div class="container py-5 max-w-md mx-auto">
                <form method="post" action="{{route('course.create')}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <input placeholder="Course name"
                            class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text">
                    </div>

                    <div class="mb-6">
                        <label for="description">Description</label>
                        <textarea class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Create
                        </button>
                        <a class="inline-block align-baseline font-bold text-sm text-gray-400 " href="#">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-modal>
