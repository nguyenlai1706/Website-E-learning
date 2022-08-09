<?php get_header() ?>
<?php get_menu() ?>
        <div class="content">
        <div class="container">
        <div class="list-test">
            <h3>CÂU HỎI</h3>
            <?php $count = 0; ?>
            <?php foreach($list_users as $list) { $count++ ?>
            <div class="list-ques">
            <form action="?mod=users&action=add" method="POST">
                <div >
                <p>#Pytane <?php echo $count ?></p>
                <ul style="">
                    <li class="ques"><input type="text" name="noidung" value="<?php echo $list['NoiDungCauHoi'] ?>" disabled readonly ></li>
                    <div class="form-group">
                        <label for="#" class="">A</label>
                        <input type="text" class="<?php if($list['DapAn'] == 'A' ) echo 'success' ?>"  name="D1" value="<?php echo $list['DAn1']  ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="#">B</label>
                        <input type="text" class="<?php if($list['DapAn'] == 'B' ) echo 'success' ?>" name="D2" value="<?php echo $list['DAn2']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="#">C</label>
                        <input type="text" class="<?php if($list['DapAn'] == 'C' ) echo 'success' ?>" name="D3" value="<?php echo $list['DAn3']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="#">D</label>
                        <input type="text" class="<?php if($list['DapAn'] == 'D' ) echo 'success' ?>" name="D4" value="<?php echo $list['DAn4'] ?>" readonly>
                    </div>
                </ul>
                </div>
            </form>
        </div>
        <?php } ?>
        </div>
<?php get_footer() ?>