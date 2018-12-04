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


<!--             <div class="row">
                
                <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        Add Manufacturer Details here
                                    </div>
                                    <div class="card-body card-block">
                                        <form id="mfg_form" class="form-horizontal">
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <div class="row form-group">
                                                <div class="col-4"><label for="company" class="form-control-label">Manufacturer Name</label></div>
                                                <div class="col-8"><input type="text" id="mfg_name" placeholder="" class="form-control"></div>
                                            </div>
                                            <button type="button" id="add_mfg" style="align:right" class="btn btn-primary btn-sm">Submit</button>

                                        </form>
                                    </div>
   
                                </div>
                </div>

            </div>



            <div class="row">
                
                <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        Add Model Details here
                                    </div>
                                    <div class="card-body card-block">
                                        <form class="form-horizontal">
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                           <div class="row form-group">
                                                <div class="col-4"><label for="company" class="form-control-label">Select Manufacturer </label></div>
                                                <div class="col-8">
                                                    <select class="js-example-basic-single select-mfg" id="mfg_id" name="mfg_select">
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-4"><label for="company" class="form-control-label">Model Name</label></div>
                                                <div class="col-8"><input type="text" id="model_name" placeholder="" class="form-control"></div>
                                            </div>
                                            <button type="button" id="add_model" style="align:right" class="btn btn-primary btn-sm">Submit</button>

                                        </form>
                                    </div>

                                </div>
                </div>

            </div>




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
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-4"><label for="company" class="form-control-label">Add Quantity</label></div>
                                                <div class="col-8"><input type="text" id="add_qty_value" placeholder="" class="form-control"></div>
                                            </div>
                                            <button type="button" id="add_qty_btn" style="align:right" class="btn btn-primary btn-sm">Submit</button>

                                        </form>
                                    </div>

                                </div>
                </div>

            </div>

 -->






            <div class="row">
                        <div class="col-lg-12">
                                <div class="card">
                                                        <div class="card-header">
                                                            View Inventory
                                                        </div>
                                                        <div class="card-body card-block">



                                                        <table id="table_id" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr. No.</th>
                                                                    <th>Manufacturer</th>
                                                                    <th>Model</th>
                                                                    <th>Available</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>

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


            $('#table_id').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    "bFilter": false,
                    "bInfo": false,
                    ajax: {
                            "url": "/view_inventory",
                            "type": "POST",
                            data: {
                                '_token' : '{{csrf_token()}}'
                                }
                        },

                    columns: [
                        { data: 'sr_no', name: 'sr_no' },
                        { data: 'mfg', name: 'mfg' },
                        { data: 'model', name: 'model' },
                        { data: 'count', name: 'count' },
                        { data: 'sold', name: 'sold' }
                    ]
                });




// $('#dataTables-example tbody').on('click', 'td', function () {
//     var tr = $(this).closest('tr');
//     rowIndex = tr.index();
// });





            $("#add_mfg").click(function(){
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/add_mfg',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, mfg:$("#mfg_name").val()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        //$(".writeinfo").append(data.msg); 
                    }
                }); 
            });


            $("#add_model").click(function(){
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/add_model',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, mfg:$("#mfg_id option:selected").val(), model:$("#model_name").val()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        //$(".writeinfo").append(data.msg); 
                    }
                }); 
            });






        });


        jQuery.ajax({
            /* the route pointing to the post function */
            url: '/get_mfg',
            type: 'GET',
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) { 
                jQuery('.select-mfg').select2({
                    data : data,
                    placeholder : 'Select Manufacturer'
                });
            }
        }); 
            



        jQuery.ajax({
            url: '/get_cars',
            type: 'GET',
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) { 
                jQuery('.add_qty_select').select2({
                    data : data,
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
                    //$(".writeinfo").append(data.msg); 
                }
            }); 
        });




         
        jQuery('#table_id').on( 'click', 'tbody tr', function () {
            console.log((jQuery('#table_id').DataTable().row( this ).data()));


             //var $targetTable = jQuery('#table_id').dataTable(); 
            // $targetTable.fnUpdate('fff', '0', '3',false);


            var temp = jQuery('#table_id').DataTable().row( this ).data();
            temp['manufacturer_name'] = 'Tom';
            var idx = jQuery('#table_id').DataTable().row(this).index();
            jQuery('#table_id').DataTable().row(idx).data(temp).invalidate();
            //jQuery('#table_id').dataTable().fnUpdate(temp,idx,undefined,false);


            console.log(temp['count']);



            jQuery.ajax({
                /* the route pointing to the post function */
                url: '/sold_model',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {_token: '{{ csrf_token() }}', model:temp['model_id']},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) { 
                    var avail = data.total_added-data.total_sold;
                    jQuery('#table_id').dataTable().fnUpdate(avail, idx, '3',false);
                }
            }); 

            if(temp['count']=1){
                jQuery('#table_id').DataTable().ajax.reload();
            }
        
        } );












    </script>
</body>
</html>
