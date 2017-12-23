@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
 

<div class="row">

 
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Product Photos |<small>Product photos.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                    <a href="{{route('product.index')}}"><button type="submit" class="btn btn-success">View Products</button></a>
                    <a href="{{route('product.create')}}"><button type="submit" class="btn btn-success">Add New Product</button></a>
                     
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
                  
                      <form class="form-horizontal" action="{{route('photo.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
              
                
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Image(s)</label>
                      <div class="col-xs-9">
                      <input type="hidden" class="form-control" name="product_id" id="product_id"  value="{{$d}}">
                          <input type="file" class="form-control"  name="photos[]"  multiple>
                      </div>
                  </div>
      
                    <div class="ln_solid"></div>
                    <div class="form-group">
                                          <div class="col-xs-offset-2 col-xs-10">
                                              <button type="submit" class="btn btn-primary">Upload</button>
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