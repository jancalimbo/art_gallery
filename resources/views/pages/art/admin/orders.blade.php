@extends('components.base')

@section('content')

  <div class="container mt-3">
    <h1>Orders</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Art</th>
          <th>Orders</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($arts as $art)
          @php
            $order_count = App\Models\Order::where('art_id', $art->id)->where('status', "incomplete")->count();
          @endphp
          @if ($order_count > 0)
            <tr>
              <td>
                {{ $art->name }}
              </td>
              <td>
                
                <a href="{{url('/arts/orders',['art'=>$art->id]) }}" class="m-2 btn  bg-dark text-light">
                  {{ $order_count }}
                  <i style="color: #26b924;" class="fa-solid fa-eye"></i> 
                </a>
                 
              </td>
            </tr>
            @else
            <div class="container mt-4">
              <h1 class="text-center">
                <div class="card p-5" style="background: rgba(0, 0, 0, 0.705); border-radius: 10px;">
                  <h3 class="text-center text-light">
                    No orders here.
                  </h3>
                </div>
              </h1>
          
            </div>
          @endif
        @endforeach
      </tbody>
    </table>
  </div>

  
@endsection