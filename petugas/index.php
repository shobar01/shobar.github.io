<!-------/awal session admin untuk melihat hak akses-->
<?php
session_start();
include "../inc/koneksi.php";
if (@$_SESSION['username']){
 if  (@$_SESSION['id_level']=="Admin"){header("location:../admin");}
  else {
    if (@$_SESSION['id_level']=="Kasir"){header("location:../kasir");}
    else if (@$_SESSION['id_level']=="Dokter"){header("location:../dokter");}
    else if (@$_SESSION['id_level']=="Pendaftar"){header("location:../Pendaftar");}
  }

}
else {
  header("location:../login/login.php");
}

  ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap3.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom1.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                       <strong> <h2><font color="white">APLIKASI POLIKLINIK</strong></font></h2>

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                 <h3> <a href="../login/logout.php" style="color:#fff;"><font color="white"><strong>LOGOUT</strong></font></h3></a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li>
                        <a href="index.php" ><font color="black">Dashboard </font></a>
                    </li>
                   

                    <li>
                        <a href="pegawai.php?page=pegawai"></i><font color="black">Verifikasi dan Validasi </font></a>
                    </li>
                    <li>
                        <a href="jadwal.php?page=jadwal"><font color="black">Generate Laporan </font></a>
                    </li>


                    
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>PETUGAS DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Selamat Datang,  </strong> 
                             <br>
                             <h4><strong>Petugas Shobar Nuryana</strong></h4>
                           </br>
                        </div>
                       
                    </div>
                    </div>

                    <?php
                     $page=isset($_GET['page']) ? $_GET['page'] : null;
                            $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : null;

                            if ($page=="login") {
                                if($aksi=="") {
                                    include "tampil.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah.php";
                                }elseif ($aksi=="edit"){
                                    include "edit.php";
                                }elseif ($aksi=="delete"){
                                    include "delete.php";
                                }elseif ($aksi=="proses"){
                                    include "pages/buku/proses_edit.php";
                                }
                            }elseif ($page=="jadwal"){
                                if($aksi==""){
                                    include "tampil_jadwal.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_jadwal.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_jadwal.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_jadwal.php";
                                }
                            }elseif ($page=="poli"){
                                if($aksi==""){
                                    include "tampil_poli.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_poli.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_poli.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_poli.php";
                                }
                            }elseif ($page=="dokter"){
                                if($aksi==""){
                                    include "tampil_dokter.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_dokter.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_dokter.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_dokter.php";
                                }
                            }elseif ($page=="obat"){
                                if($aksi==""){
                                    include "tampil_obat.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_obat.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_obat.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_obat.php";
                                }
                              }elseif ($page=="biaya"){
                                if($aksi==""){
                                    include "tampil_biaya.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_biaya.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_biaya.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_biaya.php";
                                }

                              }


                        ?>
                  <!-- /. ROW  --> 
                          
                  <!-- /. ROW  -->    
                
                  <!-- /. ROW  -->  
                <div class="row text-center pad-top">
                   
                 
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pegawai.php?page=pegawai" >
 <font color="black"><i class="fa fa-user fa-5x"></font></i>
                      <h4><font color="black">Data Pegawai</font></h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" >
 <font color="black"><i class="fa fa-users fa-5x"></font></i>
                      <h4><font color="black">Data Jadwal Praktik</font></h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" >
 <font color="black"><i class="fa fa-circle-o-notch fa-5x"></font></i>
                      <h4><font color="black">Data Dokter </font></h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" >
 <font color="black"><i class="fa fa-clipboard fa-5x"></font></i>
                      <h4><font color="black">Data Poliklinik</font></h4>
                      </a>
                      </div>
                     
                     
                  </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" >
 <font color="black"><i class="fa fa-circle-o-notch fa-5x"></font></i>
                      <h4><font color="black">Data Jadwal Praktik</font></h4>
                      </a>
                      </div>
                     
                     
                  </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" >
 <font color="black"><i class="fa fa-rocket fa-5x"></font></i>
                      <h4><font color="black">Jenis Biaya</font></h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>
                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                        
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2019 yourdomain.com | Design by: ShobarN <a href="http://binarytheme.com" style="color:#212529;" target="_blank">www.binarytheme.com</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
