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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>ID Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                        $this->db->select('*');
                                        $this->db->from('member_reguler');
                                        $this->db->where('status','0');
                                        $query = $this->db->get();

                                        $no=1;
                                        if($query->num_rows() > 0)
                                        {
                                              $hasil = $query->result_array();
                                                foreach($hasil as $row)
                                                {

                                         
                                                    echo "<tr>";
                                                    echo "<th scope='row'>".$no."</th>";
                                                    echo "<td>".$row['fullname']."</td>";
                                                    echo "<td>".$row['email']."</td>";
                                                    echo "<td>".$row['id_number']."</td>";
                                                    echo "<td><a href=".site_url('OperatorTask/viewUser/').$row[
                                                    'id'].">edit</a> | <a href=".site_url('OperatorTask/deleteUser/').$row[
                                                    'id']."> delete </a> | <a href=".site_url('OperatorTask/ApproveUser/').$row[
                                                    'id']."> Approve </a></td>";
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
            
        </div>
    </section>