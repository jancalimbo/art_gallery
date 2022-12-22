<div>
    <div class="d-flex justify-content-start align-items-center">
        <h1>Galleria</h1>
        <div class="btns">
          <a class="btn btn-sm" style="background-color: #26b924; margin-left: 20px; border-radius: 50%" href="{{ route('add-art') }}">
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
    </div>

    <div class="container mt-3">
        <div id="" class="row">
          @if ($arts->count() == 0)
            <h1 class="text-center">
              No equipment in inventory yet
            </h1>
  
            @else
            <table class="table table-bordered table-striped table-responsive table-hover">
              <thead class="bg-dark" style="color: #26b924">
                <tr class="text-center">
                  
                  <th>Art</th>
                  <th>ID</th>
                  <th>Name</th>
                  {{-- <th>Description</th> --}}
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($arts as $art )
                <tr>
                  
                  <td class="d-flex justify-content-center">
                    @php
                      $images = App\Models\Image::where('code', $art->code)->get();
                    @endphp
    
                    @foreach ($images as $img)
                    <img id="" class="" src="{{ asset('uploads/all')}}/{{ $img->image }}" alt="">
                    @endforeach
    
                  </td>
                  <td>{{ $art->code }}</td>
                  <td>
                    {{ $art->name }}
                  </td>
                  {{-- <td>
                    {{ $art->description }}
                  </td> --}}
                  <td>
                    <a href="{{url('/arts/update',['art'=>$art->id]) }}" class="m-2 btn  bg-dark">
                      <i style="color: #26b924;" class="fa-solid fa-pen"></i> 
                    </a>
                    <a href="{{url('/arts/delete',['art'=>$art->id]) }}" class="m-2 btn bg-dark"><i class="fa-solid fa-trash" style="color: #26b924;"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          @endif
  
        </div>
  
     
      </div>
  
      <style>
        td img{
          height: 150px;
          width: 200px;
          object-fit: cover;
        }
      </style>
     </div>

</div>