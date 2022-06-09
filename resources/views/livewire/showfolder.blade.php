<div>
    <ul class="list">
        @foreach ($data as $item)
            <li>
                {{$item->file_name}}
            </li>
        
        @endforeach
    </ul>

</div>
