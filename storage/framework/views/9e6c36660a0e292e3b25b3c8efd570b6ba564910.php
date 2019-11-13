<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-square"></i> <?php echo trans('block::category.name'); ?> <small> <?php echo trans('app.manage'); ?> <?php echo trans('block::category.names'); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo guard_url('/'); ?>"><i class="fa fa-dashboard"></i> <?php echo trans('app.home'); ?> </a></li>
            <li class="active"><?php echo trans('block::category.names'); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='block-category-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs primary">
                    <li><a href="<?php echo guard_url('block/block'); ?>">Blocks</a></li>
                    <li class="active"><a href="<?php echo guard_url('block/category'); ?>">Categories</a></li>
            </ul>
            <div class="tab-content">
            <table id="block-category-list" class="table table-stripedLitecmsSERTRAITSSER AS USERMODEL data-table">
                <thead  class="list_head">
                    <th><?php echo trans('block::category.label.name'); ?></th>
                    <th><?php echo trans('block::category.label.status'); ?></th>
                </thead>
                <thead  class="search_bar">
                    <th><?php echo Form::text('search[name]')->raw(); ?></th>
                    <th><?php echo Form::select('search[status]')
                            ->options(['' => 'All', 'Hide' => 'Hide','Show' => 'Show'])
                            ->raw(); ?></th>
                </thead>
            </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
$(document).ready(function(){
    app.load('#block-category-entry', '<?php echo guard_url('block/category/0'); ?>');
    oTable = $('#block-category-list').dataTable( {
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '<?php echo guard_url('block/category'); ?>',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $('#block-category-list .search_bar input, #block-category-list .search_bar select').each(
                function(){
                    aoData.push( { 'name' : $(this).attr('name'), 'value' : $(this).val() } );
                }
            );
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
            {data :'name'},
                    {data :'status'},
        ],
        "pageLength": 25
    });

    $('#block-category-list tbody').on( 'click', 'tr', function () {

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');

        var d = $('#block-category-list').DataTable().row( this ).data();

        $('#block-category-entry').load('<?php echo guard_url('block/category'); ?>' + '/' + d.id);
    });

    $("#block-category-list .search_bar input, #block-category-list .search_bar select").on('keyup select', function (e) {
        e.preventDefault();
        console.log(e.keyCode);
        if (e.keyCode == 13 || e.keyCode == 9) {
            oTable.api().draw();
        }
    });
    $("#block-category-list .search_bar select").on('change', function (e) {
        e.preventDefault();
        oTable.api().draw();
    });
});
</script>
<?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/block/admin/category/index.blade.php ENDPATH**/ ?>