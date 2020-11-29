<div>
    @foreach ($schoolworks as $item)
        <x-card>
            <x-slot name="head">
                <a class="text-lg text-green-300" href="{{route('schoolwork.show',$item->id)}}">{{$item->name}}</a>
            </x-slot>
            <x-slot name="body">
                {{$item->type}}
            </x-slot>
            <x-slot name="footer">
                {{$item->updated_at}}
            </x-slot>
        </x-card>
    @endforeach
</div>
