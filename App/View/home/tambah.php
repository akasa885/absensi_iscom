<div class="swipe" id="s2">
  <h3>Tambah Mahasiswa</h3>
  <form class="" action="" method="post">
    <table>
      <tr>
        <td><span class="text">Nama :</span></td>
        <td><input type="text" name="mhs" required placeholder="Your Name"></td>
      </tr>
      <tr>
        <td><span class="text">NPM :</span></td>
        <td> <input type="number" name="npm" value="" required placeholder="NPM"></td>
      </tr>
      <tr>
        <td><span class="text">Password :</span></td>
        <td> <input  class="pass1" type="password" name="pas" value="" required placeholder="Password"></td>
      </tr>
      <tr>
        <td>Divisi :</td>
        <td><select class="" name="divisi">
          <option value="Akademik">Academic</option>
          <option value="Public Reliation">PR</option>
          <option value="Planning and Control">PC</option>
          <option value="Information and Communication Control">ICC</option>
        </select></td>
      </tr>
    </table>
    <div class="conbut" id="lanjut">
      <button type="button" name="nambah" id="nambahs" class="button">Add</button>
      <!-- <input type="submit" name="add" value="add" id="nambah"> -->
      <input type="reset" name="" value="Reset">
      <a href="" data-target="absen" class="cancel">Cancel</a>
    </div>
    <!-- <button type="button" name="batal" class="cancel" onclick="bckabsen()">Cancel</button> -->
  </form>
</div>
