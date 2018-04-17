<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1><b><center>DAFTAR USER</center></b></h1>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Group</th>
                                        <th>Ketua RT</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                        $this->db->select('a.id as id, a.name as name, b.fullname as ketua_rt, a.deskripsi');
                                        $this->db->from('group_rt as a');
                                        $this->db->join('member_reguler as b', 'b.id = a.ketua');
                                        $query = $this->db->get();

                                        $no=1;
                                        if($query->num_rows() > 0)
                                        {
                                              $hasil = $query->result_array();
                                              //print_r($hasil);
                                              //print_r($hasil);
                                              $sess_array = array();
                                                foreach($hasil as $row)
                                                {

                                         
                                                    echo "<tr>";
                                                    echo "<th scope='row'>".$no."</th>";
                                                    echo "<td>".$row['name']."</td>";
                                                    echo "<td>".$row['ketua_rt']."</td>";
                                                    echo "<td>".$row['deskripsi']."</td>";
                                                    echo "<td><a href=".site_url('OperatorTask/view/').$row[
                                                    'id'].">edit</a> | <a href=".site_url('OperatorTask/deleteGroup/').$row[
                                                    'id']."> delete </a></td>";
                                                    $no++;
                                                }

                                		}
                                		else
                                		{
                                			echo "<tr>Data Kosong</tr>";
                                		}

                           					 ?>

                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <div align="right">
                <h1><b><a href="<?php echo site_url('OperatorTask/AddNew'); ?>">+ Group Baru</a></b> </h1>
            </div>
        </div>
    </section>