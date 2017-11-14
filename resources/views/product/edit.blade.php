@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
 

<div class="row">

 
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Product |<small>Edit products.</small></h2>
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
                  
                      <form class="form-horizontal" action="{{route('product.update',$d->id)}}" method="POST" enctype="multipart/form-data">
                      {{method_field('PUT')}} {{ csrf_field() }}
              
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Name</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="name" id="name"   required value="{{ old('name') ? old('name') : $d->name}}">
                      </div>
                    </div>
              

               <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
             <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" id="cate" name="cate">
                                    @foreach($categories as $category)
                                       
                                    
                                    <option value="{{ $category->id }} " 
                                         @if(old('category') != null)
                                 {{ (old('category') == $category) ? "selected" : "" }}
                             @else
                                 {{ ($d->cat_id == $category->id) ? "selected" : "" }}
                             @endif
                             >{{$category->name}}</option>
                                    
                                   
                                    @endforeach
                                    </select>
                               </div>
                          </div>


                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Category</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="form-control" id="scat" name="scat" required>
                    <option value="" selected required > Select  </option>
                    <option value="1" selected required > SC One  </option>
                    <option value="2" selected required > SC Two  </option>
    </select>
                      </div>
                    </div>
 


             <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12">Brand</label>
             <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" id="brand" name="brand">
                                    @foreach($brands as $brand)
                                       
                                    
                                    <option value="{{ $brand->id }} " 
                                         @if(old('brand') != null)
                                 {{ (old('brand') == $brand) ? "selected" : "" }}
                             @else
                                 {{ ($d->brand_id == $brand->id) ? "selected" : "" }}
                             @endif
                             >{{$brand->name}}</option>
                                    
                                   
                                    @endforeach
                                    </select>
                               </div>
                          </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Size</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="size" id="size"     value="{{ old('size') ? old('size') : $d->size}}">
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="price" id="price"     value="{{ old('price') ? old('price') : $d->price}}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Discount Price</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="dprice" id="dprice"     value="{{ old('dprice') ? old('dprice') : $d->dprice}}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Qty</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="qty" id="qty"     value="{{ old('qty') ? old('qty') : $d->qty}}">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Store</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="store" id="store"   required value="{{ old('store') ? old('store') : $d->store_id}}">
                      </div>
                    </div>

                    <div class="form-group">
                       
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                      <div class="col-xs-9">
                          <input type="file" class="form-control" id="image_file" name="image_file"   >
                      </div>
                  </div>
      



                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Is Active</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <select class="form-control" id="is_active" name="is_active" >
                                                  <option value="1" {{ $d->is_active ? "Selected" : "" }}>Active</option>
                                                  <option value="0" {{ !$d->is_active ? "Selected" : "" }}>InActive</option>
                                              </select>
                      </div>
                    </div>






                    <div class="ln_solid"></div>
                
                    <div class="form-group">
                                          <div class="col-xs-offset-2 col-xs-10">
                                              <button type="submit" class="btn btn-primary">Save</button>
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