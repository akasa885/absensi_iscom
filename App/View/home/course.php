<div class="swipe" id="s3">
  <h3>Entry Course Data</h3>
  <form action="proses.php" method="post">
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
    <input type="submit" name="Entry" value="Entry">
    <input type="reset" name="" value="Reset">
  </form>
</div>
