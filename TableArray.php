<?php
    $matakuliah = [
        ["kode"=>"MK02","nama"=>"Desain Web","dosen"=>"Laisa Nurin"],
        ["kode"=>"MK03","nama"=>"PHP Programming","dosen"=>"Nasrul"],
        ["kode"=>"MK04","nama"=>"Database","dosen"=>"Edo Riansyah"],
    ];
?>
<table border="1" width="100%">
    <thead>
        <tr><th>No</th><th>Kode MK</th><th>Nama Matakuliah</th><th>Dosen</th></tr>

    </thead>
<select>
  <form>
    <tbody>
        <?php
            $nomor =1;
                foreach($matakuliah as $row){
                    echo '<td>'.$nomor.'</td>
                    <td>'.$row['kode'].'</td>
                    <td>'.$row['nama'].'</td>
                    <td>'.$row['dosen'].'</td></tr>';
                    $nomor++;// nomor tambahan 1
                }
        ?>
    </tbody>
  </table>
 </select>
</form>