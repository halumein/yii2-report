<?php
namespace halumein\spending;

use yii;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if(!$app->has('report')) {
            $app->set('report', ['class' => 'halumein\spending\report']);
        }
    }
}
