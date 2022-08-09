<?php get_header() ?>
<?php get_menu() ?>
<div class="content">
    <div class="container">
        <div class="list-count">
            <div class="box-head">
                <div class="box-head_left">
                    <span class="title-sub">CÁC MÔN HỌC GẦN ĐÂY</span>
                    <ul>
                        <li>
                            <a id="myBtn" class="cl-yellow" href="?mod=users&action=course&q=toan">TOÁN</a>
                        </li>

                        <li>
                            <a id="myBtn" class="cl-pink" href="?mod=users&action=course&q=van">VĂN</a>
                        </li>

                        <li>
                            <a id="myBtn" class="cl-red" href="?mod=users&action=course&q=anh">ANH</a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="box-head_right">
                    <ul>
                        <li>
                            <a href="#"></a>
                        </li>
                    </ul>
                </div> -->
            </div>
            <div class="box-body">
                <span class="title-sub">TẤT CẢ CÁC MÔN HỌC</span>
                <ul>
                    <li>
                        <a id="myBtn" class="cl-yellow" href="?mod=users&action=course&q=toan">TOÁN</a>
                    </li>

                    <li>
                        <a id="myBtn" class="cl-pink" href="?mod=users&action=course&q=van">VĂN</a>
                    </li>

                    <li>
                        <a id="myBtn" class="cl-red" href="?mod=users&action=course&q=anh">ANH</a>
                    </li>
                    <li>
                        <a class="cl-yellow" href="?mod=users&action=course&q=su">SỬ</a>
                    </li>
                    <li>
                        <a lass=" cl-red" href="?mod=users&action=course&q=dia">ĐỊA</a>
                    </li>
                    <li>
                        <a class="cl-green" href="?mod=users&action=course&q=gdcd">GDCD</a>
                    </li>
                    <li>
                        <a class="cl-grey" href="?mod=users&action=course&q=hoa">HÓA HỌC</a>
                    </li>
                    <li>
                        <a class="cl-p" href="?mod=users&action=course&q=ly">VẬT LÝ</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="list-test2 list-test">
                    <h3>ĐIỂM MÔN HỌC</h3>

                    <form action="#">
                        <div class="form-gr">
                            <label for="">MÔN HỌC</label>
                            <p>ĐIỂM</p>
                        </div>
                        <hr>
                        <br>
                        <div class="form-gr">
                            <label for="">TOÁN</label>
                            <p>10</p>
                        </div>
                        <div class="form-gr">
                            <label for="">TOÁN</label>
                            <p>10</p>
                        </div>
                        <div class="form-gr">
                            <label for="">TOÁN</label>
                            <p>10</p>
                        </div>
                        <div class="form-gr">
                            <label for="">TOÁN</label>
                            <p>10</p>
                        </div>
                        <div class="form-gr">
                            <label for="">TOÁN</label>
                            <p>10</p>
                        </div>
                        <div class="form-gr">
                            <label for="">TOÁN</label>
                            <p>10</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
<!-- <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];
 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    span.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
 </script>  -->

</html>