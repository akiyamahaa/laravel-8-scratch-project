@extends('layouts.master')

@section('content')
    <h1 class="bg-emerald-300">Hello this is Index</h1>
    <div>
        <div>
            <h2>All button</h2>
            <div>
                <a href="{{ route('posts.create') }}">Create</a>
            </div>
            <div>
                <a href="{{ route('posts.trashed') }}">Trashed</a>
            </div>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div class="card-body">
            <h1>Create Posts</h1>
            <a href="">Go Back</a>
            <form action="{{ route('posts.store') }}" class="form-group" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Image</label>
                    <input type="file" name="image">
                </div>
                <input type="text" name="title" class="form-control" placeholder="Title...">
                <select name="category_id" id="">
                    <option value="">Select...</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                </select>
                <textarea type="text" name="description" class="form-control" cols='30' rows='10'
                    placeholder="Description...">
                </textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
