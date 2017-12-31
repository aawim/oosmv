<!DOCTYPE html>
<html lang="en">
    <head>        
    @include('includes.client.dashboard_top')   
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>                                
    </head>
    <body>
    {!! Toastr::message() !!}
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
        
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                @include('includes.client.dashboard_navigation')
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

           
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
             
               <!-- START X-NAVIGATION VERTICAL -->
                @include('includes.client.dashboard_top_vertical_navigation')
                <!-- END X-NAVIGATION VERTICAL -->
                                  
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb push-down-0">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Clients</a></li>
                    <li class="active">Order</li>
                </ul>
                <!-- END BREADCRUMB -->                
                                
                <!-- START CONTENT FRAME -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-inbox"></span> Order <small></small></h2>
                        </div>                                                                                
                        
                        <!-- <div class="pull-right">                            
                            <button class="btn btn-default"><span class="fa fa-cogs"></span> Settings</button>
                            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                        </div>                         -->
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
            @include('includes.client.order_frame_left')
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body" >
                        
                        <div class="panel panel-default" style="width:95%;">
                            <div class="panel-heading">
                              <!--   <label class="check mail-checkall">
                                    <input type="checkbox" class="icheckbox"/>
                                </label>
                                <div class="btn-group">
                                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                                    <button class="btn btn-default"><span class="fa fa-mail-reply-all"></span></button>
                                    <button class="btn btn-default"><span class="fa fa-mail-forward"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-default"><span class="fa fa-star"></span></button>                                    
                                    <button class="btn btn-default"><span class="fa fa-flag"></span></button>
                                </div>                                
                                <button class="btn btn-default"><span class="fa fa-warning"></span></button>
                                <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>                                                                    
                                <div class="pull-right" style="width: 150px;">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                                        <input class="form-control datepicker" type="text" data-orientation="left"/>                                    
                                    </div>
                                </div> -->
                            </div>
                            <div class="panel-body mail">
                                
                           
                                
                          
                                




                            @foreach($orders->where('store_id',1)->where('status',1) as $count2 => $order)
                             
                                @if($order->is_active === 1)
                                <div class="mail-item mail-unread mail-danger"> 
                               
                                    @else
                                    <div class="mail-item mail-success">
                                    @endif

                                    <!-- <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div> -->


                                    @foreach($stores->where('user_id',$order->user_id) as $count => $store)
                                     
                                 
                                         
                                    <div class="mail-user">{{$count2+1}}</div>                                    
                                    <a href="{{route('order.show',$order->id) }}" class="mail-text">{{$store->name}}   </a>  
                                    <div class="mail-date">{{$order->created_at}}</div>
                                       
                        
                                    @endforeach 

                                </div>
                              
                             @endforeach   
                                 
                                
                            
                                
                                
                                 
                                                
                                
                            </div>
                            <div class="panel-footer">                                
                                <!-- <div class="btn-group">
                                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                                    <button class="btn btn-default"><span class="fa fa-mail-reply-all"></span></button>
                                    <button class="btn btn-default"><span class="fa fa-mail-forward"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-default"><span class="fa fa-star"></span></button>                                    
                                    <button class="btn btn-default"><span class="fa fa-flag"></span></button>
                                </div>
                                
                                <button class="btn btn-default"><span class="fa fa-warning"></span></button>
                                <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>                                     -->
                                
                                <ul class="pagination pagination-sm pull-right">
                                    <li class="disabled"><a href="#">«</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>                                    
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>                            
                        </div>
                        
                    </div>
                    <!-- END CONTENT FRAME BODY -->




                </div>
                <!-- END CONTENT FRAME -->
                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->              
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>     
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






