<!DOCTYPE html>
<html lang="en">
	<?php echo form_open_multipart('index.php/home/upload');?>
	<?php foreach($details as $detail){?>
		<input type = "hidden" name = "dp" value = "user#<?php echo $detail->idnumber." ";?>" >
		<imput type = "hidden" name="fileformat">
		<input type="file" name="userfile" size="25" />
		<input type="submit" value="Upload Profile Picture" />
	<?php }?>
	</form>

	<?php echo form_open_multipart('index.php/home/uploadcover');?>
	<?php foreach($details as $detail){?>
		<input type = "hidden" name = "cp" value = "usercover#<?php echo $detail->idnumber." ";?>" >
		<imput type = "hidden" name="fileformat">
		<input type="file" name="userfile" size="25" />
		<input type="submit" value="Upload Cover Photo" />
	<?php }?>
	</form>

</html>