<!-- open good -->

<?php if ($_GET['goodCard']) : ?>
<div class="card goodsConteyner">
    <img src="<?php openImg ($img, $_GET['goodCard']) ?>">
    <h5 class="card-title"><?php echo $img[$_GET['goodCard']]['name_alt']?></h5>
    <p class="card-text"><?php echo $img[$_GET['goodCard']]['description']?></p>
    <form method="get">
        <button type="submit" name="goodClose" value="true" class="btn btn-primary" >Назад</button>
    </form>
</div>
<?php endif ?>


<!-- goods -->
<div class="row goodsConteyner">
<?php foreach ($img as $key => $value): ?>
    <?php if (!isset($_GET['goodCard'])) : ?>
    <?php if (strpos($img[$key]['name_file'], 'small')) : ?>
    <div class="col-6 col-md-4 goodsCard">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo ($img[$key]['sources'].$img[$key]['name_file']); ?>" class="card-img-top" alt="<?php echo $img[$key]['name_alt']?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $img[$key]['name_alt']?></h5>
                <form method="get">
                    <button type="submit" name="goodCard" value="<?php echo ($key); ?>" class="btn btn-primary" >Подробнее</button>
                </form>
            </div>
        </div>
    </div>
    <?php endif ?>
    <?php endif ?>
<?php endforeach; ?>
</div>