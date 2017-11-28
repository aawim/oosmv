@extends('layouts.layout')
@section('content')
<div class="right_col" role="main">
<!-- top tiles -->

  


 






<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Number of Products</span>
    <div class="count"> {{ $stores->count() }} </div>
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
 
              <div class=" col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stores |<small>Stores are in the system.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                    <!-- <li><a class=" " href=""><i class="btn btn-round btn-success">Create New Category</i></a> -->
                    <a href="{{route('store.create')}}"><button type="submit" class="btn btn-success">Add New Store</button></a>
                    
                  </li>
              
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Products</th>
                          <th>Logo</th>
                          <th>Type</th>
                          <th>Location</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>User</th>
                      
                          <th>Is Active</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>




                    
                      @foreach ($stores as $count => $store)

                       
                                            <tr>
                                                <th>{{$count+1}} </th>
                                                <td>{{$store->name}} </td>
                                                <td>{{$store->products->count() }} </td>

                                                <td>
                                                    
                                               
                                                <a href="{{url('/').'/'.$store->logo}}" target="_blank" >Image
                                                 
                                      
                                                </a>                                            
                                               
                                                    
                                            
                                            
                                            
                                            </td>
                                                <td>{{$store->type}} </td>
                                                <td>{{$store->location}} </td>
                                                <td>{{$store->contact}} </td>
                                                <td>{{$store->email}} </td>
                                                <td>{{$store->user_id}} </td>
                                           
                                                
                                                <td>
                                                @if($store->is_active == 1)
                                                  Active
                                                  @else
                                                  Not Active
                                                  @endif        
                                            
                                            </td>
                                                <td>
                                                
                                                <a href="{{route('store.edit', $store->id) }}">Edit</a> 
                                                
                              <a href="#" data-toggle="modal" data-target="#deleteModal{{$count}}"
                                data-delete-id="{{$store->id}}" onclick="$('#delete-id').val($(this).data('delete-id'));">Delete</a>
                                                 
                                                </td>
                                              
                                            </tr>







<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="deleteModal{{$count}}" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">

    <form class="form-horizontal" action="{{route('store.destroy',$store->id)}} " method="POST">

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