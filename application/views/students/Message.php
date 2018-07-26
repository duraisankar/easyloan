<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Message
            <small>Create new Message</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">New Message</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <script>
            $("#message").addClass("active");
        </script>
        <div class="row">
            <div class="col-md-12">

                <div class="box box-primary">

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form id="letter" role="form">
                        <div class="box-body">


                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label>To</label>
                                        <select class="form-control select2" name="through[]" data-placeholder="Select the faculty"
                                                style="width: 100%;">

                                            <option value="tcs111">Ritheesh [faculty]</option><option value="tcs112">sheeba joice [faculty]</option><option value="tcs113">M.Joly [faculty]</option><option value="tcs114">Muthukumar [faculty]</option><option value="tcs115">P.latha [faculty]</option><option value="tcs116">Arivalagan [faculty]</option>





                                        </select>
                                    </div>

                                </div>





                            </div>


                            <div class="row">


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Letter Type</label>
                                        <select class="form-control select2" name="type" style="width: 100%;">
                                            <option value="Leave">Quries</option>
                                            <option value="Permission">Issues</option>
                                            <option value="On Duty">Requests</option>
                                            <option value="Special Permission">Updates</option>
                                            <option value="Emergency">Emergency</option>
                                        </select>
                                    </div>

                                </div>

                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Subject</label>
                                <input type="text" class="form-control" name="subject" id="exampleInputEmail1"
                                       placeholder="Enter the subject">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea id="compose-textarea" name="content" class="form-control" style="height: 300px">
<P>BODY OF THE LETTER</P>
                    </textarea>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Submit Message</button>
                        </div>
                    </form>







                </div>
                <!-- /.box -->


            </div>


        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    $(function () {

        $('.select2').select2()
    $("#compose-textarea").wysihtml5();
        });
</script>