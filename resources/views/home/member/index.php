<?php echo view('home.public.header', ['title' => $title]);?>
<div class="pure-g">
    <div class="pure-u-1-1">
        <img class="pure-img" src="<?php echo url('assets/images/avatar_1.png');?>">
    </div>
	<div class="pure-u-1-3"><p>Thirds</p></div>
	<div class="pure-u-1-3"><p>Thirds</p></div>
	<div class="pure-u-1-3"><p>Thirds</p></div>
</div>
<form class="pure-form">
    <fieldset>
        <legend>一个简单的单行表单</legend>

        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">

        <label for="remember">
            <input id="remember" type="checkbox"> 记住我
        </label>

        <button type="submit" class="pure-button pure-button-primary">登录</button>
    </fieldset>
</form>
<?php echo view('home.public.footer');?>