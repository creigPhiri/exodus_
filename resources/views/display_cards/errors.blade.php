<div class="alert-danger">
    @if($errors->any())
        @foreach($errors as $error)
            {{$error}}
        @endforeach
    @endif
</div>
