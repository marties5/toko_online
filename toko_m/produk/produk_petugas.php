<?php 
    include "../login/header.php";
?>
<center><h2 
style="margin: 50px;">Daftar Produk</h2></center>
<div class="row">
    <?php 
    include "../koneksi.php";
    $qry_pdk=mysqli_query($conn,"select * from produk");
    while($dt_pdk=mysqli_fetch_array($qry_pdk)){

    
      $hapus="<a href='hapus_produk_petugas.php?id_produk=$dt_pdk[id_produk]' onclick='return confirm(Apakah anda yakin menghapus Histori ini?)' class='btn btn-danger'>hapus produk</a>";
        ?>
        <div class="col-md-3">
       
            <div style="
            margin-bottom:50px;
            "
            
            class="card" >
              <img src="gambar/<?=$dt_pdk['foto']?>" class="card-img-top" width="100px"height="190px">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_pdk['nama_produk']?></h5>
                <p class="card-text"><?=substr($dt_pdk['deskripsi'], 0,20)?></p>
                <p class="card-text">Rp.  <?=substr($dt_pdk['harga'], 0,20)?></p>
        
                <a href="ubah_produk.php?id_produk=<?=$dt_pdk['id_produk']?>" class="btn btn-primary">ubah produk</a>
                <td><?=$hapus?></td>
                
              </div>
            </div>
            

        </div>
        <?php
        
    }
    ?>
    
    
</div>

