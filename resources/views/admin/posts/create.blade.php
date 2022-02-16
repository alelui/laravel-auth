@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Nuovo Post</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('posts.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Titolo</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Inserire titolo">
                        </div>
                        <div class="form-group">
                            <label for="content">Contenuto</label>
                            <textarea class="form-control" id="content" name="content" placeholder="Inserire contenuto" rows="3"></textarea>
                          </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="published" name="published">
                          <label class="form-check-label" for="published">Pubblicato</label>
                        </div>
                        <button type="Aggiungi" class="btn btn-success">Aggiungi</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection