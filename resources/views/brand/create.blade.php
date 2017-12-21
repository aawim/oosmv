@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
 

<div class="row">

 
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create New Brand |<small>Create brands.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                

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
                  
                      
                      
                      
                      
                      <form class="form-horizontal" action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}

<!-- <select multiple="multiple" name="news[]" id="news" style="width: 250px;">
  <option value="individual">individual</option>
  <option value="business">business</option>

</select> -->
              
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Brand Name</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="name" id="name"   required value="{{ old('name') }}">
                      </div>
                    </div>
              
              
             
                    <div class="form-group">
                       
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Icon</label>
                      <div class="col-xs-9">
                          <input type="file" class="form-control" id="icon" name="icon" required value="{{ old('icon') }}">
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