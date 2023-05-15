Hướng dẫn chạy đồ án cuối kì _ Website nghe nhạc trực tuyến
Muốn chạy được đồ án này cần phải install ứng dụng Xampp để hỗ trợ 
1. Copy toàn bộ source code cũng như các file ngang cấp bỏ vào htdocs của ứng dụng Xampp đã được cài đặt.
2. Sau đó mở Xampp để Start Apache và MySQL.
3. Mở trình duyệt web và truy cập vào trang quản lý phpMyAdmin bằng cách nhập địa chỉ:
"http://localhost/phpmyadmin/" hoặc bấm vào Admin ở trong Xampp của MySQL.
4. Đăng nhập vào phpMyAdmin bằng tài khoản và mật khẩu mặc định (tài khoản là "root" và mật khẩu là rỗng '').
5. Tạo cơ sở dữ liệu của dự án bằng cách chọn Import hoặc Nhập trên thanh Navbar của phpMyAdmin.
6. Sau khi nhấn import thì choose file thì chọn file "database.sql" ngoài thư mục của htdocs.
và nhập cũng như import nó sau khi đó sẽ có cơ sở dữ liệu mới có tên là 'user_music'.
7. Tiếp theo truy cập vào "http://localhost/" hay bấm vào Admin ở trong Xampp của Apache.
8. Ta sẽ thấy có 1 một thư mục source và ta nhấp vào thư mục source
9. Khi khởi động thư mục source này đồng nghĩa với việc form Login sẽ được hiển thị.
10. Khi này hệ thống sẽ yêu cầu bạn Login, bạn có quyền chọn login hoặc đăng ký tài khoản mới.
11. Tài khoản để login cho hệ thống được phân quyền như sau:
--Administration:
Username: admin@gmail.com
Password: 123456
--User:
Username: user@gmail.com
Password: 123456
12. Sau đó bạn sẽ đăng nhập vào hệ thống theo đúng phân quyền mà bạn chọn.