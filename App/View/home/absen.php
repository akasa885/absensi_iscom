<div class="swipe" id="s1">
  <h3>Absensi ISCOM</h3>
  <table class="bord">
    <tr>
      <td width="50px"><h3><center>NO</center></h3></td>
      <td width="180px"><h3><center>NPM</center></h3></td>
      <td width="250px"><h3><center>NAMA</center></h3></td>
      <td colspan="2" width="250px"><h3><center>Absen</center></h3></td>
    </tr>
    <?php
    $loop = 1;
    while($abs = mysqli_fetch_array($data['result']))
    {
      ?>
      <tr class="bord">
        <td><center><?php echo $loop?></center></td>
        <td><span class="text"><?php echo $abs[1]?></span></td>
        <td><span class="text"><?php echo $abs[2]?></span></td>
        <?php
        if($abs[4]=='Hadir'){
          echo "<td colspan=\"2\" class=\"tgl\"><center>$abs[3]</center></td>";
        }else{
          ?>
          <!-- <div class="cekin"> -->
            <td id="masukan"><center><button  class="absenss" type="button" name="absen<?=$abs[0]?>" value="<?=$abs[1]?>" id="cek1"><span class="absenss-text">Hadir</span></button></center></td>
          <!-- </div> -->
        </tr>
        <?php
      }
      $loop = $loop + 1;
    }
    ?>
  </table>

  <div class="conbut" id="lanjut">
    <a href="" class="button" id="nambahp" data-target="tambah">Tambah Baru</a>
    <button type="button" name="absen" id="absenkan" class="button">Absenkan</button>
    <!-- <a href="" data-target="absen" class="button" id="absenkan">Absenkan</a> -->
    <a href="" data-target="course" class="button" id="selesain">Selesai</a>
  </div>
  <!-- <button type="button" data-target="tambah" class="button" id="lanjut">Tambah baru</button>
  <button type="button" id="absenkan" class="button">Absenkan</button>
  <button type="button" data-target="course" class="button" id="lanjut">Selesai</button> -->
</div>
