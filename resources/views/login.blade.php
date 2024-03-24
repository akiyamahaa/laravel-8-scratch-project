@extends('welcome')

<h1 class="text-2xl font-bold">Hello this is Login Page</h1>

<div class="card w-full">
    <div class="card-body">
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="" class='form-label'>
                    User Name
                </label>
                <input type="text" name="name" style="border:1px solid red;">
            </div>
            <div class="mb-2">
                <label for="" class='form-label'>
                    User Email
                </label>
                <input type="email" name="email"  style="border:1px solid red;">
            </div>
            <div class="mb-2">
                <label for="" class='form-label'>
                    User Password
                </label>
                <input type="password" name="password" style="border:1px solid red;">
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
</div>
