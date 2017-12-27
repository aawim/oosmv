<!DOCTYPE html>
<html lang="en">
    <head>        
    @include('includes.client.dashboard_top')                                   
    </head>
    <body>
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
                                    <h3 class="panel-title">John Doe <small>johndoe@domain.com</small></h3>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                                    <!-- <button class="btn btn-default"><span class="fa fa-warning"></span></button> -->
                                    <a href="{{route('mail.destroy',5)}}" class="btn btn-default"><span class="fa fa-trash-o"></span></a>                                    
                                </div>
                            </div>
                            <div class="panel-body">
                                <h3>{{$mails[0]['subject']}} <small class="pull-right text-muted"><span class="fa fa-clock-o"></span> Today, Sep 18, 14:33</small></h3>
                                <p> {{$mails[0]['message']}} </p>
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

                                
                                <form class="form-horizontal" action="{{route('reply.store')}}" method="POST" >
                                {{ csrf_field() }}
                                <div class="form-group push-up-20">
                                    <label>Quick Reply</label>
                                    <textarea class="form-control summernote_lite" rows="3" id="message" name="message" placeholder="Click to get editor"></textarea>
                                </div>
                            </div>

                            <input type="hidden" class="form-control "  id="mail_id" name="mail_id" value="{{$mails[0]['id']}}"  />
                            <!-- <div class="panel-body panel-body-table">
                                <h6>Attachments</h6>
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th width="50">type</th><th>name</th><th width="100">size</th>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-primary">HTML</span></td><td><a href="#">index.html</a></td><td>54 Kb</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-success">CSS</span></td><td><a href="#">stylesheet.css</a></td><td>15 Kb</td>
                                    </tr>                                    
                                    <tr>
                                        <td><span class="label label-danger">JS</span></td><td><a href="#">actions.js</a></td><td>3 Kb</td>
                                    </tr>                                    
                                </table>
                            </div> -->
                            <div class="panel-footer">
                                <button class="btn btn-success pull-right"><span class="fa fa-mail-reply"></span> Post Reply</button>
                            </div>


                            </form>
                        </div>
                    </div>









       <!-- START CONTENT FRAME BODY -->
       <div class="content-frame-body">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <img src="assets/images/users/user2.jpg" class="panel-title-image" alt="John Doe"/>
                                    <h3 class="panel-title">John Doe <small>johndoe@domain.com</small></h3>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                                    <button class="btn btn-default"><span class="fa fa-warning"></span></button>
                                    <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>                                    
                                </div>
                            </div>
                            <div class="panel-body">
                                <h3>Re: Product development <small class="pull-right text-muted"><span class="fa fa-clock-o"></span> Today, Sep 18, 14:33</small></h3>
                                <p>Hello Dmitry,</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ligula risus, viverra sit amet purus id, ullamcorper venenatis leo. Ut vitae semper neque. Nunc vel lacus vel erat sodales ultricies sed sed massa. Duis non elementum velit. Nunc quis molestie dui. Nullam ullamcorper lectus in mattis volutpat. Nunc egestas felis sit amet ultrices euismod. Donec lacinia neque vel quam pharetra, non dignissim arcu semper. Donec ultricies, neque ut vehicula ultrices, ligula velit sodales purus, eget eleifend libero risus sed turpis. Fusce hendrerit vel dui ut pulvinar. Ut sed tristique ante, sed egestas turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p>Fusce sit amet dui at nunc laoreet facilisis. Proin consequat orci sollicitudin sem cursus, quis vehicula eros ultrices. Cras fermentum justo at nibh tincidunt, consectetur elementum est aliquam.</p>
                                <p>Nam dignissim convallis nulla, vitae porta purus fringilla ac. Praesent consectetur ex eu dui efficitur sollicitudin. Mauris libero est, aliquam a diam maximus, dignissim laoreet lacus.</p>
                                <p>Nulla ac nisi sodales, auctor dui et, consequat turpis. Cras dolor turpis, sagittis vel elit in, varius elementum arcu. Mauris aliquet lorem ac enim blandit, nec consequat tortor auctor. Sed eget nunc at justo congue mollis eget a urna. Phasellus in mauris quis tortor porta tristique at a risus.</p>
                                <p class="text-muted"><strong>Best Regards<br/>John Doe</strong></p>      
                                
                                <div class="form-group push-up-20">
                                    <label>Quick Reply</label>
                                    <textarea class="form-control summernote_lite" rows="3" placeholder="Click to get editor"></textarea>
                                </div>
                            </div>
                            <div class="panel-body panel-body-table">
                                <h6>Attachments</h6>
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th width="50">type</th><th>name</th><th width="100">size</th>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-primary">HTML</span></td><td><a href="#">index.html</a></td><td>54 Kb</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-success">CSS</span></td><td><a href="#">stylesheet.css</a></td><td>15 Kb</td>
                                    </tr>                                    
                                    <tr>
                                        <td><span class="label label-danger">JS</span></td><td><a href="#">actions.js</a></td><td>3 Kb</td>
                                    </tr>                                    
                                </table>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-success pull-right"><span class="fa fa-mail-reply"></span> Post Reply</button>
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






