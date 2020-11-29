<div class="mx-auto">
<div class="flex flex-col">
    <label for="name" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Title</label>
    <div class="flex flex-row">
        {!! Form::text('name', old('name'), ['class'=> 'bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter font-bold']) !!}
    </div>
    @if ($errors->has('name'))
        <small class="text-red italic">{{$errors->first('name')}}</small>
    @endif
</div>

<div class="flex flex-col">
    <label for="description" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Description</label>
    <div class="flex flex-row">
        {!! Form::textarea('description', old('description'), ['row'=> 1, 'class'=> "bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold"]) !!}
    </div>
    @if ($errors->has('description'))
        <small class="text-red italic">{{$errors->first('description')}}</small>
    @endif
</div>

<div class="flex flex-col">
    <label for="subject_id" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Subject</label>
    <div class="flex flex-row">
        {!! Form::select('subject_id', $subjects, null, ['placeholder'=>'---Select Subject---', 'class'=>'border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none' ]) !!}
    </div>
    @if ($errors->has('subject_id'))
        <small class="text-red italic">{{$errors->first('subject_id')}}</small>
    @endif
</div>

<div class="flex flex-col">
    <label for="code" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Code</label>
    <div class="flex flex-row">
        {!! Form::text('code', Str::random(8), ['class'=> 'bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter font-bold']) !!}
    </div>
    @if ($errors->has('code'))
        <small class="text-red italic">{{$errors->first('name')}}</small>
    @endif
</div>
{!! Form::hidden('teacher_id', auth()->user()->id) !!}
<button type="submit" class="bg-blue hover:bg-blue-light text-white font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">Create</button>
</div>
