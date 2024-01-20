<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ Chi Tiết</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #495057;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .contact-form,
        #map {
            width: 48%;
            margin-top: 20px;
            border-radius: 5px;
            overflow: hidden;
            display: inline-block;
            vertical-align: top;
        }

        .contact-form {
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            background-color: #343a40;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        #map {
            height: 400px;
            border: 1px solid #ced4da;
        }
        #map iframe{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <div class="contact-info">
                <div>
                    <h2>Thông Tin Liên Hệ</h2>
                    <p>Địa chỉ: 123 Đường ABC, Thành Phố XYZ</p>
                    <p>Email: contact@example.com</p>
                    <p>Điện thoại: (123) 456-7890</p>
                </div>
                <div>
                    <h2>Giờ Làm Việc</h2>
                    <p>Thứ Hai - Thứ Sáu: 8:00 AM - 5:00 PM</p>
                    <p>Thứ Bảy: 9:00 AM - 12:00 PM</p>
                    <p>Chủ Nhật: Nghỉ</p>
                </div>
            </div>

            <div class="contact-form">
                <h2>Gửi Liên Hệ</h2>
                <form action="#" method="post">
                    <label for="name">Họ và Tên:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="text">SDT:</label>
                    <input type="text" id="sdt" name="sdt" required>

                    <label for="message">Nội Dung Liên Hệ:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Gửi Liên Hệ</button>
                </form>
            </div>

            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3428.068181492526!2d105.73093582031318!3d21.03900314160196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345550b525aa03%3A0x3fdefc40f69a023a!2zQ2FvIMSR4bqzbmcgRlBUIFBo4buRIFRy4buLbmggVsSDbiBCw7QgLCBQaMaw4budbmcgUGjGsMahbmcgQ2FuaCAsIHF14bqtbiBU4burIExpw6pt!5e1!3m2!1svi!2s!4v1699607947971!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
</body>
</html>
