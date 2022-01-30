<div class="ml-5 p-5">
    <div class="container">
        <div class="row">
            <?php foreach ($content as $value) : ?>
                <div class="col-sm-3">
                    <?php if ($value->status == 1) : ?>
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header"><?= $value->title; ?></div>
                            <div class="card-body">
                                <!-- <h5 class="card-title"></h5> -->
                                <p class="card-text"><?= $value->description; ?></p>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header"><?= $value->title; ?></div>
                            <div class="card-body">
                                <!-- <h5 class="card-title"></h5> -->
                                <p class="card-text"><?= $value->description; ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>