@extends('layouts.app')

@section('content')
<div class="section">
  <div class="container-fluid" style="padding: 0 2%;">

    <div class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card-panel">
          <div class="card-content">
            <h4 class="center">Login</h4>
            
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              
              <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                <label for="email" data-error="Email inválido">E-Mail</label>

                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>

              <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" name="password" required autofocus>
                <label for="password">Senha</label>

                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

              {{-- <div class="col s8 m8 offset-m4 offset-s4">
                <input id="remeberBox" type="checkbox" name="remember" class="filled-in">
                <label id="remeberBox">Manter conectado</label>
              </div> --}}
              
              <br><br><br>
              <div class="form-group">
                <div class="col s6 m6 offset-m4 offset-s4">
                  <button type="submit" class="btn orange lighten-1">
                    Login
                  </button>

                  {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                  </a> --}}
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
