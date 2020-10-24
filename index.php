<a href="insert.php" >tambah data</a>
<h2>Daftar data dalam database</h2>
<?php
    include "koneksi.php";
    $r = mysqli_query($kon,"SELECT * FROM mahasiswa");
    $i = 0;
    while($brs = mysqli_fetch_assoc($r)){
        echo ++$i.". ".$brs['nama']."<br/>";
        echo ' <a href="edit.php?id='.$brs['id'].'">edit</a><';
        echo ' <a href="delete.php?id='.$brs['id'].'">delete</a><br>';
    }

?>