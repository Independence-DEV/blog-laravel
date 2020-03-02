@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Modifier l'article
                    </div>
                    <div style="padding: 10px">
                    {!! Form::open(['method' => 'put', 'url' => route('post.update', $post->id)]) !!}
                    @csrf
                        {!! Form::hidden('online', 0) !!}
                    <div class="form-group">
                    {!! Form::label('title', 'Titre : ') !!}
                    {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_id', 'Category : ') !!}
                        {!! Form::select('category_id', $categories, $post->category_id, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                    {!! Form::label('description', 'Description : ') !!}
                    {!! Form::textarea ('description', $post->description, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                    {!! Form::label('content', 'Contenu : ') !!}
                    {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label>
                            {!! Form::checkbox('online', 1, $post->online, ['class' => 'form-control']) !!}
                            Online ?
                        </label>
                    </div>

                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea#content',
            plugins: 'image',
            width: 900,
            height: 300
        });
    </script>

@endsection
