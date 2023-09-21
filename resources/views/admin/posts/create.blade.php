@extends('layouts.app')

@section('page-title', 'Tutti i post')

@section('main-content')
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.posts.store') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="" >Titolo</label>
                    <input type="text" name="title" required maxlength="255">
                </div>

                <div>
                    <label for="">Contenuto</label>
                    <textarea name="content" rows="3" required></textarea>
                </div>

                <div class="justify-content-center">
                    <button type="submit" class="btn btn-success mt-4">
                        + Aggiungi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
