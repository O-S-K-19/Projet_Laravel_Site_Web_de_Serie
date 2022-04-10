@extends('layouts.main')

@section($title = "Contact us")
@section('content')
    <div class="container mt-5">
        {{-- <!-- Success message -->
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif --}}
        <h1>{{ $msg ?? '' }}</h1>
        <form method="post" action="{{ route('contactPage') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div class="form-group">
                <label style="font-weight: 600; font-size: 1.3em">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="form-control" @error('name')
                    style="border-color: red" @enderror value="{{ old('name') }}">

                @error('name')
                    <div class="error_message" style="font-weight: 500; color: red">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label style="font-weight: 600; font-size: 1.3em">Email</label>
                <input type="email" name="email" id="email" placeholder="Your email" class="form-control" @error('email')
                    style="border-color: red" @enderror value="{{ old('email') }}">
                @error('email')
                    <div class="error_message" style="font-weight: 500; color: red">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label style="font-weight: 600; font-size: 1.3em">Message</label>
                <textarea name="message" id="message" rows="4" value="{{ old('message') }}"
                    placeholder="Enter your message..." class="form-control" @error('message') style="border-color: red"
                    @enderror></textarea>
                @error('message')
                    <div class="error_message" style="font-weight: 500; color: red">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>

    {{-- a refaire le CSS (classes) du formulaire --}}
@endsection
