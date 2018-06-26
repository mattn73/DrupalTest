<?php

namespace Drupal\svg_grid;

use Drupal\Core\Database\Connection;

class MyDB {

  protected $database;

  public function __construct(Connection $database) {
    $this->database = $database;
  }

  public function getNode() {
    $connection = \Drupal::database();
    $query = $connection ->select('node_field_data', 'n'  );
    $query->fields('n', ['nid']);
    $query->condition('n.type','lecturer');
    $result = $query->execute()->fetchAll();
    
    return $result;
  }

  public function getTerm($name) {
    $connection = \Drupal::database();
    $query = $connection ->select('taxonomy_term_field_data', 't'  );
    $query->fields('t', ['tid']);
    $query->condition('t.name',$name);
    $query->condition('t.vid','department');
    $result = $query->execute()->fetchField();
    
    return $result;
  }


}