@extends('layouts.layout')
@section('content')

<div class="container">
    <row>
        <div class="col-md-12">




            <div class="x_panel">
                <div class="x_title">
                    <h3>Update Agency</h3>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">


                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif




                    <form class="form-horizontal" action="{{route('category.update',$d->id)}}" method="POST" enctype="multipart/form-data">
                        {{method_field('PUT')}} {{ csrf_field() }}

 



                        <div class="form-group">
                            <label for="name" class="control-label col-xs-2">Name</label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ? old('name') : $d->name}}">

                            </div>
                        </div>

 


                                    <div class="form-group">
                    <label for="url" class="control-label col-xs-2">Icon</label>
                    <div class="col-xs-9">
                        <input type="file" class="form-control" id="icon" name="icon"  value="{{ old('icon') }}">
                    </div>
                </div>


                        <div class="form-group">
                            <label for="url" class="control-label col-xs-2">Status</label>
                            <div class="col-xs-10">
                                <select class="form-control" id="is_active" name="is_active" >
                                    <option value="1" {{ $d->is_active ? "Selected" : "" }}>Active</option>
                                    <option value="0" {{ !$d->is_active ? "Selected" : "" }}>InActive</option>
                                </select>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>


    </row>

</div>



@endsection