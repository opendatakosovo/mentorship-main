                    <ul class="nav nav-tabs">
                        <li class=""><a href="<?php echo guard_url('masters/'. $type); ?>"><?php echo trans('master::master.names'); ?></a></li>
                    </ul>
                    <div class="tab-content">
                        <table id="masters-list" class="table table-striped data-table">
                            <thead class="list_head">
                                <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="masters-check-all"></th>
                                <th><?php echo trans('master::master.label.name'); ?></th>
                                <th><?php echo trans('master::master.label.slug'); ?></th>
                            </thead>
                        </table>
                    </div>
<?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/master/admin/master/partial/list/default.blade.php ENDPATH**/ ?>