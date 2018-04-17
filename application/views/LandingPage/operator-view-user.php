<body>
<section class="content">
        <div class="body">
                <form>
                    <div> <h2 align="center"> Edit User </h2>
                                        <?php
                                      
                                        $kode_id = $id;
                                        //echo $kode_id;
                                       $this->db->select('*');
                                       $this->db->from('member_reguler');
                                       $this->db->where('id', $kode_id);
     
                                        $query = $this->db->get();
                                        //print_r($query);

                                        if($query->num_rows() > 0){
                                              $hasil = $query->result_array();
                                              //print_r($hasil);
                                              //print_r($hasil);
                                              $sess_array = array();
                                                foreach($hasil as $row)
                                                {

                                                    $sess_array = array(
                                                    'id'         => $row['id'],
                                                    'fullname'   => $row['fullname'],
                                                    'id_number'  => $row['id_number'],
                                                    'email'      => $row['email'],
                                                    'peran'      => $row['peran']

                                                    );

                                                                
                                                    //echo "<tr>";
                                                    //echo "<th scope='row'>".$sess_array['id']."</th>";
                                                    //echo "<td>".$sess_array['fullname']."</td>";
                                                    //echo "<td>".$sess_array['id_number']."</td>";
                                                    //echo "<td>".$sess_array['email']."</td>";
                                                    //echo "<td>".$sess_array['peran']."</td>";
                                                    /*echo "<td><a href=".site_url('DashboardOperator/view/').$sess_array[
                                                    'id'].">view</a> | <a href=''>edit </a> | <a href=''> delete </a></td>";*/
                                    //}
                            //}
                    ?>                       

                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="namesurname" value=<?php echo $sess_array['id']; ?> >
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">perm_identity</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="id-number" value=<?php echo $sess_array['fullname']; ?> >
                        </div> 
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" value=<?php echo $sess_array['email']; ?> >
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">perm_identity</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="peran" value=<?php echo $sess_array['peran']; }}?> >
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIMPAN</button>

                </form>
            </div>
</section>