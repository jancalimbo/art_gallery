<div>
    <div class="container p-5 mt-3 mb-5">
        @role('viewer')
            <a href="{{ route('galleria') }}" class="btn btn-sm btn-secondary">Return</a>
        @endrole

        <div class="d-flex justify-content-center">
            <div class="">
                @foreach ($art as $art)
                    <div id="" class="art-card card mb-2" >
                        <div class="">
                        <div id="image-box" class="m-3">
                            @php
                                $images = App\Models\Image::where('code', $art->code)->get();
                            @endphp
                
                            @foreach ($images as $img)
                                <img id="" class="" src="{{ asset('uploads/all')}}/{{ $img->image }}" alt="">
                                
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <h4 class="text-center">{{ $art->name }}</h4>
            <h5  class="text-center">by {{ $art->artist }}</h5>
            
           <div class="d-flex justify-content-between mt-4">
                <div class="">
                    <h5>${{ $art->price  }}</h5>
                </div>
                <div class="">
                    @role('curator')
                        <a class="btn btn-sm btn-success">Update</a>
                        <a class="btn btn-sm btn-success">Remove</a>
                        <a class="btn btn-sm btn-success">See Orders</a>
                    @endrole
                    @role('viewer')
                        <a class="btn btn-sm btn-success" href="{{ url('/order',['art'=>$art->id]) }}">Order</a>
                    @endrole
                </div>
           </div>
        </div>
    </div>

    <style>
        #image-box img{
            height: 300px;
            width: 100%;
            object-fit: cover;
        }
    </style>
</div>
