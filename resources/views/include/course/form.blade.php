
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
    @if ($errors->has('descripton'))
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
        <span class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker"><i class="fa fa-lock" aria-hidden="true"></i></span>
        {!! Form::text('code', Str::random(8), ['class'=> 'bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold']) !!}
    </div>
    @if ($errors->has('code'))
        <small class="text-red italic">{{$errors->first('name')}}</small>
    @endif
</div>
{!! Form::hidden('teacher_id', auth()->user()->id) !!}
<button type="submit" class="bg-blue hover:bg-blue-light text-white font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">Create</button>

{{-- <div class="shadow-lg flex flex-col-reverse sm:flex-row">
    <div class="w-full bg-white p-4">
      <div class="text-gray-700">
        <h2>Login</h2>
        <p class="mt-2 text-xs text-gray-base">Lorem ipsum dolor sit amet</p>

      </div>

      <form>
        <div class="mt-3">
        <span class="flex bg-gray-300 items-center px-3">
          <i class="material-icons text-gray-400">person</i>
          {!! Form::text('name', old('name'), ['class'=> 'bg-gray-300 p-2 w-full']) !!}
        </span>

          <span class="flex bg-gray-300 items-center mt-2 px-3">
          <i class="material-icons text-gray-400">lock</i>
          <input class="bg-gray-300 p-2 w-full" type="text" placeholder="Password">
        </span>
        </div>
        <div class="flex justify-between items-center mt-4">
          <button class="bg-blue-500 hover:bg-blue-400 px-4 py-2 text-white">Login</button>
          <a href="#" class="text-xs underline-none text-blue-400 hover:text-blue-600">Forgot password?</a>
        </div>
      </form>

    </div>
    <div class="w-full bg-blue-500 p-4 text-white text-center flex flex-col justify-center ">

      <h4>Sign up Now</h4>
      <p class="text-sm mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
        eget </p>
      <button class="bg-blue-700 mx-auto hover:bg-blue-600 mt-4 text-white text-sm px-4 py-2 w-3/5">
        Register
      </button>

    </div>
</div> --}}
