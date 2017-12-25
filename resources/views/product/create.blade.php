@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
 

<div class="row">

 
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create New Product |<small>Create products.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     <a href="{{route('product.index')}}"><button type="submit" class="btn btn-success">View Products</button></a>
                     
                  </li>
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <br />
               
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                       <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                            <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Name</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control " name="name" id="name"   required value="{{ old('name') }}">
                      </div>
                    </div>
              

 
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      
                      <select class="form-control cat" id="cat" name="cat" required>
        <option value="" selected required > Select  </option>
        @foreach($categories as $category)
        <option
         <option value="{{$category->id}}" >{{$category->name}}</option>
    @endforeach
    </select>
                  </div>
                    </div>





                    <div class="form-group scat">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Category</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      
                      <select class="form-control scat" id="scat" name="scat" required>
                        <option value="" selected required > Select  </option>
     
    </select>
                  </div>
                    </div>




 







                
























                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Brand</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      
                      <select class="form-control" id="brand" name="brand" required>
        <option value="" selected required > Select  </option>
        <option value="0"   > Other  </option>
        @foreach($brands as $brand)
         


        <option value="{{$brand->id}}" >{{$brand->name}}</option>

    @endforeach
    </select>
     
                    </div>
                    </div>
 






                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Size</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="size" id="size"     value="{{ old('size') }}">
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="price" id="price"     value="{{ old('price') }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Discount Price</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="dprice" id="dprice"     value="{{ old('dprice') }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Qty</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="qty" id="qty"     value="{{ old('qty') }}">
                      </div>
                    </div>


                   

                    <div class="form-group">
                       
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                      <div class="col-xs-9">
                          <input type="file" class="form-control" id="icon" name="icon"  value="{{ old('icon') }}">
                      </div>
                  </div>
      
                    <div class="ln_solid"></div>
                
                    <div class="form-group">
                                          <div class="col-xs-offset-2 col-xs-10">
                                              <button type="submit" class="btn btn-primary">Create</button>
                                          </div>
                                      </div>
              
              
                  </form>
                </div>
                </div>
             





      

    </div>
  </div>
</div>
</div>
@endsection