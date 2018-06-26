<?php

namespace Drupal\lecturer;

use Drupal\Core\Database\Connection;

class DB {

  protected $database;

  public function __construct(Connection $database) {
    $this->database = $database;
  }


  public function getNode() {
    $connection = \Drupal::database();
    $query = $connection ->select('node_field_data', 'n'  );
    $query->fields('n', ['nid']);
    $query->condition('n.type','lecturer');
    $pager = $query->extend('Drupal\Core\Database\Query\PagerSelectExtender')->limit(10);
    $result = $pager->execute()->fetchAll();
    
    return $result;
  }

}