<h1>Hello</h1>
<?php if (!empty($names)) : ?>
    <?php foreach ($names as $name) : ?>
        <?= $name->id ?> = <?= $name->name ?><br>
    <?php endforeach; ?>
<?php endif; ?>