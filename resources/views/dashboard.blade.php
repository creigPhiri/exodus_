@extends('layouts.master');

@section('content');
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say</h3></header>
            <form>
                <div class="form-group">
                    <textarea name="new_post" id="new_post" rows="5" placeholder="your text"></textarea>
                </div>
                <button type="submit" class="btn btn-success">submit</button>
            </form>
        </div>
    </section>
@endsection();