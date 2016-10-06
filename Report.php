<?php
namespace halumein\report;

use Yii;
use yii\base\Component;
use yii\base\Exception;

class Report extends Component
{

    public function init()
    {
        parent::init();
    }

    public function getReportComponents()
    {
        if ($reportComponents = Module::getInstance()->componentList) {
            return $reportComponents;
        } else {
            throw new Exception("Could not find a list of components for the report. \n Check the configuration file.");
        }
    }

    public function getReportMethods($component)
    {
        if ( method_exists(Yii::$app->$component, 'getReportMethods') ) {
            return Yii::$app->$component->getReportMethods();
        } else {
            throw new Exception("The method getReportMethods() is not found in component '$component'");
        }
    }
}
