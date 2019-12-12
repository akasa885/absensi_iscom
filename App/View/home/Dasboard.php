<body>
  <div class="containersd">
    <div class="topnav" id="myTopnav">
      <a href="#" class="active">Home</a>
      <a href="<?=loginfirst?>/2Lojw">Logout</a>
    </div>
  </div>
  <div class="row">
    <div class="col-3">
      <div class="pembungkus2">
        <ul>
          <li id="m1" class="menu active">Student Present</li>
          <li id="m2" class="menu">Entry Course</li>
        </ul>
      </div>
    </div>
    <div class="col-9">
      <div class="pembungkus" id="bungkus">


        <div class="swipe-s" id="s1">
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
                  echo "<td colspan=\"2\" class=\"tgl\" id=\"tabs\"><center>$abs[3]</center></td>";
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
            <a href="" class="button" data-target="tambah">Tambah Baru</a>
            <button type="button" name="absen" id="absenkan" class="button">Absenkan</button>
            <a href="" data-target="course" class="button">Selesai</a>
          </div>
        </div>

        <div class="swipe" id="s2">
          <h3>Tambah Mahasiswa</h3>
          <form method="post" id="formnambah">
            <table>
              <tr>
                <td><span class="text">Nama :</span></td>
                <td><input type="text" id="mhsname" name="mhs" required placeholder="Your Name"></td>
              </tr>
              <tr>
                <td><span class="text">NPM :</span></td>
                <td> <input type="number" id="mhsnpm" name="npm" value="" required placeholder="NPM"></td>
              </tr>
              <tr>
                <td><span class="text">Password :</span></td>
                <td> <input  class="pass1" id="mhspsw" type="password" name="pas" value="" required placeholder="Password"></td>
              </tr>
              <tr>
                <td>Divisi :</td>
                <td><select class="" name="divisi" id="mhsdiv">
                  <option value="Akademik">Academic</option>
                  <option value="Public Reliation">PR</option>
                  <option value="Planning and Control">PC</option>
                  <option value="Information and Communication Control">ICC</option>
                </select></td>
              </tr>
            </table>
            <div class="conbut" id="lanjut">
              <input type="submit" name="Add" id="nambahs" class="button">
              <!-- <input type="submit" name="add" value="add" id="nambah"> -->
              <input type="reset" name="" value="Reset">
              <a href="#" data-target="absen" class="cancel">Cancel</a>
            </div>
            <!-- <button type="button" name="batal" class="cancel" onclick="bckabsen()">Cancel</button> -->
          </form>
        </div>

        <div class="swipe" id="s3">
          <h3>Entry Course Data</h3>
          <form method="post" id="formcour">
            <table>
              <tr>
                <td><span class="text">Pengajar :</span></td>
                <td><input type="text" name="pengajar" required placeholder="Your Name"></td>
              </tr>
              <tr>
                <td><span class="text">Materi :</span></td>
                <td><select class="" name="materi">
                  <option value="web">WEB</option>
                  <option value="destop">DESTOP</option>
                </select></td>
              </tr>
              <tr>
                <td><span class="text">Modul Bab :</span></td>
                <td> <textarea name="modul" rows="8" cols="35" required placeholder="ex; HTML,SQL,DESKTOP. (please inssert ',' between yours sub bab)"></textarea> </td>
              </tr>
            </table>
            <input type="submit" name="Entry" id="coursv">
            <input type="reset" name="" value="Reset">
          </form>
        </div>


      </div>
    </div>
  </div>
  <div class="footer">
    <span class="direc"> Design by Akasa and ISCOM</span>
  </div>
