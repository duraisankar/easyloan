<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Apply Loan <small>Insights</small></h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Apply</li>
        </ol>
    </section><!-- Main content -->

    <script>
        $("#apply").addClass("active");
    </script>
    <section class="content">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">CURRENT LOAN DETAILS</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">


                        <div class="form-group">
                            <label for="exampleInputEmail1">CURRENT LOANS UNDERTAKEN</label> <input class="form-control" id="exampleInputEmail1" name="currentloansundertaken" placeholder="ENTER THE BANK NAME" type="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">TOTAL LOAN AMOUNT</label> <input class="form-control" id="exampleInputEmail1" name="totalloanamount" placeholder="ENTER THE BANK NAME" type="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">LETTER GIVEN FOR REMAINING AMOUNT TO BE PAID BY THE FINANCE SERVICES</label> <input class="form-control" id="exampleInputEmail1" name="remainingamountofloan" placeholder="ENTER THE BANK NAME" type="text">
                        </div>
                        <div class="box-header with-border">
                            <h4 class="box-title">PROPERTY DETAILS</h4>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">REGISTERED ASSET DOCUMENTS WHICH MUST NOT CONTAIN ANY LOAN</label> <input id="exampleInputFile" type="file">
                            <p class="help-block"></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ASSETVALUE</label> <input class="form-control" id="exampleInputEmail1" name="assetvalue" placeholder="ENTER THE BANK NAME" type="text">
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>



                    </div>
                </form>
            </div>
        </div>
    </section>
</div><!-- /.content -->
<!-- /.content-wrapper -->