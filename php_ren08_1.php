<h1>アンケート</h1>
<form action="php_ren08_2.php" method="post" enctype="multipart/form-data">
<dl>
<dt>名前:</dt>
<dd><input type="text" name="my_name" id="my_name" value="" /></dd>
<dt>画像ファイル：</dt>
<dd><input type="file" name="image" id="image" size="50"/></dd>
<dt>性別：</dt>

<dd>
<input type="radio" name="hito" id="man" value="男性" />
<label for="man">男</label>

<input type="radio" name="hito" id="human" value="女性" />
<label for="human">女</label>

<input type="radio" name="hito" id="sonota" value="その他" />
<label for="sonota">その他</label>

</dd>
</dl>
<input type="submit" value="送信する" />

</form>