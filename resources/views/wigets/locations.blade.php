@extends('layouts.jqgrid')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Locations</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>Locations</a>
            </li>
            <li class="active">
                <strong>list</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Locations – list</h5>
                </div>
                <div class="ibox-content">
                    <div class="jqGrid_wrapper">
                        <table id="table_list_2"></table>
                        <div id="pager_list_2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {


        // Examle data for jqGrid

        // Configuration for jqGrid Example 2
        $("#table_list_2").jqGrid({
            url: "/api/get-locations",
            datatype: 'json',
            mtype: 'Get',
            height: 'auto',
            autowidth: true,
            shrinkToFit: true,
            rowNum: 20,
            rowList: [10, 20, 30],
            colNames:['ID','Location','Created on', 'Updated on'],
            colModel:[
                {name: 'id', index: 'id', width: 60, sorttype: "int",sortable: true},
                {name:'name',index:'name', editable: true, width:100,sortable: true},
                {name:'created_at',index:'created_at', editable: true, width:100,sortable: true, formatter: "date", formatoptions: { srcformat: 'd/m/Y', newformat: 'd/m/Y' }},
                {name:'updated_at',index:'updated_at', editable: true, width:100,sortable: true, formatter: "date", formatoptions: { srcformat: 'd/m/Y', newformat: 'd/m/Y' }}
            ],
            pager: "#pager_list_2",
            emptyrecords: 'No Records To Display',
            jsonreader: {
                repeatitems: false,
                Id: "0"
            },
            viewrecords: true,
            sortorder: 'asc',
            sortname: 'name',
            caption: "Locations",
            add: true,
            edit: true,
            addtext: 'Add',
            edittext: 'Edit',
            hidegrid: false,
            loadonce: true,
        });

        // Add selection
        $("#table_list_2").setSelection(4, true);


        // Setup buttons
        $("#table_list_2").jqGrid('navGrid', '#pager_list_2',
            {edit: true, add: true, del: true, search: true},
            {
                width: 600,
                url:'/api/update-locations',
                closeAfterEdit: true,
                onInitializeForm: function () {
                    $('#created_at').datepicker({
                        changeMonth: true,
                        changeYear: true,
                        nextText: "",
                        prevText: ""
                    })
                },
                afterComplete: function (response) {
                    $('#table_list_2').setGridParam({ datatype: 'json', page: 1 }).trigger('reloadGrid');
                    alert(response.responseText)
                },
            },
            {
                width: 600,
                url: '/api/createLocation',
                closeAfterAdd: true,
                onInitializeForm: function () {
                    $('#created_at').datepicker({
                        changeMonth: true,
                        changeYear: true,
                        nextText: "",
                        prevText: ""
                    })
                },
                afterComplete: function (response) {
                    $('#table_list_2').setGridParam({ datatype: 'json', page: 1 }).trigger('reloadGrid');
                    alert(response.responseText)
                },
            },
            {

            },
            {
                width: 600,
                multipleSearch:true,
            },
            {height: 200, reloadAfterSubmit: true}
        );

        // Add responsive to jqGrid
        $(window).bind('resize', function () {
            var width = $('.jqGrid_wrapper').width();
            $('#table_list_1').setGridWidth(width);
            $('#table_list_2').setGridWidth(width);
        });


        setTimeout(function(){
            $('.wrapper-content').removeClass('animated fadeInRight');
        },700);

    });

</script>
@endsection