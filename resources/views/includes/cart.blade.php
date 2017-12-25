@if (Route::has('login'))
@auth
<div class="top-cart-block">
  <div class="top-cart-info">
  @if($cartitems->count()>0)
  <a href="{{route('cart.index')}}" class="top-cart-info-count">
  @else
  <a href="#" class="top-cart-info-count">
  @endif
   
    @if(Auth::user()->cart_items()->where('is_active', 1)->get()->count() > 1)
    {{"You have : (" }} <strong> {{ Auth::user()->cart_items()->where('is_active', 1)->get()->count() }} </strong> {{") Items Item in your list" }} 
    @else
    {{"You have : (" }} <strong> {{ Auth::user()->cart_items()->where('is_active', 1)->get()->count() }} </strong>  {{") Item in your list" }} 
    @endif
  </a>
 </div>



  @if (Auth::check())  
 
  @if(Auth::user()->cart_items()->where('is_active', 1)->get()->count() > 0)
  <div class="top-cart-content-wrapper">
    <div class="top-cart-content">
      <ul class="scroller" style="height: 250px;">
       @foreach ($cartitems as $count => $cart_item)
       @if($cart_item->is_active === 1)
        <li>
          <a href="{{route('cart.edit', $cart_item->id)}}">
          <img src="{{url('/').'/'.$cart_item->product()->first()->image}}" alt="Rolex Classic Watch" width="37" height="34">
          </a>
          <span class="cart-content-count">x  {{$cart_item->qty}}</span>
          <strong><a href="{{route('cart.edit', $cart_item->id)}}">{{$cart_item->product()->first()->name}}</a></strong>
          <em>{{$cart_item->qty * $cart_item->product()->first()->price }}</em>
          <a href="#" class="del-goods" data-toggle="modal" data-target="#deleteModal{{$count}}"
           data-delete-id="{{$cart_item->id}}" onclick="$('#delete-id').val($(this).data('delete-id'));">&nbsp;</a>
        </li>
        @endif
        @endforeach  
       </ul>
      <div class="text-right">
        <!-- <a href="shop-shopping-cart.html" class="btn btn-default">View Cart</a> -->
        <form class="form-horizontal" action="{{route('order.store')}}" method="POST" >
                      {{ csrf_field() }}
                      <input type="hidden" class="form-control " name="user_id" id="user_id"   required value="{{ Auth::user()->id }}">
               <button class="btn btn-primary" type="submit">Check for availability <i class="fa fa-check"></i></button>

               </form>
      </div>
    </div>
  </div>

@else
<div class="top-cart-content-wrapper">
<div class="top-cart-content">

<p style="padding-left:20px;">You don't have any item in your cart.</p>
</div>
</div>
 

@endif
  @endif

</div>


@endauth







@if (Auth::check()) 
@foreach ($cartitems as $count => $cart_item)
<!-- Modal -->
<div id="deleteModal{{$count}}" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">

<form class="form-horizontal" action="{{route('cart.destroy',$cart_item->id)}} " method="POST">

{{method_field('DELETE')}}  {!! csrf_field() !!} 

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Delete</h4>
</div>
<div class="modal-body">
<p>Are you sure you want to permanently delete this item ?</p>
<input type="text" id="delete-id" name="id" value="0" hidden />
</div>
<div class="modal-footer">
<span id="delete-dialog-link">
  <button type="submit"  class="btn btn-danger">Confirm</button>
</span>

<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>

</form>

</div>

</div>
</div> 
@endforeach 
@endif
@endif