@extends('auth.layout')

@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">

                            <form action="{{ route('register.post') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="fullname" class="col-md-4 col-form-label text-md-right">FullName</label>
                                    <div class="col-md-6">
                                        <input type="text" id="fullname" class="form-control" name="full_name" required autofocus>
                                        @if ($errors->has('full_name'))
                                            <span class="text-danger">{{ $errors->first('full_name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">User Phone</label>
                                    <div class="col-md-6">
                                        <input type="number" id="phone" class="form-control" name="user_phone" required autofocus>
                                        @if ($errors->has('user_phone'))
                                            <span class="text-danger">{{ $errors->first('user_phone') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dob" class="col-md-4 col-form-label text-md-right">Date of birth</label>
                                    <div class="col-md-6">
                                        <input type="date" id="dob" class="form-control" name="date_of_birth" required autofocus>
                                        @if ($errors->has('date_of_birth'))
                                            <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="iin" class="col-md-4 col-form-label text-md-right">IIN</label>
                                    <div class="col-md-6">
                                        <input type="number" id="iin" class="form-control" name="IIN" required autofocus>
                                        @if ($errors->has('IIN'))
                                            <span class="text-danger">{{ $errors->first('IIN') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" value="{{ old('password_confirmation') }}" required="required">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required="required">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
