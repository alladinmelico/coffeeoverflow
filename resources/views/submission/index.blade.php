<div class="bg-gray-300">
    @foreach ($submissions as $item)
        <x-card>
            <x-slot name="head" >
                <div class="">
                    <a href="{{route('submission.show',$item->id)}}">{{$item->score ?? 'No score yet'}}</a>
                </div>
            </x-slot>
            <x-slot name="body">
                {{$item->schoolwork_id}}
            </x-slot>
            <x-slot name="footer">
                {{$item->updated_at}}
            </x-slot>
        </x-card>
    @endforeach
</div>
