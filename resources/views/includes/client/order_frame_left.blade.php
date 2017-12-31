<div class="content-frame-left">
                        <div class="block">
                            <a href="{{ route('order.create') }}" class="btn btn-danger btn-block btn-lg"><span class="fa fa-edit"></span> COMPOSE</a>
                        </div>
                        <div class="block">
                            <div class="list-group border-bottom">
                                <a href="{{ route('order.index') }}" class="list-group-item active"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success">{{$orders->count()}} </span></a>
                                <!-- <a href="#" class="list-group-item"><span class="fa fa-star"></span> Starred <span class="badge badge-warning">6</span></a> -->
                                <a href="#" class="list-group-item"><span class="fa fa-rocket"></span> Sent <span class="badge badge-success">{{$orders->count()}} </span></a>
                                <!-- <a href="#" class="list-group-item"><span class="fa fa-flag"></span> Flagged</a> -->
                                <a href="#" class="list-group-item"><span class="fa fa-trash-o"></span> Deleted <span class="badge badge-default">1.4k</span></a>                            
                            </div>                        
                        </div>
                        <!-- <div class="block">
                            <h4>Labels</h4>
                            <div class="list-group list-group-simple">                                
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-success"></span> Clients</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-warning"></span> Social</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-danger"></span> Work</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Family</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-primary"></span> Friends</a>
                            </div>
                        </div> -->
                    </div>