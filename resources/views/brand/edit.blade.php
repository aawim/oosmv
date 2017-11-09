@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
 

<div class="row">

 
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Brand |<small>Change brands in the system.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                    <!-- <li><a class=" "><i class="btn btn-round btn-success">Create New Category</i></a> -->
                    <a href="{{route('brand.create')}}"><button type="submit" class="btn btn-success">Add New Brand</button></a>
                    <a href="{{route('brand.index')}}"><button type="submit" class="btn btn-success">View Brands</button></a>
                     
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
                  
                      <form class="form-horizontal" action="{{route('brand.update',$d->id)}}" method="POST" enctype="multipart/form-data">
                      {{method_field('PUT')}} {{ csrf_field() }}
              
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Category Name</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ? old('name') : $d->name}}">
                      </div>
                    </div>
              
              
              
                    <div class="form-group">
                       
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Icon</label>
                      <div class="col-xs-9">
                          <input type="file" class="form-control" id="icon" name="icon"  value="{{ old('icon') }}">
                      </div>
                  </div>
              
              
              
              
              
              
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Category Name</label>
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
                                              <button type="submit" class="btn btn-primary">Update</button>
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