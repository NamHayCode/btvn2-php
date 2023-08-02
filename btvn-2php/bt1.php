<?php 
$schools = array(
    'students' => array(
        'SV01' => array(
            'name' => 'Phan Van Cuong',
            'birth' => '10/11/1988',
            'gender' => 'Nam'
        ),
        'SV02' => array(
            'name' => 'Phan Van Cuong2',
            'birth' => '10/11/1988',
            'gender' => 'Nam'
        ),
        'SV03' => array(
            'name' => 'Phan Van Cuong3',
            'birth' => '10/11/1988',
            'gender' => 'Nu'
        ),
        'SV04' => array(
            'name' => 'Phan Van Cuong4',
            'birth' => '10/11/1988',
            'gender' => 'Nu'
        ),
    ),
    'teacher' => array(
        'GV01' => array(
            'name' => 'Tran thien thanh',
            'birth' => '10/11/1988',
            'gender' => 'Nam'
        ),
        'GV02' => array(
            'name' => 'Tran thien thanh2',
            'birth' => '10/11/1988',
            'gender' => 'Nam'
        ),
        'GV03' => array(
            'name' => 'Tran thien thanh3',
            'birth' => '10/11/1988',
            'gender' => 'Nu'
        ),
        
    )
    );
?>

<div class="content">
    <?php 
    foreach ($schools as $k => $v):
    ?>
    <h1 class="list_title"><?php echo $k; ?></h1>
    <ul class="list_schools">
        <?php foreach ($v as $k1 => $v1): ?>
        <li>
            <p><span>Masv:</span><?php echo $k1; ?></p>
            <p><span>tên:</span><?php echo $v1['name']; ?></p>
            <p><span>Ngày sinh:</span><?php echo $v1['birth']; ?></p>
            <p><span>Giới tính:</span><?php echo $v1['gender']; ?></p>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php 
    endforeach;
    ?>
</div>
