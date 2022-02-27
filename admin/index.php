<!-------/awal session admin untuk melihat hak akses-->
<?php
session_start();
include "../inc/koneksi.php";
if (@$_SESSION['username']){
 if  (@$_SESSION['id_level']=="Admin"){header("location:../admin");}
  else {
    if (@$_SESSION['id_level']=="Kasir"){header("location:../kasir");}
    else if (@$_SESSION['id_level']==""){header("location:../dokter");}
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
    <link href="assets/css/bootstrap2.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom2.css" rel="stylesheet" />
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
                       <strong> <h2><font color="black">APLIKASI TICKETING</strong></font></h2>

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                 <h3> <a href="../login/logout.php" style="color:#fff;"><font color="black"><strong>LOGOUT</strong></font></h3></a>  

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
                        <a href="?page=level"><font color="black">Data Level </font></a>
                    </li>
                    <li>
                        <a href="?page=pemesanan"><font color="black">Data Pemesanan</font></a>
                    </li>
                    <li>
                        <a href="?page=penumpang"><font color="black">Data Penumpang</font></a>
                    </li>
                    <li>
                        <a href="?page=petugas"><font color="black">Data Petugas</font></a>
                    </li>
                    <li>
                        <a href="?page=rute"><font color="black">Data Rute</font></a>
                    </li>
                    <li>
                        <a href="?page=transportasi"><font color="black">Data Transportasi</font></a>
                    </li>
                    <li>
                        <a href="?page=type"><font color="black">Data Type Transportasi</font></a>
                    </li>
                    <li>
                        <a href="?page=bp"><font color="black">Back and Restore</font></a>
                    </li>


                   
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <font color="black"><h2>ADMIN DASHBOARD</font></h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Selamat Datang,  </strong> 
                             <br>
                             <h4><strong><b>Admin Shobar Nuryana</b></strong></h4>
                           </br>
                        </div>
                       
                    </div>
                    </div>

                    <?php
                     $page=isset($_GET['page']) ? $_GET['page'] : null;
                            $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : null;

                            if ($page=="level") {
                                if($aksi=="") {
                                    include "tampil_level.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_level.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_level.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_level.php";
                                }elseif ($aksi=="proses"){
                                    include "pages/buku/proses_edit.php";
                                }
                            }elseif ($page=="pemesanan"){
                                if($aksi==""){
                                    include "tampil_pemesanan.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_pemesanan.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_pemesanan.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_pemesanan.php";
                                }
                            }elseif ($page=="penumpang"){
                                if($aksi==""){
                                    include "tampil_penumpang.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_penumpang.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_penumpang.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_penumpang.php";
                                }
                            }elseif ($page=="rute"){
                                if($aksi==""){
                                    include "tampil_rute.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_rute.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_rute.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_rute.php";
                                }
                            }elseif ($page=="transportasi"){
                                if($aksi==""){
                                    include "tampil_transportasi.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_transportasi.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_transportasi.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_transportasi.php";
                                }
                              }elseif ($page=="petugas"){
                                if($aksi==""){
                                    include "tampil_petugas.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_petugas.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_petugas.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_petugas.php";
                                }

                              }elseif ($page=="type"){
                                if($aksi==""){
                                    include "tampil_type_transportasi.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_type_transportasi.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_type_transportasi.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_type_transportasi.php";
                                }
                             }elseif ($page=="bp"){
                                if($aksi==""){
                                    include "tampil_bp.php";
                                }elseif ($aksi=="tambah"){
                                    include "tambah_type_transportasi.php";
                                }elseif ($aksi=="edit"){
                                    include "edit_type_transportasi.php";
                                }elseif ($aksi=="delete"){
                                    include "delete_type_transportasi.php";
                                }
                            }


                        ?>
                  <!-- /. ROW  --> 
                          
                  <!-- /. ROW  -->    
                
                  <!-- /. ROW  -->  
               
                  
                
                  
                  
                     
                     
                 
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
                    &copy;  2019 Website | Design by: ShobarN <a href="#" style="color:#212529;" target="_blank">www.binarytheme.com</a>
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
