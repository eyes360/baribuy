@extends('layouts.authLayout')

@section('content')
    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

    @if (session('status'))
        <p>
            {{ session('status') }}
        </p>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Request new password</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <p class="mt-3 mb-1">
        <a href="{{ url('/login') }}">Login</a>
    </p>
    {{-- <p class="mb-0">
        <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>
    </p> --}}
@endsection
