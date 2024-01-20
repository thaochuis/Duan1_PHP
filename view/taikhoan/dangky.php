
    

<!-- <form   
        action="index.php?act=dangky" method="post" >
        <h2>Đăng kí</h2>
        <label for="taikhoan">Tài khoản:</label>
        <input type="text"  name="taikhoan" required>

        <label for="matkhau">Mật khẩu</label>
        <input type="password"  name="matkhau" required>
        
        <label for="email">Email</label>
        <input type="email"  name="email" required
        <label for="sdt">Số điện thoại</label>
        <input type="text"  name="sdt" required>



        <input type="submit" value="Đăng ký" name="dangky">

        <div class="register-link">
            Đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập tại đây</a>.
        </div>
</form> -->
        <div class="register-page-inner ptb-100 bg-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-xs-12">
                        <div class="register-page-form">
                            <form action="index.php?act=dangky" method="post" id="form-insert"> 
                                <div class="username">
                                    <input type="text" placeholder="Username" name="taikhoan" required>
                                </div>
                                <div class="email">
                                    <input type="text" placeholder="Email" name="email" required>
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Password" name="matkhau" required>
                                </div>
                                <div class="username">
                                    <input type="number" placeholder="sdt" name="sdt" required>
                                </div>
                                <div class="register">
                                    <input type="submit" value="Đăng ký" name="dangky"  onclick="return kiemTraDuLieu()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <?php   
            if(isset($thongbao)&& ($thongbao!= "")){
                echo $thongbao;
            }
        
        ?>
<script>
function kiemTraDuLieu() {
    var taikhoanValue = document.forms["form-insert"]["taikhoan"].value;
    var emailValue = document.forms["form-insert"]["email"].value;
    var matkhauValue = document.forms["form-insert"]["matkhau"].value;
    var sdtValue = document.forms["form-insert"]["sdt"].value;
    
    if (taikhoanValue == "" || emailValue == "" || matkhauValue == ""|| sdtValue == "") {
        alert("Vui lòng điền đầy đủ thông tin trước khi thêm mới!");
        return false;
    } else {
        var xacNhan = confirm("Bạn có muốn Đăng ký không?");
        if (xacNhan) {
            // Nếu người dùng nhấn OK, tiếp tục submit form
            document.forms["form-insert"].submit();
        } else {
            // Nếu người dùng nhấn Cancel, hủy bỏ việc submit form
            return false;
        }
    }
}
</script>