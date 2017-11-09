@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
<!-- top tiles -->
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Number of Categories</span>
    <div class="count">  </div>
    <span class="count_bottom"><i class="green">4% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
    <div class="count">123.50</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
    <div class="count green">2,500</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
    <div class="count">4,567</div>
    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
    <div class="count">2,315</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
    <div class="count">7,325</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
  </div>
</div>
<!-- /top tiles -->


<br />

<div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subcategory <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                    <!-- <li><a class=" " href=""><i class="btn btn-round btn-success">Create New Category</i></a> -->
                    <a href="{{route('category.create')}}"><button type="submit" class="btn btn-success">Add New Category</button></a>
                    <a href="{{route('subcat.index')}}"><button type="submit" class="btn btn-success"> Sub category view</button></a>
                  </li>
              
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />



                    <form class="form-horizontal" action="{{route('subcat.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}



          

                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="form-control" id="cat" name="cat" required>
                          <option selected value=" ">Select</option>
                          <option selected value=" "  >None</option>
                        @foreach($cat as $c)
                        <option value="{{$c->id}}" {{ (old('c') == $c->name  ) ? "selected" : "" }} required> {{$c->name  }}</option>
                       @endforeach
                 </select>
                   </div>
                </div>


                   
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Category</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Sub Category"  id="name" name="name" required>
                          
                        </div>
                      </div>









<!-- 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div> -->


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
						   <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
   
      

    </div>
  </div>
</div>
</div>
@endsection