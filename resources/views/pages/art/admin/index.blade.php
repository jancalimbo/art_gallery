@extends('components.base')

@section('content')

  <div class="inventory">
    <div class="container p-5">
      <livewire:art.index/>
    </div>
  
  </div>


  <style>
    .inventory {
      width: 100%;
      height: 100vh;
      /* background-image: url('/admin-bg.jpg'); */
      /* opacity: 0.2;
      op */
      background-size: contain;
      /* object-fit: contain; */
      /* background-repeat: no-repeat; */
    }

    .inventory .container {
      opacity: 1.0;
    }
  </style>
@endsection
