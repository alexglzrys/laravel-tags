<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Book Tags</title>

        <!-- Fonts CDN -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <h1 class="mt-4 mb-1"><i class="fas fa-tags"></i> Laravel Book Tags</h1>
                    <p>Sistema de etiquetas basado en el componente laravel-tagging</p>
                    <hr>
                    <form action="{{ route('books.store') }}" method="POST">
                        <div class="form-group">
                            <label for="name">Nombre del Libro</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese el nombre del libro">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Ingrese la descripción detallada del libro"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tags">Etiquetas</label>
                            <input type="text" name="tags" id="tags" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    <hr>
                    @foreach($books as $book)
                    <div class="card  mb-3 border-primary">
                        <div class="card-header bg-primary text-white">{{ $book->name }}</div>
                        <div class="card-body">{{ $book->description }}</div>
                        <div class="card-footer">
                        @forelse($book->tags as $tag)
                            <span class="badge badge-info text-white p-1">{{ $tag->name }}</span>
                        @empty
                            <em>Sin etiquetas</em>
                        @endforelse
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Scripts  -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
