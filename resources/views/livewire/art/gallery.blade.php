<div>
    @role('curator')
      <div class="container col-md-6 offset-md-3 mt-3 alert alert-secondary text-center">This is how the user sees the items in the user view.</div>
    @endrole
    <div class="container mt-4">
      <div class="d-flex justify-content-end" style="width: 25%">
        <input id="search" type="text" class="search form-control " placeholder="Find artwork.." wire:model.lazy="search">
      </div>
      <div id="" class="row">
        @if($arts->count() == 0)
          <h1 class="text-center mt-5">
            <div class="card p-5" style="background: rgba(0, 0, 0, 0.705); border-radius: 10px;">
              <h3 class="text-center text-light">
                Nothing is shown in gallery.
              </h3>
            </div>
          </h1>         
        @else
         @foreach ($arts as $art )
         <div class="card bg-light p-3 m-3 w-25" style="box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266); ">
            <div class="mb-2 w-100 ">
                <a id="art-{{ $art->id }}" class="col-4 art-to-view" href="{{url('/art',['art'=>$art->id]) }}">
                  <div id="" class="art-card card mb-2 {{ $art->stocks == 0 ? 'sold-out-container':'art-container' }} " >
                  <div class="">
                    <div id="image-box" class=" m-3">
                      @php
                          $images = App\Models\Image::where('code', $art->code)->get();
                      @endphp
          
                      @foreach ($images as $img)
                          <img id="" class="" src="{{ asset('uploads/all')}}/{{ $img->image }}" alt="">
                          
                      @endforeach
                    </div>
                  </div>
                   
                  </div>
                </a>
                 <div class="card-body details">
                   <h6 class="text-center">{{ $art->name }}</h6>
                   <h6 class="text-center">by {{ $art->artist }}</h6>
                 </div>
              </div>
        
              
         </div>
   
       @endforeach
        @endif
     
        
       </div>
    </div>

      <style>
        .details{
          /* background: #000; */
          width: 300px;
        }
        .details h6{
          /* background: rgb(255, 255, 255); */
          width: 100%;
        }
        #image-box img{
            height: 180px;
            width: 100%;
            object-fit: cover;
        }
        a{
            color: black;
            text-decoration: none;
        }
        a:hover{
            color: black;
            text-decoration: none;
        }

        .art-card{
          background: linear-gradient(rgba(0, 0, 0, 0.907),rgb(157, 128, 91), rgb(90, 65, 32));
          box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266);
        }

        body{
          /* background: rgb(203, 239, 208); */
        }
        
      </style>
</div>
