<form id="myform" enctype="multipart/form-data"  method="POST" action="<?php $_SERVER['PHP_SELF']?>" style="margin: 40px 0">
	<label style="color: grey;" for="userfile_id">Загрузите ваше изображение:</label>
    <input  style="color: grey;" id="file" type="file" multiple name="file[]" >
    <input id="btnSubmit" type="submit" value="Загрузить" name="send" >
</form>
