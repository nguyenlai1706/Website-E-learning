<?php get_header() ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<?php get_menu() ?>
<div class="container">
    <?php $courseName = 'TOÁN';
    if ($_GET['q'] == 'van') $courseName = 'VĂN';
    if ($_GET['q'] == 'anh') $courseName = 'TIẾNG ANH';
    if ($_GET['q'] == 'su') $courseName = 'LỊCH SỬ';
    if ($_GET['q'] == 'gdcd') $courseName = 'GDCD';
    if ($_GET['q'] == 'hoa') $courseName = 'HÓA';
    if ($_GET['q'] == 'ly') $courseName = 'VẬT LÝ';

    ?>
    <h1 class="text-center mb-5 ">BẢNG ĐIỂM MÔN <?php echo $courseName ?> </h1>
    <table class="table table-bordered text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>

                <th scope="col">Tên môn học</th>
                <th scope="col">Thường kỳ 1</th>
                <th scope="col">Thường kỳ 1</th>
                <th scope="col">Giữa kỳ</th>
                <th scope="col">Cuối kỳ</th>
                <th class="text-danger" scope="col">TRUNG BÌNH</th>
            </tr>
        </thead>
        <?php $count = 0;
        foreach ($list_score as $course) {
            $count++;
            if ($course['nameCourse'] == $_GET['q']) {
        ?>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th><?php echo $course['MainName'];
                            ?></th>
                        <th><?php echo $course['TK1'] ?></th>
                        <th><?php echo $course['TK2'] ?></th>
                        <th><?php echo $course['GK'] ?></th>
                        <th><?php echo $course['CK'] ?></th>
                        <th class="text-success"><?php echo ((($course['TK1'] + $course['TK1']) / 2) * 2 + ($course['GK'] * 3) + $course['CK'] * 5) / 10 ?></th>

                    </tr>
                </tbody>
        <?php }
        } ?>
        </tr>
    </table>
    <img style="width:60%;" src="https://previews.123rf.com/images/tao00/tao002003/tao00200300221/143155922-estudiante-de-una-buena-puntuaci%C3%B3n.jpg" alt="">
</div>
<?php get_footer() ?>