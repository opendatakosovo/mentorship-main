<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <i class="fa fa-book"></i>
             <?php echo trans('page::page.name'); ?> <small> <?php echo trans('app.manage'); ?> <?php echo trans('page::page.names'); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo guard_url('/'); ?>"><i class="fa fa-dashboard"></i> <?php echo trans('app.home'); ?> </a></li>
            <li class="active"><?php echo trans('page::page.names'); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='page-page-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="<?php echo (request('status') == '')?'active':'';; ?>">
                        <a href="<?php echo guard_url('page/page'); ?>"><?php echo trans('page::page.names'); ?></a>
                    </li>
                    <li class="pull-right">
                    <span class="actions">
                    <?php echo $__env->make('page::admin.page.partial.filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('page::admin.page.partial.column', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </span>
                </li>
            </ul>
            <div class="tab-content">
                <table id="page-page-list" class="table table-striped data-table">
                    <thead class="list_head">
                    <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="page-page-check-all"></th>
                    <th><?php echo trans('page::page.label.name'); ?></th>
                    <th><?php echo trans('page::page.label.title'); ?></th>
                    <th><?php echo trans('page::page.label.url'); ?></th>
                    <th><?php echo trans('page::page.label.heading'); ?></th>
                    <th><?php echo trans('page::page.label.order'); ?></th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
var oSearch = [];
$(document).ready(function(){
    app.load('#page-page-entry', '<?php echo guard_url('page/page/0'); ?>');
    oTable = $('#page-page-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
                return '<input type="checkbox" name="id[]" value="' + data.id + '">';
            }
        }],

        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '<?php echo guard_url('page/page'); ?>',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $.each(oSearch, function(key, val){
                aoData.push( { 'name' : key, 'value' : val } );
            });
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'id'},
            {data :'name'},
            {data :'title'},
            {data :'url'},
            {data :'heading'},
            {data :'order'},
        ],
        "pageLength": 25
    });

    $('#page-page-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#page-page-list').DataTable().row( this ).data();
        $('#page-page-entry').load('<?php echo guard_url('page/page'); ?>' + '/' + d.id);
    });

    $('#page-page-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent');
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#page-page-check-all").on( 'change', function (e) {
        e.preventDefault();
        aIds = [];
        if ($(this).prop('checked')) {
            $("input[name^='id[]']").each(function(){
                $(this).prop('checked',true);
                aIds.push($(this).val());
            });

            return;
        }else{
            $("input[name^='id[]']").prop('checked',false);
        }

    });




    // Add event listener for opening and closing details
    $('#page-page-list tbody').on('click', 'td.details-control', function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });

});
</script><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/page/admin/page/index.blade.php ENDPATH**/ ?>