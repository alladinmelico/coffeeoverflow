<div>
    {!! Form::open(['route' => ['enroll'], 'method'=>'POST']) !!}
        @csrf
        <div class="flex flex-col">
            <label for="code" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Code</label>
            <div class="flex flex-row">
                <span class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker"><i class="fa fa-lock mr-2" aria-hidden="true"></i></span>
                {!! Form::text('code', old('code'), ['class'=> 'bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold']) !!}
            </div>
            @if ($errors->has('code'))
                <small class="text-red italic">{{$errors->first('code')}}</small>
            @endif
        </div>

        <button class="text-green-400" type="submit">Mag-enroll</button>
    {!! Form::close() !!}
</div>
