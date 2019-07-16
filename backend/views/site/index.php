<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Shop admin panel';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="<?= Url::toRoute('/product') ?>" class="list-group-item active">
                        Products
                    </a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>

    </div>
</div>
