@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
 

<div class="row">

 
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create New Brand |<small>Create brands.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                

                    <a href="{{route('carousel.index')}}"><button type="submit" class="btn btn-success">View Carousel</button></a>
                     
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
                  
                      
                      
                      
                      
                      <form class="form-horizontal" action="{{route('carousel.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}


              
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Title One</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="title_one" id="title_one"   required value="{{ old('title_one') }}">
                      </div>
                    </div>
              
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Title Two</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="title_two" id="title_two"   required value="{{ old('title_two') }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Title Three</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="title_three" id="title_three"   required value="{{ old('title_three') }}">
                      </div>
                    </div>

          
                    <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                      <div class="col-xs-9">
                          <input type="file" class="form-control" id="icon" name="icon" required value="{{ old('icon') }}">
                      </div>
                  </div> 
              
                  <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Price Tag</label>
                      <div class="col-xs-9">
                          <input type="file" class="form-control" id="priceTag" name="priceTag" required value="{{ old('priceTag') }}">
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