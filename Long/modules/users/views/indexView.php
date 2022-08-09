<?php get_header() ?>


<?php get_menu() ?>
<div class="content">
    <div class="container">
        <div class="list-test">
            <h3>TẠO ĐỀ KIỀM TRA</h3>
            <div class="list-ques">
            <form action="?mod=users&action=add" method="POST">
                <p>#Pytane 1</p>
                <ul>
                    <li class="ques"><input type="text" name="noidung" placeholder="Nội dung câu hỏi...?"></li>
                    <div class="form-group">
                        <label for="#" class="">A</label>
                        <input type="text" placeholder="Đáp án A" name="D1">
                    </div>
                    <div class="form-group">
                        <label for="#">B</label>
                        <input type="text" placeholder="Đáp án B" name="D2">
                    </div>
                    <div class="form-group">
                        <label for="#">C</label>
                        <input type="text" placeholder="Đáp án C" name="D3">
                    </div>
                    <div class="form-group">
                        <label for="#">D</label>
                        <input type="text" placeholder="Đáp án D" name="D4">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Dap an dung" class="truthy" name="dapAnDung">
                    </div>
                </ul>
                </div>
                <!-- <div class="list-ques">
            <form action="?mod=users&action=add" method="POST">
                <p>#Pytane 2</p>
                <ul>
                    <li class="ques"><input type="text" name="noidung" placeholder="Nội dung câu hỏi...?"></li>
                    <div class="form-group">
                        <label for="#" class="">A</label>
                        <input type="text" placeholder="Đáp án A" name="D1">
                    </div>
                    <div class="form-group">
                        <label for="#">B</label>
                        <input type="text" placeholder="Đáp án B" name="D2">
                    </div>
                    <div class="form-group">
                        <label for="#">C</label>
                        <input type="text" placeholder="Đáp án C" name="D3">
                    </div>
                    <div class="form-group">
                        <label for="#">D</label>
                        <input type="text" placeholder="Đáp án D" name="D4">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Dap an dung" class="truthy" name="dapAnDung">
                    </div>
                </ul>
                </div> -->
                <!-- <div class="list-ques">
                    <p>#Pytane 2</p>
                    <ul>
                        <li class="ques"><input type="text" placeholder="Nội dung câu hỏi...?"></li>
                        <div class="form-group">
                            <label for="#" >A</label>
                            <input type="text" placeholder="Đáp án A">
                        </div>
                        <div class="form-group">
                            <label for="#">B</label>
                            <input type="text" placeholder="Đáp án B">
                        </div>
                        <div class="form-group">
                            <label for="#" class="">C</label>
                            <input type="text" placeholder="Đáp án C">
                        </div>
                        <div class="form-group">
                            <label for="#">D</label>
                            <input type="text" placeholder="Đáp án D">
                        </div>
                       
                    </ul>
                </div> -->
                <a href="#" class="add-ques">Thêm câu hỏi +</a>
                    <div class="box-btn">
                        <input type="submit" class="btn btn-left" name="btn_create" id="myBtnn" value="kế tiếp">
                    </div>
            </form>
        </div>
            <!-- <div id="myModall" class="modal">
               <div class="modal-content">
                  <span class="close">&times;</span>
                  <div class="list-test2 list-test">
                    <h3>TẠO ĐỀ KIỀM TRA</h3>

                    <form action="#">
                        <div class="form-gr">
                            <label for="">Ngày bắt đầu kiểm tra</label>
                            <input type="text" placeholder="dd/mm/yy">
                        </div>
                        <div class="form-gr">
                            <label for="">Giờ bắt đầu kiểm tra</label>
                            <input type="text" placeholder="00 GIỜ 00 PHÚT 00 GIÂY">
                        </div>
                        <div class="form-gr">
                            <label for="">Ngày kết thúc kiểm tra</label>
                            <input type="text" placeholder="dd/mm/yy">
                        </div>
                        <div class="form-gr">
                            <label for="">Giờ kết thúc kiểm tra</label>
                            <input type="text" placeholder="dd/mm/yy">
                        </div>
                        <div class="form-gr">
                            <label for="">Số lần được kiểm tra</label>
                            <input type="number" placeholder="" value="1">
                        </div>
                        <div class="box-btn">
                            <button class="btn btn-left" id="">Xác nhận</button>
                        </div>
                    </form>
                </div>
               </div>
            </div> -->
    </div>
</div>
<?php get_footer() ?>