@extends('layouts.app')
@section('title', $viewData->title)
@section('subtitle', $viewData->subtitle)
@section('content')
    <section class="container">
        <form method="POST" action="{{ route('auth.register') }}">
            @csrf
            <x-input label="Name" name="name" placeholder="Enter your name" required />
            <x-input type="email" label="E-mail" name="email" placeholder='Enter your email' required />
            <x-input type="password" label="Password" name="password" placeholder="Enter your password" required />
            <div class="d-flex justify-content-around">
                <a class="btn btn-outline-secondary" href="/">
                    Cancel
                </a>
                <button class="btn btn-primary">
                    Save
                </button>
            </div>
        </form>
    </section>
@endsection
