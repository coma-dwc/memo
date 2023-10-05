<!DOCTYPE html>
<html>
　<head>
　　<title>お問い合わせフォーム - 確認画面</title>
　</head>
　<body>
　　<h1>お問い合わせフォーム - 確認画面</h1>
　　<p>以下の内容で送信します。よろしいですか？</p>
　　<table>
　　　<tr><td>NAME：</td><td><?php echo $_POST['name']; ?></td></tr>
　　　<tr><td>E-mail：</td><td><?php echo $_POST['email']; ?></td></tr>
　　　<tr><td>MESSAGE：</td><td><?php echo $_POST['message']; ?></td></tr>
　　</table>
　　<form method="post" action="send.php">
　　　<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
　　　<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
　　　<input type="hidden" name="message" value="<?php echo $_POST['message']; ?>">
　　　<input type="submit" value="送信">
　　　<button type="button" onclick="history.back()">戻る</button>
　　</form>
　</body>
</html>