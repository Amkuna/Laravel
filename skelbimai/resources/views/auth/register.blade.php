@extends("skelbimai.main")

@section('content')
    <main>
        <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8 text-center">
                                <h1>Sign Up</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5"  data-aos="fade">

                        <h2 class="mb-5 text-black">Register</h2>

                        <form action="{{ route('register') }}" method="POST" class="p-5 bg-white">
                            @csrf
                            <div class="row form-group">
                                <label for="name" class="col-12 text-black">{{ __('Username') }}</label>
                                <div class="col-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="email" class="col-12 text-black">{{ __('E-Mail Address') }}</label>
                                <div class="col-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="password" class="col-12 text-black">{{ __('Password') }}</label>

                                <div class="col-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="password-confirm" class="col-12 text-black">{{ __('Confirm Password') }}</label>

                                <div class="col-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-12">
                                    <p>Have an account? <a href="{{route('login')}}">Log In</a></p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary py-2 px-4 text-white">
                                    {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <div class="newsletter bg-primary py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-md-6">

                        <form class="d-flex">
                            <input type="text" class="form-control" placeholder="Email">
                            <input type="submit" value="Subscribe" class="btn btn-white">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
