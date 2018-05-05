 # Admin Login
Google Translate is your friend.
If you can't understand this topic, Please watch this article along with the demo-adminlogin.md.php file.
如果您无法理解此文章中某些内容，请配合demo-adminlogin.md.php文件食用。
想要在admin中的login加入recaptcha验证？这并不是问题。<br>
（此处使用invisible recaptcha）<br>
根据我的方法+按照Google的demo，您需要在login.php中，在22与23行之间插入<br>
<code><script src="https://www.google.com/recaptcha/api.js" async defer></script></code><br>
<code><br>
     <script><br>
       function onSubmit(token) {<br>
         document.getElementById("demo-form").submit();<br>
       }<br>
     </script><br>
</code><br>
在原form和/form再加一层<br>
<code><f orm id='demo-form' action="?" method="POST"></f orm></code><br>
寻找到Login按钮，并将其input加入button<br>
<code><bu tton class="g-recaptcha" data-sitekey="sitekey" data-callback='onSubmit' input type="submit" value="Login" />登录</bu tton></code><br>
保存，完事。<br>

注:<br>
中国无法使用google.com，可考虑官方反代recaptcha.net（这话讲的贼明）<br>
我的网页中还插入了文档中出现过的div，但是我不觉得有用上，因此并没有在此列出。<br>
在自行使用时，请修改sitekey值为您站点的sitekey。（sitekey需要去 google.com/recaptcha 申请，步骤十分简单，但要想用这玩意你必须得爬墙）<br>

附:<br>
https://developers.google.com/recaptcha/docs/invisible<br>
