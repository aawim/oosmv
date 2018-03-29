@if (Route::has('login'))


   <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
               @auth
               
               @if(Auth::user()->is_active == 1)
                  <li><a href="{{ route('myaccount.index') }}">My Account</a></li>
                  @endif
                
                  @if(Auth::user()->user_type == 0 AND Auth::user()->is_active == 1 ) 
                        <li><a href="{{ url('manage/home') }}">Dashboard</a></li>
                  @endif
                     
                        <li>
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>



        @if(Auth::user()->is_active != 1)
            <li style="color:red"><strong>  This is account is not activated. Please contact the site administrator  </strong></li>
        @else

                        <li><a href="#">My Wishlist</a></li>
                       <li>Your loggeg in as : <a href="#"><strong> 
                        @if(Auth::user()->user_type == 0 )                
                            {{ Auth::user()->name }} (Administrator)
                        @elseif(Auth::user()->user_type == 1 ) 
                            {{ Auth::user()->name }} (Business)
                        @elseif(Auth::user()->user_type == 2 )
                            {{ Auth::user()->name }} (User)
                        @endif
                      </strong></a></li>        
                    </li>



@endif







                
                    @else


                        <!-- <li><a href="shop-wishlist.html">My Wishlist</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                        <li><a href="page-login.html">Log In</a></li> -->

                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li>Welcome: <a href="#"><strong> Guest </strong></li> 
                    @endauth
                    </ul>
 
@endif
       












                <div class="top-right links">
                </div>
                </div>  

 

