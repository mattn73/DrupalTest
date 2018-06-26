<?php

namespace Drupal\course;

use Drupal\Core\Database\Connection;

class MyDB {

  protected $database;

  public function __construct(Connection $database) {
    $this->database = $database;
  }

  public function getTitle() {
    $connection = \Drupal::database();
    $query = $connection ->select('node_field_data', 'c'  );
    $query->join('taxonomy_index','tf','c.nid = tf.nid');
    $query->join('taxonomy_term_field_data','ttf', 'tf.tid = ttf.tid');
    $query->fields('c', ['title']);
    $query->fields('ttf', ['name']);
    $query->condition('c.type','courses');


    $result = $query->execute()->fetchAll();
    
    return $result;
  }


  public function getNode($title) {
    $connection = \Drupal::database();
    $query = $connection ->select('node_field_data', 'n'  );
    $query->fields('n', ['nid']);
    $query->condition('n.title',$title);
    $result = $query->execute()->fetchField();
    
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