@extends('components.base')

@section('content')


 
 
  <div class="login-background">
    @if(session('message'))
    <div class="container col-md-6 offset-md-3 mt-5 alert alert-success text-center">{{ session('message') }}</div>
    @endif
    @if(session('error'))
      <div class="container col-md-6 offset-md-3 mt-5 alert alert-danger text-center">{{ session('error') }}</div>
    @endif
    <div id="login-box" class="container col-md-6 offset-md-3 card p-5">
    
      <form action="{{'/'}}" method="POST">
        {{csrf_field()}}
      
        <div class="form-floating">
          <input type="email" name="email" id="email" class="form-control" value="viewer@mailnator.com" >
          <label for="email">Email</label>
          @error('email')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-floating mt-3">
          <input type="password" name="password" id="password" class="form-control" value="viewer">
          <label for="password">Password</label>
          @error('password')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
  
        <div class="d-flex mt-5 mb-3">
          <div class="flex-grow-1">
            <a id="register-link" href="{{ '/register' }}" class="href">Don't have an account?</a>
          </div>
          <button id="login-btn" class="btn px-5" type="submit">Log In <i class="fa-solid fa-right-to-bracket"></i></button>
        </div>
      </form>
    </div>
  </div>
    


  <style>
    #login-box{
      border-radius: 10px;
      background-color: #f7f2f2d9;
      color: #21851f;
    }
    #login-btn{
      background-color: #21851f;
      color: #000;
      
    }
    #register-link{
      color: #21851f;
      font-weight: bold;
    }

    .login-background{
      padding-top: 7em;
      width: 100%;
      height: 100vh;
      background-image: url('login-2.jpg');
      background-size: cover;
    }
  </style>

@endsection
