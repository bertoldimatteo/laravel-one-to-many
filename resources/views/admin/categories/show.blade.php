@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>{{$category->name}}</h1>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a href="{{route('admin.categories.index')}}" class="btn btn-info">Tutte le categorie</a>
                </div>
                <div>
                    <h3>I post associati</h3>
                    <ul>
                        @foreach ($category->posts as $post)
                            <li>{{$post->title}}</li>
                        @endforeach
                    </ul>
                </div>    
            </div>
        </div>        
    </div>    
@endsection