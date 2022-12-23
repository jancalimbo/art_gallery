<div>
    <div class="container mt-3">
        <h4>{{ $this->art->name }}</h4>
        <hr>
        <table  class="table table-bordered">
            <thead>
              <tr>
                <th>Order No.</th>
                <th>Ordered By</th>
                <th>Ordered On</th>
                <th>Action</th>
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
                            <a class="btn btn-success btn-sm" href="{{ url('arts/confirm-payment',['art'=>$order->id]) }}">
                                Confirm Payment
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          <h6 class="text-secondary">*Confirm Payment button is for assuming there is a method of payment and the user who ordered has paid the art and already procured them.</h6>
    </div>
</div>
