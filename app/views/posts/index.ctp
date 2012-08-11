<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php echo $html->charset("utf-8");?>
<title>DoneList</title>
</head>
<body>

<h1>Blog posts</h1>

<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	</tr>
	<!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td><?php echo $html->link($post['Post']['title'],
		"/posts/view/".$post['Post']['id']); ?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<div>追加するtitle<?php echo $form->create(null,array('type'=> 'post','action'=> './add')); ?>
<?php echo $form->text("Post.title");?>
<?php echo $form->submit("送信");?>
<?php echo $form->end();?>
</div>

</body>
</html>