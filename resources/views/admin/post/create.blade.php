@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Ajout d'un article
                    </div>
                    <div style="padding: 10px">
                        {!! Form::open(['url' => route('post.store')]) !!}
                        @csrf
                        <div class="form-group">
                            {!! Form::label('title', 'Titre : ') !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description : ') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Contenu : ') !!}
                            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
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
