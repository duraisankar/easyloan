
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">


    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href=""><b>Easy</b>Loan</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <?php echo validation_errors(); ?>

        <?php echo form_open('auth/Register/validate'); ?>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="name" placeholder="Full name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="phone" class="form-control" name="phone" placeholder="Phone">
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" name="email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>


            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="rpassword" class="form-control" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>


        <div class="form-group">

            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="dob" class="form-control pull-right" id="datepicker">
            </div>
            <!-- /.input group -->
        </div>
        <div class="form-group">
            <select name="role" class="form-group select2" data-placeholder="Select your Role" style="width:100%;height: 34px;">
                <option value="1">Student</option>
                <option value="2">Zonal Officer</option>
                <option value="3">Bank Manager</option>
                <option value="4">Engineer</option>
                <option value="5">Lawyer</option>


            </select>
        </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        <?php echo form_close(); ?>



        <a href="login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('.select2').select2()

//Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });


</script>
</body>
</html>
