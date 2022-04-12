<main>
    <div class="card-cont">

        <?php foreach($arr_disci as $disc) { ?>
            <div class="card">
                <img src="<?= $disc["image"] ?>" alt="">
                <h2 class="title">
                    <?= $disc["title"] ?>
                </h2>
                <p class="artist">
                    <?= $disc["artist"] ?>
                </p>
                <div class="year">
                    <?= $disc["year"] ?>
                </div>
            </div>
        <?php }?>


    </div>
</main>