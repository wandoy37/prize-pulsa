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
                        <span>Visitor information</span>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Data Information Management</h3>
                    </div>
                    <div class="col-sm-6">
                        <?php
                        if (isset($_GET['alert'])) {
                            if ($_GET['alert'] == "berhasil_update") {
                                echo "<div class='alert alert-success'>Status data telah di update</div>";
                            } else if ($_GET['alert'] == "gagal_update") {
                                echo "<div class='alert alert-danger'>Status data gagal di update</div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" width="5%">No</th>
                                <th scope="col">Nomor Telpon</th>
                                <th scope="col">Nomor Handphone</th>
                                <th scope="col">Status</th>
                                <th scope="col" width="10%">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pengunjung as $p) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $p->pengunjung_no_telpon; ?></td>
                                    <td><?php echo $p->pengunjung_no_handphone; ?></td>
                                    <td class="text-center">
                                        <?php
                                        if ($p->pengunjung_status == "accept") {
                                            echo "<span class='label text-success'>Accept</span>";
                                        } else {
                                            echo "<span class='label text-warning'>Waiting List</span>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url() . 'dashboard/pengunjung_edit/' . $p->pengunjung_id; ?>" class="btn btn-primary btn-sm"> <i class="fas fa-pencil-alt"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>