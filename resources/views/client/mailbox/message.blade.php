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
                    <li><a href="#">Mailbox</a></li>
                    <li class="active">Message</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <!-- START CONTENT FRAME -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-file-text"></span> Message</h2>
                        </div>                                                                                
                       
                        <div class="pull-right">                                                                                    
                            <button class="btn btn-default"><span class="fa fa-print"></span> Print</button>
                            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                        </div>                        
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    @include('includes.client.dashboard_frame_left')
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <img src="{{url('/').'/client/assets/images/users/user2.jpg'}}" class="panel-title-image" alt="John Doe"/>
                                    <h3 class="panel-title">{{$mail->name}} <small>( {{$mail->email}} )</small></h3>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                                    <!-- <button class="btn btn-default"><span class="fa fa-warning"></span></button> -->
                                    <!-- <a href="{{$mail->id}}" class="btn btn-default"><span class="fa fa-trash-o"></span></a>   -->
                                    
                                    
                                    <a href="#" data-toggle="modal" data-target="#deleteModal" class="btn btn-default"
                                data-delete-id="{{$mail->id}}" onclick="$('#delete-id').val($(this).data('delete-id'));">
                                <span class="fa fa-trash-o"></span>
                            </a>


                                </div>
                            </div>
                            <div class="panel-body">
                                <h3>{{$mail->subject}} <small class="pull-right text-muted"><span class="fa fa-clock-o"></span> Today, Sep 18, 14:33</small></h3>
                                <p> {{$mail->message}} </p>
                                <!-- <p class="text-muted"><strong>Best Regards<br/>John Doe</strong></p>       -->
                     
                     
                                @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif

                      @if($replies->count()>0)
                            <hr>
                      <h3>Replies</h3>
                       
                        @foreach($replies as $count => $reply)
                        <h4>{{$reply->created_at}}</h4>
                        <p>{{$reply->message}}</p>

                        @endforeach
                       
                    @endif




                               
                                <div class="form-group push-up-20">

                                <form class="form-horizontal" action="{{route('reply.store')}}" method="POST" >
                                {{ csrf_field() }}
                                    <label>Quick Reply</label>
                                    <textarea class="form-control summernote_lite" rows="3" id="message" name="message" placeholder="Click to get editor"></textarea>
                                </div>
                            </div>

                            <input type="hidden" class="form-control "  id="mail_id" name="mail_id" value="{{$mail->id}}"  />
                           
                            
                            <div class="panel-footer">
                                <button class="btn btn-success pull-right"><span class="fa fa-mail-reply"></span> Post Reply</button>
                            </div>


                            </form>
                        </div>
                    </div>





 




 
                </div>
                <!-- END CONTENT FRAME -->                    
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <!-- <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
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
        </div> -->
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->       
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/jquery/jquery.min.js'}}"></script>
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/jquery/jquery-ui.min.js'}}"></script>
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/bootstrap/bootstrap.min.js'}}"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{url('/').'/client/js/plugins/icheck/icheck.min.js'}}"></script>
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'}}"></script>
        
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/summernote/summernote.js'}}"></script>    
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{url('/').'/client/js/settings.js'}}"></script>
        
        <script type="text/javascript" src="{{url('/').'/client/js/plugins.js'}}"></script>        
        <script type="text/javascript" src="{{url('/').'/client/js/actions.js'}}"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>




 
<!-- Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">

    <form class="form-horizontal" action="{{route('mail.destroy',$mail->id)}} " method="POST">

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