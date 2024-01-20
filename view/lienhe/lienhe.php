
 <script>
function kiemTraDuLieu() {
    var tenValue = document.forms["form-insert"]["ten"].value;
    var emailValue = document.forms["form-insert"]["email"].value;
    var sdtValue = document.forms["form-insert"]["sdt"].value;
    var noidungValue = document.forms["form-insert"]["noidung"].value;
    if (tenValue == "" || emailValue == "" || sdtValue == "" || noidungValue =="" ) {
        alert("Vui lòng điền đầy đủ thông tin trước khi thêm mới!");
        return false;
    } else {
        var xacNhan = confirm("Bạn có muốn thêm mới không?");
        if (xacNhan) {
            document.forms["form-insert"].submit();
        } else {
            return false;
        }
    }
}
</script>
 <div class="leave-message">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <div class="contact-form-inner">
                <div class="contact-form-title">
                            <div class ="content-wrapper">
                            <article class="mt-4">
                            <h5 class="alert alert-success">Hãy nói gì đó</h5>
                            <form class="form-insert" action="./index.php?act=lienhe" method="post" enctype="multipart/form-data" id="form-insert">
                                <div class="form1 ">
                                    <div class="mb-3">
                                    <label class="form-label" style="font-weight: bold; text-transform: uppercase;" required>Nhập tên của bạn</label>
                                    <input type="text" class="form-control" name="ten"/>
                                    </div>
                                    <div class="form1 ">
                                    <div class="mb-3">
                                    <label class="form-label" style="font-weight: bold; text-transform: uppercase;" required>email của bạn</label>
                                    <input type="text" class="form-control" name="email"/>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;"required>số điện thoại</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="sdt"></textarea>
                                    </div>
                                </div>
                                </div>
                                <div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;" required>Nội dung </label>
                                <textarea name="noidung" cols="30" rows="10" placeholder="nhập ở đây"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                        
                            <input type="submit" name="btn_add" class="btn btn-success" value="Thêm mới" onclick="return kiemTraDuLieu()">
                                    </div>
                                    </form>
                            <?php 
                                    if(isset($notice) && $notice > 0) { 
                                    echo $notice;
                                    }
                                    ?>
                            </article>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
</div>
