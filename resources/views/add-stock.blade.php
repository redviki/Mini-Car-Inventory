<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mini Car Inventory Test</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />

    


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />



   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->

     @include('left-panel')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('header')
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">




            <div class="row">
                
                <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        Add Stock
                                    </div>
                                    <div class="card-body card-block">
                                        <form class="form-horizontal">
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                           <div class="row form-group">
                                                <div class="col-4"><label for="company" class="form-control-label">Select Car </label></div>
                                                <div class="col-8">
                                                    <select class="js-example-basic-single add_qty_select" id="add_qty_id" name="add_qty_select">
                                                        <option></option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-4"><label for="company" class="form-control-label">Add Quantity</label></div>
                                                <div class="col-8"><input type="text" id="add_qty_value" placeholder="" class="form-control"></div>
                                            </div>
                                            <button type="button" id="add_qty_btn" style="align:right" class="btn btn-primary btn-sm">Submit</button>

                                        </form>


                                        <div style="display: none" id="sdivmsg" class="sufee-alert alert with-close alert-primary alert-dismissible">
                                            <span class="badge badge-pill badge-primary">Success</span>
                                            Successfully Submitted
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <div style="display: none" id="edivmsg" class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                            <span class="badge badge-pill badge-danger">Error</span>
                                            
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>


                                    </div>

                                </div>
                </div>

            </div>








            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->

    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="js/main.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="js/init/fullcalendar-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>


    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            var editor;

            $('.select-mfg').select2();

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');



        jQuery.ajax({
            url: '/get_cars',
            type: 'GET',
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) { 
                jQuery('.add_qty_select').select2({
                    data : data,
                    width: '100%',
                    placeholder : 'Select Car'
                });
            }
        });


        jQuery("#add_qty_btn").click(function(){
            jQuery.ajax({
                /* the route pointing to the post function */
                url: '/add_qty',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {_token: '{{csrf_token()}}', model:jQuery("#add_qty_id option:selected").val(), qty:jQuery("#add_qty_value").val()},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) { 

                        jQuery("#edivmsg").hide();
                        jQuery("#sdivmsg").show();

                        jQuery("#add_qty_value").val('');
                        jQuery("#add_qty_id").val('').trigger('change');

                        jQuery("#sdivmsg").hide(3000);

                },
                error: function(err){

                    jQuery("#edivmsg").show();
                    $("#error_block").html(err['errors']['mfg_name'][0]);
                }

            }); 
        });


    });



         
    




    </script>
</body>
</html>
