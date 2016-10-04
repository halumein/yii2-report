<?php
namespace halumein\report;

use yii;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if(!$app->has('report')) {
            $app->set('report', ['class' => 'halumein\report\report']);
        }
    }
}
