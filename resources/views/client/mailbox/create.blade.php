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
                    <li class="active">Compose</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <!-- START CONTENT FRAME -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">
                        <div class="page-title">                    
                            <h2><span class="fa fa-pencil"></span> Compose </h2>
                        </div>                         
                        
                        <!-- <div class="pull-right">                                                                                    
                            <button class="btn btn-default"><span class="fa fa-cogs"></span> Settings</button>
                            <button class="btn btn-default"><span class="fa fa-floppy-o"></span> Save</button>
                            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                        </div> -->
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    @include('includes.client.dashboard_frame_left')
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        <div class="block">


                        @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif

                      
                        <form class="form-horizontal" action="{{route('contact.store')}}" method="POST" >
                      {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-md-12">
                                    <!-- <div class="pull-left">
                                        <button class="btn btn-default"><span class="fa fa-trash-o"></span> Delete Draft</button>
                                    </div> -->
                                    <div class="pull-right">
                                        <button class="btn btn-danger"><span class="fa fa-envelope"></span> Send Message</button>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">From:</label>
                                <div class="col-md-10">                                        
                                    <!-- <select class="form-control select">
                                        <option>Dmitry (dmitryivaniuk@domain.com)</option>
                                        <option>Incognito (otheremail@domain.com)</option>                                        
                                    </select> -->
                                    <input type="text" class="form-control " disabled  id="name" name="name" value="{{Auth::user()->name}}"  />
                                    <input type="hidden" class="form-control "disabled id="email" name="email" value="{{Auth::user()->email}}"  />
                                </div>
                            </div>                        
                            <div class="form-group">
                                <label class="col-md-2 control-label">To:</label>
                                <div class="col-md-9">                                        
                                    <input type="text" class="form-control " id="store_id" name="store_id"  value="3" data-placeholder="Store"/>                                
                                </div>
                                <!-- <div class="col-md-1">
                                    <button class="btn btn-link toggle" data-toggle="mail-cc">Cc</button>
                                </div> -->
                            </div>
                            <div class="form-group hidden" id="mail-cc">
                                <label class="col-md-2 control-label">Cc:</label>
                                <div class="col-md-10">                                        
                                <input type="text" class="tagsinput" value="" data-placeholder="add email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Subject:</label>
                                <div class="col-md-10">                                        
                                    <input type="text" class="form-control" id="subject" name="subject" required value=" "/>                                
                                </div>                                
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-md-2 control-label">Attachments:</label>
                                <div class="col-md-10">                                        
                                    <input type="file" class="file" data-filename-placement="inside"/>
                                </div>                                
                            </div> -->
                            <div class="form-group">
                                <div class="col-md-12">                            
                                    <textarea class="summernote_email" id="message" name="message" required>
                                                                          
                                    </textarea>                            
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <!-- <div class="pull-left">
                                        <button class="btn btn-default"><span class="fa fa-trash-o"></span> Delete Draft</button>
                                    </div> -->
                                    <div class="pull-right">
                                        <button class="btn btn-danger"><span class="fa fa-envelope"></span> Send Message</button>
                                    </div>                                    
                                </div>
                            </div>
                        </form>
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
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/jquery/jquery.min.js'}}"></script>
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/jquery/jquery-ui.min.js'}}"></script>
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/bootstrap/bootstrap.min.js'}}"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{url('/').'/client/js/plugins/icheck/icheck.min.js'}}"></script>
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'}}"></script>
        
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/summernote/summernote.js'}}"></script>
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/tagsinput/jquery.tagsinput.min.js'}}"></script>       
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/bootstrap/bootstrap-select.js'}}"></script>        
        <script type="text/javascript" src="{{url('/').'/client/js/plugins/bootstrap/bootstrap-file-input.js'}}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{url('/').'/client/js/settings.js'}}"></script>
        <script type="text/javascript" src="{{url('/').'/client/js/plugins.js'}}"></script>        
        <script type="text/javascript" src="{{url('/').'/client/js/actions.js'}}"></script>     
        
        
        <!-- END TEMPLATE -->


         
    <!-- END SCRIPTS -->         
    </body>
</html>






