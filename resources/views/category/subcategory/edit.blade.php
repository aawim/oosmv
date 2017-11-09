@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
 

<div class="row">

 
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Sub Category |<small>Change Sub categories in the system.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
             
                    <a href="{{route('category.create')}}"><button type="submit" class="btn btn-success">Add New Category</button></a>
                    <a href="{{route('category.index')}}"><button type="submit" class="btn btn-success">View Categories</button></a>
                     
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
                  
                      <form class="form-horizontal" action="{{route('subcat.update',$d->id)}}" method="POST" enctype="multipart/form-data">
                      {{method_field('PUT')}} {{ csrf_field() }}
              
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Category Name</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ? old('name') : $d->name}}">
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