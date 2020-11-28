<div class="flex flex-col">
    <label for="name" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Title</label>
    <div class="flex flex-row">
        <span class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker"><i class="fa fa-header" aria-hidden="true"></i></span>
        {!! Form::text('name', old('name'), ['class'=> 'bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold']) !!}
    </div>
    @if ($errors->has('name'))
        <small class="text-red italic">{{$errors->first('name')}}</small>
    @endif
</div>

<div class="flex flex-col">
    <label for="description" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Description</label>
    <div class="flex flex-row">
        <span class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker"><i class="fa fa-info" aria-hidden="true"></i></span>
        {!! Form::textarea('description', old('description'), ['row'=> 1, 'class'=> "bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold"]) !!}
    </div>
    @if ($errors->has('description'))
        <small class="text-red italic">{{$errors->first('description')}}</small>
    @endif
</div>

<div class="flex flex-col">
    <label for="items" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Toal number of items</label>
    <div class="flex flex-row">
        <span class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker"><i class="fa fa-info" aria-hidden="true"></i></span>
        {!! Form::number('items',old('items'), ['class'=> 'bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold']) !!}
    </div>
    @if ($errors->has('items'))
        <small class="text-red italic">{{$errors->first('items')}}</small>
    @endif
</div>

<div class="flex flex-col">
    <label for="type" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Type</label>
    <div class="flex flex-row">
        {!! Form::select('type', $type, null, ['placeholder'=>'---Select Type---', 'class'=>'border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none' ]) !!}
    </div>
    @if ($errors->has('type'))
        <small class="text-red italic">{{$errors->first('type')}}</small>
    @endif
</div>

{!! Form::hidden('course_id', $course) !!}

<button type="submit" class="bg-blue hover:bg-blue-light text-white font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">Create</button>
