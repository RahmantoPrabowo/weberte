 <?php
    $kode_id = $id;
                                
    $this->db->select('a.id as id, a.name as name, b.fullname as ketua_rt, a.deskripsi, b.id as id_ketua');
    $this->db->from('group_rt as a');
    $this->db->join('member_reguler as b', 'b.id = a.ketua');
    $query = $this->db->get();


    if($query->num_rows() > 0){
            $hasil = $query->result_array();
            $data = array();
            foreach($hasil as $row)
            {

                $data = array(
                'id'         => $row['id'],
                'name'       => $row['name'],
                'ketua_rt'   => $row['ketua_rt'],
                'deskripsi'  => $row['deskripsi'],
                'id_ketua'   => $row['id_ketua']
                );
            }
    }


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
   
             <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Group
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url("OperatorTask/SaveEditGroup");?>" method="POST">
                                <input type="hidden" name="id_group" value="<?php echo $data['id'];?>">
                                <label for="email_address">ERTE</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_group" class="form-control" value="<?php echo $data['name'];?>">
                                    </div>
                                </div>
                                <label for="Ketua">Ketua</label>
                                <select class="form-control show-tick" name="ketua_rt" style="margin-bottom: 10px !important;" name="ketua_rt">
                                        <option value="<?php echo $data['id_ketua'];?>"><?php echo $data['ketua_rt'];?></option>
                                        <?php
                                            foreach ($data_rt as $key) {
                                                echo '<option value="'.$key['id'].'">'.$key['name'].'</option>';
                                            }
                                        ?>
                                        
                                    </select>
                                      
                             
                                <label for="password">Deskripsi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="<?php echo $data['deskripsi'];?>">
                                    </div>
                                </div>



                            
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</section>