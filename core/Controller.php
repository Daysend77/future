<?php

class Controller
{

  public static function actionAdd()
  {
    $name = $_POST['name'];
    $content = $_POST['content'];
    Model::addComments($name, $content);

  }

  public static function actionShow()
  {
    $comments = [];
    $comments = Model::getComments();
    return $comments;
  }
}
