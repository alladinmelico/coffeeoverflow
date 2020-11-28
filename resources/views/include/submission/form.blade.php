<div class="flex flex-col">
    <label for="file" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">File (pdf)</label>
    <div class="flex flex-row">
        <span class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker"><i class="fa fa-file" aria-hidden="true"></i></span>
        {!! Form::file('file', ['class'=> 'bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold']) !!}
    </div>
    @if ($errors->has('file'))
        <small class="text-red italic">{{$errors->first('name')}}</small>
    @endif
</div>
{!! Form::hidden('course_student_id', auth()->user()->id) !!}
{!! Form::hidden('schoolwork_id', $schoolwork->id) !!}
<button type="submit" class="bg-blue hover:bg-blue-light text-white font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">Create</button>
