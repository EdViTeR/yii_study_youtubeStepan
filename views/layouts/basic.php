<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>qwe</title>
    <?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<h1>layout</h1>
	<?= $content ?>
	<?php $this->endBody() ?>
</body>
<?php $this->endPage() ?>
</html>