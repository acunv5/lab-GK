# Bài kiểm tra giữa học phần – QLNhanSu

## Công nghệ
PHP 8+, MySQL, HTML/CSS responsive, PDO.

## Cài đặt XAMPP
1. Giải nén thư mục `QLNhanSu_PHP` vào `C:\xampp\htdocs\`.
2. Bật Apache và MySQL trong XAMPP.
3. Vào `http://localhost/phpmyadmin`, chọn Import và import file `database.sql`.
4. Mở frontend: `http://localhost/QLNhanSu_PHP/`.
5. Mở backend: `http://localhost/QLNhanSu_PHP/login.php`.

## Tài khoản quản trị demo
Email: `admin@gmail.com`
Mật khẩu: `123456`

Tài khoản demo được cấu hình trong `login.php`. Đây là cơ chế đăng nhập mẫu cho bài thực hành; khi triển khai thật nên lưu tài khoản quản trị trong bảng riêng.

## Đối chiếu yêu cầu
- Câu 1: Dữ liệu mẫu đã được thêm trong `database.sql`; backend cũng có chức năng thêm.
- Câu 2: Frontend `index.php` truy vấn và hiển thị Users.
- Câu 3: CSS trong `assets/style.css` hỗ trợ desktop và màn hình nhỏ.
- Câu 4: Backend có sửa và xóa người dùng; thao tác trực tiếp trên MySQL qua PDO prepared statements.

## Lưu ý
- `config.php` mặc định MySQL user `root`, password rỗng theo cấu hình XAMPP phổ biến. Nếu máy bạn có mật khẩu MySQL, hãy sửa trong file này.
- Mật khẩu người dùng được lưu dạng hash bằng `password_hash()`.
- Ảnh đại diện lưu ở `uploads/`, giới hạn 3MB và kiểm tra MIME.
- Bảng Users giữ đúng 4 trường đề bài yêu cầu.
