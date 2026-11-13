<?php require_once 'config.php'; $users=$pdo->query('SELECT admin_id,admin_email,images FROM Users ORDER BY admin_id DESC')->fetchAll(); ?>
<!doctype html><html lang="vi"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Quản lý nhân sự</title><link rel="stylesheet" href="assets/style.css"></head><body>
<header><div class="nav wrap"><a class="logo" href="index.php">QL<span>NhânSự</span></a><nav><a href="index.php">Trang chủ</a><a href="login.php">Quản trị</a></nav></div></header>
<main class="wrap"><section class="hero"><div><small>HỆ THỐNG QUẢN LÝ NHÂN SỰ</small><h1>Danh sách người dùng</h1><p>Thông tin tài khoản đang được quản lý trong hệ thống.</p></div><div class="heroicon">👥</div></section>
<section class="panel"><div class="head"><div><h2>Người dùng</h2><p><?=count($users)?> tài khoản trong hệ thống</p></div></div>
<?php if(!$users): ?><p class="empty">Chưa có dữ liệu.</p><?php else: ?><div class="grid"><?php foreach($users as $u): ?><article class="user"><img src="uploads/<?=e($u['images']?:'default.svg')?>" onerror="this.src='uploads/default.svg'" alt="Ảnh"><div><small>ID #<?=(int)$u['admin_id']?></small><h3><?=e($u['admin_email'])?></h3><p>Tài khoản người dùng</p></div></article><?php endforeach; ?></div><?php endif; ?></section></main>
<footer>© <?=date('Y')?> - Hệ thống quản lý nhân sự</footer></body></html>
