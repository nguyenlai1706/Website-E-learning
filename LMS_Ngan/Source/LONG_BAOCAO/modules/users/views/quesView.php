<?php get_header() ?>

<?php get_menu() ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<div class="content">
    <div class="container">
        <div class="list-posts">
            <h3>TẠO ĐỀ KIỂM TRA</h3>
            <form action="?mod=users&action=show" method="POST">
                <div class="form-row">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="inputCity">Mã đề</label>
                            <input type="text" class="form-control" name="made" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputZip">Thời gian</label>
                            <input type="text" class="form-control" name="time" id="inputZip">
                        </div>
                    </div>
                    <style>
                        .list-group li {
                            width: 100%;
                            margin: 8px;
                        }

                        .list-group li .check {
                            margin-right: 20px;
                            width: 30px;

                        }
                    </style>
                    <ul class="list-group col-md-4">
                        <h3>Danh sách câu hỏi</h3>
                        <?php foreach ($list_users as $list) {
                        ?>
                            <li class="list-group-item disabled">
                                <input class="check" type="checkbox" name="cauhoi" id="<?php echo $list['MaCauHoi'] ?>"><?php echo $list['NoiDungCauHoi'] ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php get_footer() ?>