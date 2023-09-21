@extends('layouts.app')

@section('page-title', 'Tutti i post')

@section('main-content')
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Slug</th>
                        <th scope="col">contenuto</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <th scope="row">
                                {{ $post->id }}
                            </th>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                {{ $post->slug }}
                            </td>
                            <td>
                                {{ $post->content }}
                            </td>
                            <td class="button-column">
                                <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">
                                    Vedi
                                </a>
                                <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-warning">
                                    Modifica
                                </a>
                                <button class="btn btn-danger">
                                    Elimina
                                </button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection