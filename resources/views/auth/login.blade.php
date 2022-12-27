<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>{{ config('app.name') }}</title>
        <meta name="description" content="Kenny is a Dashboard & Admin Site Responsive Template by hencework." />
        <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
        <meta name="author" content="hencework"/>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        
        <!-- vector map CSS -->
        <link href="{{ url('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        
        
        
        <!-- Custom CSS -->
        <link href="{{ url('dist/css/style.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!--Preloader-->
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!--/Preloader-->
        
        <div class="wrapper pa-0">
        
            <!-- Main Content -->
            <div class="page-wrapper pa-0 ma-0">
                <div class="container-fluid" style="background-image: url('dist/img/background.jpg');background-repeat: no-repeat;background-size: 100% 100%;">
                    <!-- Row -->
                    <div class="table-struct full-width full-height">
                        <div class="table-cell vertical-align-middle">
                            <div class="auth-form  ml-auto mr-auto no-float">
                                <div class="panel panel-default card-view mb-0">
                                    <div class="panel-heading">
                                        <div class="pull-left">
                                            <h6 class="panel-title txt-dark">Sign In {{ config('app.name') }}</h6>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-wrap">
                                                        <form method="POST" action="{{ route('login') }}">
                                                            @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputEmail_2">{{ __('Username') }}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" required="" id="exampleInputEmail_2" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Enter username">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputpwd_2">{{ __('Password') }}</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" required="" id="exampleInputpwd_2" placeholder="Enter Password" name="password" required autocomplete="current-password">
                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block">{{ __('Login') }}</button>
                                    </div>
                                                        </form>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->   
                </div>
                
            </div>
            <!-- /Main Content -->
        
        </div>
        <!-- /#wrapper -->
        
        <!-- JavaScript -->
        
        <!-- jQuery -->
        <script src="{{ url('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ url('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="{{ url('dist/js/jquery.slimscroll.js') }}"></script>
    
    <!-- Fancy Dropdown JS -->
    <script src="{{ url('dist/js/dropdown-bootstrap-extended.js') }}"></script>
        
        <!-- Init JavaScript -->
        <script src="{{ url('dist/js/init.js') }}"></script>
    </body>
</html>
