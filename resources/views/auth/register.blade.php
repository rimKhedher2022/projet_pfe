@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('nom') }}</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" nom="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('prenom') }}</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" nom="prenom" value="{{ old('prenom') }}" required autocomplete="prenom">

                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cin" class="col-md-4 col-form-label text-md-right">{{ __('cin') }}</label>

                                <div class="col-md-6">
                                    <input id="cin" type="text" class="form-control @error('cin') is-invalid @enderror" nom="cin" value="{{ old('cin') }}" required autocomplete="cin">

                                    @error('cin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="specialite" class="col-md-4 col-form-label text-md-right">{{ __('specialite') }}</label>

                                <div class="col-md-6">
                                    <input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" nom="specialite" value="{{ old('specialite') }}" required autocomplete="specialite">

                                    @error('specialite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" nom="image" required>

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           

                            <div class="form-group row">
                                <label for="niveau" class="col-md-4 col-form-label text-md-right">{{ __('niveau') }}</label>

                                <div class="col-md-6">
                                    <select id="niveau" class="form-control @error('niveau') is-invalid @enderror" nom="niveau" required>
                                        <option value="1" {{ old('niveau') == '1' ? 'selected' : '' }}>First Year</option>
                                        <option value="2" {{ old('niveau') == '2' ? 'selected' : '' }}>Second Year</option>
                                        <option value="3" {{ old('niveau') == '3' ? 'selected' : '' }}>Third Year</option>
                                        <option value="4" {{ old('niveau') == '4' ? 'selected' : '' }}>Fourth Year</option>
                                    </select>

                                    @error('niveau')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" nom="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" nom="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" nom="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  
<style>/* register.css */
/* register.css */

/* register.css */

body {
  background: #f5f5f5;
}

h5 {
  font-weight: 400;
}

.container {
  margin-top: 80px;
  width: 400px;
  
}

.card-header {
  background-color: #8a2be2;
  color: #ffffff;
}

.card-body {
  background-color: #ffffff;
  padding: 40px;
  padding-top: 10px;
}

.tabs .indicator {
  background-color: #e0f2f1;
  height: 60px;
  opacity: 0.3;
}

.confirmation-tabs-btn {
  position: absolute;
}

    
    </style>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
