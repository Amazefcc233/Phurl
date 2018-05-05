此为Demo，不保证打开能运行，仅供参考。
This is Demo. It is not guaranteed to be open for operation. It is for reference only.
发生变动位置: 行29(api.js) 30-34(script) 36(form) 49(button) 53(/form)
Change position: Line 29 (api.js) 30-34 (script) 36 (form) 49 (button) 53 (/form)


<?php
session_start();
require_once("../config.php");
require_once("../functions.php");

if (count($_POST) > 0) {
    if ($_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD) {
        $_SESSION['admin'] = 1;

        session_write_close();
        header("Location: index.php", true, 301);
        exit();
    }
    else {
        $_ERROR[] = "用户名或密码错误.";

        print_errors();
    }
}
require_once("header.php");
print_errors();
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
	function onSubmit(token) {
	   document.getElementById("demo-form").submit();
    }
</script>
<h2>管理员登录 | <a href="index.php">返回主页</a></h2>
<form id='demo-form' action="?" method="POST">
<form method="post" action="login.php">
<table id="admin_login">
<tr>
<td><strong>用户名:</strong></td>
<td><input type="text" name="username" size="30" value="" /></td>
</tr>
<tr>
<td><strong>密码:</strong></td>
<td><input type="password" name="password" size="30" value="" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><button class="g-recaptcha" data-sitekey="sitekey" data-callback='onSubmit' input type="submit" value="Login" />登录</button></td>
</tr>
</table>
</form>
</form>

<?php
require_once("footer.php");
?>
