# Web english

- Required: Công nghệ sử dụng: PHP 7.4 - laravel 7

# Cài đặt trên windows
- Cài xampp: https://www.apachefriends.org/download.html phiên bản 7.4.29 / PHP 7.4.29	
- Cài đặt Composer: https://getcomposer.org/download/
- cài đặt GIT: https://git-scm.com/downloads


### Các bước setup
1. Mở database tạo database mới có tên là: `webenglish`
2. Sau khi cài đặt xong xampp vào thư mục: /xampp/htdocs mở CMD chạy lệnh: `git clone https://github.com/hale249/WebEnglish.git`
3. cd vào project `WebEnglish`: copy .env.example tạo thành file .env
4. Thay đổi thông tin file .env các thông tin như sau: 
  - DB_DATABASE=`tên vừa tạo bên trên` 
  - DB_USERNAME=root (`thông tin về username thường mặc định xampp là root`)
  - DB_PASSWORD=`mật khẩu ( nếu k có là rỗng)`

  - Chạy lệnh: `php artisan key:generate`
  - chạy lệnh:
    - php artisan config:clear
    - php artisan config:cache
    - php artisan route:cache

5. Chạy lệnh để sinh ra table và dữ liệu mẫu 
    - tạo table: php artisan migrate
    - Sinh dữ liệu mẫu: 
      - php artisan db:seed --class=UserAdminSeed
      - php artisan db:seed --class=BookSeeder


6. Chạy lại lệnh để clear cache:
   - php artisan config:clear
   - php artisan view:cache
   - php artisan cache:clear

7. chạy server
    - php artisan serve 

    - Truy cập vào địa chỉ http://127.0.0.1:8001 hoặc http://127.0.0.1:8000 xem trang web
    
    - Truy cập vào admin: /admin (username/ password: admin@gmail.com/ admin)
