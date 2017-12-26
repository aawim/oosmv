@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
 

<div class="row">

 
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Store |<small>Change store.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                                

                    <a href="{{route('store.index')}}"><button type="submit" class="btn btn-success">View Store</button></a>
                   
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
                  
                      <form class="form-horizontal" action="{{route('store.update',$d->id)}}" method="POST" enctype="multipart/form-data">
                      {{method_field('PUT')}} {{ csrf_field() }}
              
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Store Name</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="name" id="name"   required value="{{ old('name') ? old('name') : $d->name}}">
                      </div>
                    </div>
              

 
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                      <div class="col-xs-9">
                          <input type="file" class="form-control" id="logo" name="logo"  >
                      </div>
                  </div>



<!-- 
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="form-control" id="type" name="type" required>
                    <option value="" selected required > Select  </option>
                    <option value="1"> Whole Sale  </option>
                    <option value="2"> Retail  </option>
                    <option value="3"> Wholesale and Retail  </option>
                    </select>
                      </div>
                    </div>
  -->






                    <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
             <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" id="type" name="type">
                                    <option value="" selected >Select </option>
                                    @foreach($types as $type)
                                       
                                    
                                    <option value="{{ $type->id }} " 
                                         @if(old('type') != null)
                                 {{ (old('type') == $type) ? "selected" : "" }}
                             @else
                                 {{ ($d->type == $type->id) ? "selected" : "" }}
                             @endif
                             >{{$type->name}}</option>
                                    
                                   
                                    @endforeach
                                    </select>
                               </div>
                          </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Location</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="location" id="location"     value="{{ old('location') ? old('location') : $d->location}}">
                      </div>
                    </div>
 
 
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="contact" id="contact"   required value="{{ old('contact') ? old('contact') : $d->contact}}">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="email" class="form-control" name="email" id="email"   required value="{{ old('email') ? old('email') : $d->email}}">
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