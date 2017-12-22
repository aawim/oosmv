@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
<!-- top tiles -->
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Number of Categories</span>
    <div class="count"> {{ $d->count() }} </div>
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

 
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Carousels |<small>Crousels in the system.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                  
                    <a href="{{route('carousel.create')}}"><button type="submit" class="btn btn-success">Add New carousel</button></a>
                     
                  </li>
              
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                           
                          <th>Benner</th>
                          <th>Title One</th>
                          <th>Title Two</th>
                          <th>Title Three</th>
                          <th>Price Tag</th>
                          <th>Is Price Active</th>
                          <th>Is Active</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>







                      @foreach ($d as $count => $i)
                                            <tr>
                                                <th>{{$count+1}}</th>
                                                
                                                <td> 
                                                                                      
                                                <img src="{{url('/').'/'.$i->name}}" style="width:100px; height:15px; width:30px; margin-top:8px;"/>
                                                 
                                 </td>
                                               
                                               <td>{{$i->title_one}}</td>
                                               <td>{{$i->title_two}}</td>
                                               <td>{{$i->title_three}}</td>
                                               <td> 
                                                                                      
                                               <img src="{{url('/').'/'.$i->price_tag}}" style="width:100px; height:15px; width:30px; margin-top:8px;"/>
                                                                
                                 </td>
                                               <td>{{$i->is_price_active}}</td>
                                               
                                                <td>
                                                @if($i->is_active == 1)
                                                  Active
                                                  @else
                                                  Not Active
                                                  @endif
                                                </td>

                                                <td>
                                          
                                                 <a href="{{route('brand.edit', $i->id) }}">Edit</a> 
<a href="#" data-toggle="modal" data-target="#deleteModal{{$count}}"
                                                    data-delete-id="{{$i->id}}" onclick="$('#delete-id').val($(this).data('delete-id'));">Delete</a>
                                                 
                                                </td>
                                              
                                            </tr>







<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="deleteModal{{$count}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <form class="form-horizontal" action="{{route('carousel.destroy',$i->id)}} " method="POST">
  
      {{method_field('DELETE')}}  {!! csrf_field() !!} 

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">Delete</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to permanently delete this item ?</p>
          <input type="text" id="delete-id" name="id" value="0" hidden />
        </div>
        <div class="modal-footer">
          <span id="delete-dialog-link">
            <button type="submit"  class="btn btn-danger">Confirm</button>
          </span>
          
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>

      </form>

    </div>

  </div>
</div>



                                            @endforeach



               


                      </tbody>
                    </table>
                  </div>
                </div>
             





      

    </div>
  </div>
</div>
</div>
@endsection