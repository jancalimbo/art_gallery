@extends('components.base')


@section('content')
  <div class="container mt-3">
    <h4>Orders</h4>
    <table  class="table table-bordered">
        <thead>
          <tr>
            <th>Order No.</th>
            <th>Ordered By</th>
            <th>Ordered On</th>
            <th>Paid On</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>
                        {{ $order->id }}
                    </td>
                    <td>
                        {{ $order->user->name }}
                    </td>
                    <td>
                        {{ $order->created_at }}
                    </td>
                    <td>
                        {{ $order->updated_at }}
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
  </div>
@endsection