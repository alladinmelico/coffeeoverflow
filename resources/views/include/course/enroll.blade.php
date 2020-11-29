
<div>
    {!! Form::open(['route' => ['enroll'], 'method'=>'POST']) !!}
        @csrf
        <div class="flex flex-row">
            <label for="code" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Code</label>
            <div class="flex flex-row">
                <div class="flex flex-row">
                    <span class="flex items-center bg-grey-lighter rounded rounded-r-none text-grey-darker"><i class="fa fa-lock mr-2" aria-hidden="true"></i></span>
                    {!! Form::text('code', old('code'), ['class'=> 'bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold']) !!}
                </div>
                @if ($errors->has('code'))
                    <small class="text-red italic">{{$errors->first('code')}}</small>
                @endif
            </div>
            @if ($errors->has('code'))
                <small class="text-red italic">{{$errors->first('code')}}</small>
            @endif
            <button class="border-2 border-blue-500 px-4 py-2 text-blue-500 hover:text-white hover:bg-blue-500 rounded" type="submit">Mag-enroll</button>
        </div>

    {!! Form::close() !!}
</div>
