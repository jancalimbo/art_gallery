<nav id="navbar-box" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <h1><a id="navbar-link-title" class="navbar-brand" href="{{route('lobby')}}">
            <img id="" class="" src="{{ asset('logo.png')}}" alt="">
        </a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                @role('viewer')
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/lobby')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{route('galleria')}}">Gallery</a>
                </li>
                {{-- <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/authors')}}">Discover Users</a>
                </li>
                <li class="nav-item">
                    
                    <a id="navbar-links" class="nav-link" href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a>   
                </li>

                
                <li class="nav-item">
                    
                   <a id="navbar-links" class="nav-link" href="{{ route('cart') }}">
                        <i class="fa-solid fa-cart-shopping"></i>
                        @php
                            $count = App\Models\Cart::where('user_id', auth()->user()->id)->count();
                        @endphp
                        <div class="cart-count-div  ">
                            <span class="cart-count">{{ $count }}</span>

                        </div>
                        
                    </a>
                </li>

              
                 --}}
               
                @endrole

                @role('admin')
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('admin-index') }}">
                            <span>
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span>
                              
                            </span>
                        </a>
                        
                    </li>
                @endrole

                @hasanyrole('curator|viewer')
                    {{-- <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('user-index') }}">Arts</a>  
                        
                    </li> --}}
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="/logout">Leave</a>
                        
                        
                    </li>
                @endrole
            </ul>
        </div>
    </div>
</nav>


<style>
nav div h1 a img {
    width: 200px;
}
#navbar-box{
    height: 80px;
    padding-left: 20px; 
    padding-right: 20px; 
    background-color: #f7f2f2;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266);
}
.navbar-brand{
    font-size: 30px;
}

a.nav-link:link{
    
    font-weight: bold;
}
#navbar-link-title{
    color: #96031a;
    
    font-weight: bold;
}
a.nav-link:hover{
    color: rgb(30, 1, 30);
    
    font-weight: bold;
}

.nav-link{
    margin-left: 25px;
    color: #d49624;
}

.cart-count-div .cart-count{
    padding: 5px;
    font-size: 10px;
    position: relative;
    top: -33px;
    color: white;
    right: -14px;
    height: 10px;
    border-radius: 50%;
}
.cart-count-div{
    position: absolute;
    
}
</style>