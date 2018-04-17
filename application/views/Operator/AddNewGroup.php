<?php
$this->db->select('id,fullname');
    $this->db->from('member_reguler');
    $this->db->where('role','4');
    $query = $this->db->get();



     if($query->num_rows() > 0){
            $hasil = $query->result_array();
            $data_rt = array();
            foreach($hasil as $row)
            {

                $data_rt[]= array(
                'id'         => $row['id'],
                'name'       => $row['fullname']
                );
            }
    }

?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TAMBAH GROUP BARU</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <h2 class="card-inside-title">Data Group</h2>
                            <form action="<?php echo site_url("OperatorTask/SaveNewGroup");?>" method="POST">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_group" class="form-control" placeholder="Nama Group" />
                                        </div>
                                    </div>
                                
                                    <select class="form-control show-tick" style="margin-bottom: 10px !important;" name="ketua_rt">
                                        <option value="placeholder">Ketua</option>
                                        <?php
                                            foreach ($data_rt as $key) {
                                                echo '<option value="'.$key['id'].'">'.$key['name'].'</option>';
                                            }
                                        ?>
                                        
                                    </select>

                                    <div class="form-group" style="margin-top: 10px !important;">
                                        <div class="form-line">
                                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" />
                                        </div>
                                    </div>


                                    <div class="form-group" style="margin-top: 10px !important;">
                                       <button class="btn btn-primary" type="submit" >Simpan</button>
                                    </div>
                              
                                </div>
                            </div>

                            </form>


                      
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->

           
    </div>
</section>