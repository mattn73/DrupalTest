<?php

namespace Drupal\svg_grid\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\file\Entity;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;


class svg_gridController extends ControllerBase
{
    public function loadData()
    {
        $array = [];

        $node = Node::load($nid);

        $array['name'] = $node->field_name;
        $array['surname'] = $node->field_surname;
        $array['tel'] = $node->field_tel;
        $array['email'] = $node->field_email;
        $array['departement'] = $node->$field_department->target_id;
        $array['image'] = $node->field_photo->target_id;

    }

}
