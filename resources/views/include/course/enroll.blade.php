<div class="w-64 flex shadow-lg align-items-end flex-col bg-cover bg-center justify-content bg-white p-6 rounded pt-8 pb-8">
    <div class='bg-green-200'>
        {!! Form::open(['route' => ['enroll'], 'method'=>'POST']) !!}
            @csrf
            <label for="code" class="uppercase text-grey-darker text-xs font-bold">Code</label>
            <div class="flex flex-row">
                <div class="flex flex-row">
                    <span class="flex items-center bg-grey-lighter rounded rounded-r-none text-grey-darker"><i class="fa fa-lock mr-2" aria-hidden="true"></i></span>
                    {!! Form::text('code', old('code'), ['class'=> 'bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold']) !!}
                </div>
                @if ($errors->has('code'))
                    <small class="text-red italic">{{$errors->first('code')}}</small>
                @endif
            </div>
            <button class="shadow-lg w-full text-white bg-teal-500 hover:bg-teal-400 rounded-full p-3" type="submit">Mag-enroll</button>

        {!! Form::close() !!}

        </div>
</div>
