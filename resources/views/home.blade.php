@extends('layouts.master')

@section('content')
    {{-- Upload file --}}
    <img src="{{ asset('/storage/images/new-image.jpg') }}" alt="">
    <main role="main" class="container">
        <form action="{{ route('upload-file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Upload</label>
                <input type="file" name="image" id="">
            </div>
            <button type="submit">Submit</button>
        </form>
    </main>
@endsection
