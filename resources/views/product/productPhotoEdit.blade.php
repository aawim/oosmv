@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
 

<div class="row">

 
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Product Photo |<small>Edit product Photos.</small></h2>
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
                  
                      <form class="form-horizontal" action="{{route('photo.update', $productPhoto[0]->id)}}" method="POST" enctype="multipart/form-data">
                      {{method_field('PUT')}} {{ csrf_field() }}
              
               
               
                 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Image</label>
                      <div class="col-xs-9">
                      <img src="{{url('/').'/'.$productPhoto[0]->name}}" style="width:200px;" alt="Cool green dress with red bell" class="img-responsive">
                      </div>
                  </div>
               
               <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">New Image</label>
                      <div class="col-xs-9">
                          <input type="file" class="form-control" id="image_file" name="image_file"   >
                      </div>
                  </div>
      
               

                    <div class="ln_solid"></div>
                
                    <div class="form-group">
                                          <div class="col-xs-offset-2 col-xs-10">
                                              <button type="submit" class="btn btn-primary">Save</button>
                                              
                                          </div>



                                      </div>
                  </form>


                  <a href="{{url('manage/photo', $productPhoto[0]->product_id)}}"><button type="submit" class="btn btn-info pull-right">Add Product Photos</button></a>
                  <a href="{{url('manage/view', $productPhoto[0]->product_id)}}"><button type="submit" class="btn btn-info pull-right">View Product Photos</button></a>







                </div>
                </div>
    </div>
  </div>
</div>












</div>
@endsection