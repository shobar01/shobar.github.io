<link href="../assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/css/style.css" media="screen" title="no title" charset="utf-8">
<!-- page start-->
<div class="wrapper ">
    <div class="row">
        <section class="">
            <header class="panel-heading">
            </header>
            <?php
            @$page = $_GET['aksi'];
            switch ($page) {
                case 'proses_hapus':
                    include 'proses_hapus.php';
                    break;
                default:
                    include 'tampil.php';
                    break;
            }
            ?>
        </section>
    </div>
</div>
<!-- page end-->
