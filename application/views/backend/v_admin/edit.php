<form class="" action="<?php echo site_url('Admin/update/'.$edit['kd_admin']) 
?>" method="post">
 <label>Kode Admin</label><br>
 <input type="text" name="kd_admin" value="<?php echo 
$edit['kd_admin'] ?>"><p></p>
 <label>Nama Admin</label><br>
 <input type="text" name="nama_admin" value="<?php echo 
$edit['nama_admin'] ?>"><p></p>
<label>Email Admin</label><br>
 <input type="text" name="email_admin" value="<?php echo 
$edit['email_admin'] ?>"><p></p>
 <label>Hp Admin</label><br>
 <input type="text" name="hp_admin" value="<?php echo 
$edit['hp_admin'] ?>"><p></p>
<label>Password Admin</label><br>
 <input type="text" name="password_admin" value="<?php echo 
$edit['password_admin'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('Admin') ?>"><button type="button" 
name="button">Batal</button></a>
</form>