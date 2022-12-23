<nav id="navbar-box" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        @role('curator')
            <h1>
                <a id="navbar-link-title" class="navbar-brand" href="{{route('curator-view')}}">
                <img id="" class="" src="{{ asset('logo.png')}}" alt="">
                </a>
            </h1>
        @endrole
        @role('viewer')
            <h1>
                <a id="navbar-link-title" class="navbar-brand" href="{{route('lobby')}}">
                <img id="" class="" src="{{ asset('logo.png')}}" alt="">
                </a>
            </h1>
        @endrole
        @if(auth()->guest())
            <h1>
                <a id="navbar-link-title" class="navbar-brand" href="{{route('lobby')}}">
                <img id="" class="" src="{{ asset('logo.png')}}" alt="">
                </a>
            </h1>
        @endif
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                @role('viewer')
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/lobby')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{route('galleria')}}">Gallery</a>
                </li>
               
                @endrole

                @role('curator')
                    <li class="nav-item">
                        <a id="navbar-links" class="nav-link" href="{{route('curator-view')}}">Galleria</a>
                    </li>
                    <li class="nav-item">
                        <a id="navbar-links" class="nav-link" href="{{route('galleria')}}">
                            Exhibit
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="navbar-links" class="nav-link" href="{{ route('see-orders') }}">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a id="navbar-links" class="nav-link" href="{{route('records')}}">
                            Records
                        </a>
                    </li>
                @endrole

                @hasanyrole('curator|viewer')
                   
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="/logout">Leave</a>
                        
                        
                    </li>
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="" onclick="return: false;" style="color: black">{{ Auth::user()->name }}</a>  
                        
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