<?php if ($status) : ?>
    <?php foreach ($content as $value) : ?>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header"><?= $value->title; ?></div>
            <div class="card-body">
                <!-- <h5 class="card-title"></h5> -->
                <p class="card-text"><?= $value->description; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <?php foreach ($content as $val) : ?>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header"><?= $val->title; ?></div>
            <div class="card-body">
                <!-- <h5 class="card-title"></h5> -->
                <p class="card-text"><?= $val->description; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>