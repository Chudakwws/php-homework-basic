<?php
session_start();
?>
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; ?>
<?php if (isset($_POST['send']) and $_POST['send'] === 'Войти') 
    {
		authorization();
	}
?>
<?php if (isset($_POST['send']) and $_POST['send'] === 'Регистрация') 
    {
		registration();
	}
?>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
                <h1><?=titlesPages($mainMenu)?></h1>
            	<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>			
			</td>
            <td class="right-collum-index">
				<?php if (!isset($_SESSION['auth']) ) : ?>
					<div class="project-folders-menu">
						<ul class="project-folders-v">
    						<li class="project-folders-v-active"><a href="?login=yes">Авторизация</a></li>
    						<li><a href="?registr=yes">Регистрация</a></li>
    						<li><a href="#">Забыли пароль?</a></li>
						</ul>
				    	<div class="clearfix"></div>
					</div>
				<?php endif ?>
                
                <?php 
					if(isset($_GET['registr']) && $_GET['registr']=='yes') : ?>
                        <div class="index-auth">
                            <form action="" method="post">
						        <table width="100%" border="0" cellspacing="0" cellpadding="0">
							        <tr>
								        <td class="iat">
                                            <label for="login_id">Ваш Логин:</label>
                                            <input id="login_id" size="30" value=""  name="login">
                                        </td>
							        </tr>
							        <tr>
								        <td class="iat">
                                            <label for="password_id">Ваш пароль:</label>
                                            <input id="password_id" size="30"  name="password" value="" type="password">
                                        </td>
							        </tr>
									<tr>
								        <td class="iat">
                                            <label for="email_id">Ваш e-mail:</label>
                                            <input id="email_id" size="30" value=""  name="email">
                                        </td>
							        </tr>
									<tr>
								        <td class="iat">
                                            <label for="phone_id">Ваш phone number:</label>
                                            <input id="phone_id" size="30" value=""  name="phone">
                                        </td>
							        </tr>
							        <tr>
								        <td><input type="submit"  value="Регистрация" name="send"></td>
							        </tr>
						        </table>
                            </form>
				        </div>
                    <?php endif ?>
					<?php
                    if(isset($_GET['login']) && $_GET['login']=='yes') : ?>
                        <div class="index-auth">
                            <form action="" method="post">
						        <table width="100%" border="0" cellspacing="0" cellpadding="0">
							        <tr>
								        <td class="iat">
                                            <label for="login_id">Ваш логин:</label>
                                            <input id="login_id" size="30" value="<?=htmlspecialchars($cookiLogin ?? '')?>"  name="login">
                                        </td>
							        </tr>
							        <tr>
								        <td class="iat">
                                            <label for="password_id">Ваш пароль:</label>
                                            <input id="password_id" size="30"  name="password" value="<?=htmlspecialchars($cookiPass ?? '')?>" type="password">
                                        </td>
							        </tr>
							        <tr>
								        <td><input type="submit"  value="Войти" name="send"></td>
							        </tr>
						        </table>
                            </form>
				        </div>
                    <?php endif ?>
				
			
			</td>
        </tr>
    </table>
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>

