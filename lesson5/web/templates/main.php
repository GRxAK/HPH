<div class="conteyner">

<?php foreach ($img as $key => $value): ?>
    <?php if (strpos($img[$key]['name_file'], 'small')) : ?>
        <a href="<?php openImg ($img, $key) ?>" >
            <img src="<?php echo ($img[$key]['sources'].$img[$key]['name_file']); ?>"></img>
            <p><?php echo $img[$key]['name_alt']?></p>
        </a>
    <?php endif ?>
<?php endforeach; ?>

</div>