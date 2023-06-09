<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" conternt="ie=edge">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Merriweather:wght@300&family=Sansita+Swashed:wght@300;400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="/public/styles/style.css">
		<link rel="stylesheet" href="/public/styles/admin.css">
		<link rel="icon" href="/public/images/icons/icon_admin.ico" type="image/icon">
		<title>Админ - Добавить Пост</title>
	</head>
	<body>
		<header>
			<div class="logo">
				<h1 class="logo-text"><a href="/"><span>B</span>aiel-<span>A</span>I</a></h1>
			</div>
			<i class="fa fa-bars menu-toggle"></i>
			<ul class="nav">
				<li>
					<a href="/admin"><?=$user['username'];?><i class="fa fa-chevron-down"></i></a>
					<ul>
						<li><a href="/admin/logout" class="logout">Выйти</a></li>
					</ul>
				</li>
			</ul>
		</header>
		<!-- Page Wrapper -->
		<div class="admin-wrapper">
			<!--Left Sidebar-->
			<div class="left-sidebar">
				<?php include('application/include/admin_sidebar.html'); ?>
			</div>
			<!--//Left Sidebar-->
			<!--Admin Content-->
			<div class="admin-content">
				<div class="button-group">
					<a href="/admin/posts" class="btn  btn-big">Управление Постами</a>
				</div>
				<div class="content">
					<h2 class="page-title">Добавить Пост</h2>
					<form action="/admin/createp" method="post" enctype="multipart/form-data">
						<div>
							<label>Заголовок</label>
							<input type="text" name="title" class="text-input">
						</div>
						<div>
							<label>Автор</label>
							<input type="text" name="author" class="text-input">
						</div>
						<div>
							<label>Изображение для профиля</label>
							<input type="file" name="profile_image" accept="image/png, .jpeg, .jpg, image/gif" class="text-input">
						</div>
						<div>
							<label>Текст</label>
							<textarea name="body" id="body"></textarea>
						</div>
						<div>
							<label>Категория</label>
							<input type="text" name="category" class="text-input">
						</div>
						<div class="submit">
							<button type="submit" name="submit" class="btn btn-big" id="submit_voter">Добавить</button>
						</div>
					</form>
				</div>
			</div>
			<!--//Admin Content-->
		</div>
		<!-- //Page Wrapper -->
		<!-- JQuery -->
		<script type="text/javascript" src="/public/scripts/jquery.js"></script>
		<!-- CKEditor -->
		<script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
		<script src="/public/scripts/post_editor.js"></script>
		<!-- Custom -->
		<script src="/public/scripts/scripts.js"></script>
	</body>
</html>