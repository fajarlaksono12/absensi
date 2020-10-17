<?php include "./inc/koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id_user='$_GET[id]'");
$r=mysqli_fetch_array($tampil);
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Form Edit Data</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button
                            class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                                class="ti-settings text-white"></i></button>
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Ui Elements</a></li>
                            <li class="active">Notifications</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            
                            <form method="post" class="form-horizontal" >
                             <input type=hidden name="id" value="<?php echo $r['id_user'];?>">
                            
                                <div class="form-group">
                                    <label class="col-md-12">Username </label>
                                    <div class="col-md-12">
                                        <input type="text" name = "username" class="form-control"  value="<?php echo $r['username'];?>"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password </label>
                                    <div class="col-md-12">
                                        <input type="text" name = "password" class="form-control"  value="<?php echo $r['password'];?>"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Level</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name ="level">
                                            <option value="">Pilih Level</option>
                                            <?php
                                            $agama = mysqli_query($koneksi,"SELECT * FROM tb_user");
                                            while ($a=mysqli_fetch_array($level)){
                                                    echo "<option value='$a[level]' selected>$a[level]</option>";
                                           
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                 <tr><td></td><td></td><td><input type="submit" name="submit" value="simpan"></td></tr> 
                            </form>
                            <?php
                            print_r(@$_POST['submit']);
                            if(@$_POST['submit']){
                            $id = $_POST['id'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $level = $_POST['level'];
                            
                            
                                
                             $query =  mysqli_query($koneksi, "UPDATE tb_user SET username='$username', password='$password', level='level'
															 WHERE id_user='$id',");
                            if($query){
                              echo '<script>alert("Berhasil edit data."); document.location="index.php?page=user";</script>';
                            }else{
                            echo "Data gagal disimpan";
                            } 
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                
                <!-- /.row -->
                <!-- .row -->
               
                <!-- /.row -->
               
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>