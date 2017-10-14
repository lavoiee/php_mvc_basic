<?php
/**
 * Created by PhpStorm.
 * User: Eric Lavoie
 * Date: 10/13/2017
 * Time: 11:01 PM
 */
class View {

    private $model;



    public function __construct(Model $model) {

        $this->model = $model;

    }



    public function output() {

        return '<h1>' . $this->model->text .'</h1>';

    }



}