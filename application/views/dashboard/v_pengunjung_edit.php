<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <ul class="breadcrumbs">
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <span>Edit Visitor Status</span>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <h3>Edit Status Pengunjung</h3>
            </div>
            <a href="<?php echo base_url() . 'dashboard' ?>" class="btn btn-primary mb-4">
                <i class="fas fa-undo"></i>
            </a>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($pengunjung as $p) { ?>
                                <form method="post" action="<?php echo base_url('dashboard/pengunjung_update') ?>">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="hidden" name="id" value="<?php echo $p->pengunjung_id; ?>">
                                        <select class="form-control form-control" name="status">
                                            <option>- Status</option>
                                            <option <?php if ($p->pengunjung_status == "accept") {
                                                        echo "selected='selected'";
                                                    } ?> value="accept">Accept</option>
                                            <option <?php if ($p->pengunjung_status == "waiting list") {
                                                        echo "selected='selected'";
                                                    } ?> value="waiting list">Waiting List</option>
                                        </select>
                                        <?php echo form_error('status'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-rounded" value="Update">
                                    </div>
                                </form>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>