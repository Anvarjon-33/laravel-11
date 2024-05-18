@props(['items'])
{{--@livewire('save-posts')--}}
<div {{$attributes->merge(['class' => 'p-2 m-2'])}}>
    @if($items->count()>0)
        <ul>
            @foreach($items as $item)
                <li class="list-disc">
                    {{$item}}
                </li>
            @endforeach
        </ul>
    @endif
</div>
