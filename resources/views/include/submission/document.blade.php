<div>
    @if ($media!=null)
        <object data="{{$media}}" type="application/pdf" class="min-w-full min-h-screen">
            <embed src="{{$media}}" type="application/pdf" />
        </object>
    @else
        <p>Invalid File</p>
    @endif
</div>
