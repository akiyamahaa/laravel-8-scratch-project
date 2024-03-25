@extends('layouts.master')

@section('content')
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
        <h1>All Posts</h1>
        <div class="card">
            <table class="table" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col" style="background-color:aquamarine">#</th>
                        <th scope="col" style="background-color:aquamarine ">Image</th>
                        <th scope="col" style="background-color:aquamarine ">Title</th>
                        <th scope="col" style="background-color:aquamarine ">Description</th>
                        <th scope="col" style="background-color:aquamarine ">Category</th>
                        <th scope="col" style="background-color:aquamarine ">Publish Date</th>
                        <th scope="col" style="background-color:aquamarine ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>
                                <img src="{{ asset($post->image) }}" alt="" width="80">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->category_id }}</td>
                            <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="{{ route('posts.restore', $post->id) }}">Restore</a>
                                <form action="{{ route('posts.force_delete', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">delete permantly</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
