<x-app-layout>
    <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Open Full Screen Modal</button>
    <div class="flex flex-wrap items-center justify-center mx-auto m-5 p-8">
        @each('course.includes.card', $courses, 'course', 'includes.empty')
    </div>

    @push('modals')
        @includeWhen(true, 'course.create', ['some' => 'data'])
    @endpush

</x-app-layout>

