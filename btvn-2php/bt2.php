<?php 
$schools = array(
    'Nổi bật nhất' => array(
        'NB01' => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7'
        ),
        'NB02' => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7'
        ),
        'NB03' => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7'
        ),
        'NB04' => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7'
        ),
    ),
    'Sản Phẩm Mới' => array(
        'GV01' => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7'
        ),
        'GV02' => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7'
        ),
        'GV03' => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7'
        ),
        'GV04' => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7'
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
        <div class="box">
        <?php foreach ($v as $k1 => $v1): ?>
            <div class="card">
        <li>
            <img src="<?php echo $v1['img']; ?>" alt="Ảnh sản phẩm">
            <p><span>Tên:</span><?php echo $v1['name']; ?></p>
            <p><span>Giá:</span><?php echo $v1['price']; ?></p>
            <p><span>Bình luận:</span><?php echo $v1['đánh giá']; ?></p>
        </li>
            </div>
        <?php endforeach; ?>
        </div>
    </ul>
    
    <?php 
    endforeach;
    ?>
</div>
<style>
    p{
        margin: 5px;
        
    }
    .card{
        width: 360px;
        
    }
    .box{
        display: flex;
        text-align: center;
    }
    .content{
        text-align: center;
    }
    ul{
        list-style-type: none;
    }
</style>