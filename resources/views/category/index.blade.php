@extends('layouts.layout')
@section('content')

<div class="col-md-6 col-xs-12">
<div class="x_panel">
  <div class="x_title">
    <h2>Category <small>Manges all category related tasks</small></h2>
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
    
<form class="form-horizontal" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Category Name</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <input type="text" name="name" class="form-control" placeholder="Category Name">
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
        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
          <button type="button" class="btn btn-primary">Cancel</button>
          <button type="reset" class="btn btn-primary">Reset</button>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>






















<row>
<div class="col-md-6 col-xs-12">
<div class="x_panel">
  <div class="x_title">
    <h2>Categories in the system</h2>
     <div class="clearfix"></div>
  </div>
 
 
 
  <div class="x_content">
    

 <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
                                                <th>#</th>
                                                <th class="col-md-4">Name</th>
                                                <th class="col-md-4">Icon</th>
                                                <th>Status</th>
                                                <th>Action</th>
      </tr>
    </thead>
    <tbody>
                                            @foreach ($d as $count => $i)
                                            <tr>
                                                <th>{{$count+1}}</th>
                                                <td>{{$i->name}}</td>
                                                <td> 
                                                                                       

                                                <img src="{{url('/').'/'.$i->icon}}" style="width:100px; height:15px; width:30px; margin-top:8px;"/>
                   
               


                                
                                 </td>

                                                <td>
                                                @if($i->is_active == 1)
                                                  Active
                                                  @else
                                                  Not Active
                                                  @endif
                                                </td>

                                                <td>
                                                
                                                  <a href="{{route('category.edit', $i->id) }}">Edit</a> 
                                              
                                               
                                                  
                                                  <a href="#" data-toggle="modal" data-target="#deleteModal{{$count}}"
                                                    data-delete-id="{{$i->id}}" onclick="$('#delete-id').val($(this).data('delete-id'));">Delete</a>
                                                 
                                                </td>
                                                <td>
                                     
                                                </td>
                                            </tr>







<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="deleteModal{{$count}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <form class="form-horizontal" action="{{route('category.destroy',$i->id)}} " method="POST">
  
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
</row>






@endsection