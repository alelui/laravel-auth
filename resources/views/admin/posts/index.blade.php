@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('posts.create')}}"><button type="button" class="btn mb-3 btn-success">Aggiungi</button></a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Published</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->published}}</td>
                <td><a href="{{route("posts.show", $post->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection