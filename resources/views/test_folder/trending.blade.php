<style>
    html body {
        background-color: #f5f5f5;
    }
</style>
<div class="container-fluid" style=" background-color:#fff ;height: 100%">
@include('layouts.nav')

    <h2 class="text-center h2" style="font-family: 'Indie Flower',cursive; ">Trending now</h2>
    @csrf
    <div class="row text-center">
    @foreach($posts as $post)
        @include('test_folder.card')    {{-- including the trending card --}}
        @endforeach
</div>
</div>