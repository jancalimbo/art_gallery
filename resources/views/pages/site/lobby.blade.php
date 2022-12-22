@extends('components.base')

@section('content')

  <div class="home">
    <div class="container">
    </div>
   
  </div>

  <style>
    .home{
      width: 100%;
      height: 100vh;
      background-image: url('art-bg.jpg');
      background-size: cover;
      /* object-fit: contain; */
      /* background-repeat: no-repeat; */
    }
    .home .container div .card {
      margin-top: 30vh;
      background: rgba(0, 0, 0, 0.936);
      border-radius: 10px;
      padding: 100px;
      color: white;
      box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266);
    }
  </style>
@endsection
