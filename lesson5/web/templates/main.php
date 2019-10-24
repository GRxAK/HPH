<div class="conteyner">

<!-- калькулятор -->
<form class="calculator" method="get">
    <input type="number" name="calcX" placeholder="2">

    <button type="submit" name="calcMatch" value="+"><p>+</p></button>
    <button type="submit" name="calcMatch" value="-"><p>-</p></button>
    <button type="submit" name="calcMatch" value="*"><p>*</p></button>
    <button type="submit" name="calcMatch" value="/"><p>/</p></button>

    <input type="number" name="calcY" placeholder="1">
    <p class="calculator-equally">=</p>
    <p class="calculator-result">
<?php echo calculet($_GET['calcX'], $_GET['calcY'], $_GET['calcMatch']) ?>
    </p>
</form>

<!-- отзывы -->
<form class="recall" method="post">
    <textarea name="recall" cols="30" rows="10" placeholder="Оставет отзыв"></textarea>
    <button type="submit">Отправить</button>
</form>

</div>