<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 10/13/2017
 * Time: 11:01 PM
 */
include_once("./Model/model.php");
include_once("./View/view.php");

class Controller {

    private $model;


    /**
     * Controller constructor.
     */
    public function __construct() {
        $model = new Model();
        $view = new View($model);
        echo $view->output();
    }

}