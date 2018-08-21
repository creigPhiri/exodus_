<div class="p-3">
    <h4 class="font-italic">Archives</h4>
      <ol class="list-unstyled mb-0">
         @foreach($archives as $archive)
             <li>
                 <a href="?month={{$archive['month']}}&year={{$archive['year']}}">
                    {{$archive['month']. ' '. $archive['year']}}
                 </a>
             </li>
         @endforeach
      </ol>
</div>
<div class="p-3">
    <h4 class="font-italic">Trending right now</h4>
       <ol class="list-unstyled mb-0">
        @foreach($tags as $tag)
            <li>
              <a href="#{{$tag}}"> #{{$tag}}</a>
            </li>
        @endforeach
       </ol>
</div>