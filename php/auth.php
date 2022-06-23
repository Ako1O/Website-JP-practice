<section>
	<div class="login-block">
		<h1>Вход</h1>
			<?php
			    if (!empty($_SESSION['message'])) {
			    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
			    }
			    unset($_SESSION['message']);
			?>
			<form method="post">
			<div class="login-input">
			<div class="login-email">
			<input class="insert" name="Client_email" placeholder="Введите свой Email" type="email" autocomplete="off"/>
			</div>
			<div class="login-pass">

			<input class="insert" name="Client_password" placeholder="************" type="password" autocomplete="off"/>
				</div>
			</div>

			<input type="submit" style="margin-top: 40px; margin-bottom: 12px;" class="submit" value="Войти" onclick="alertFunction()" required>
			</form>	
		<a href="registration.php" style="text-decoration: underline;" class="reg">Зарегистрироваться</a>
	</div>	
</section>	