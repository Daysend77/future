<?php

class Model
{

  public static function addComments($name, $content)
  {
    $db = Db::connectToDb();
    $sql = "INSERT INTO future.comments (name, content, time, date) VALUES
    (:name, :content, CURRENT_TIME , CURRENT_DATE )";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':content', $content, PDO::PARAM_STR);
    $stmt->execute();
  }

  public static function getComments()
  {
    $db = Db::connectToDb();
    $sql = "SELECT name, content, DATE_FORMAT(time, '%H:%i') AS time, DATE_FORMAT(date, '%d.%m.%Y') AS date
    FROM future.comments";
    $stmt = $db->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

}
