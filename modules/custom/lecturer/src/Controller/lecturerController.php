<?php

namespace Drupal\lecturer\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;


class lecturerController extends ControllerBase
{

    public function pager()
    {
        $header = array(
            // We make it sortable by name.
            array('data' => $this->t('Name')),
            array('data' => $this->t('surname')),
            array('data' => $this->t('email')),
        );

        $connection = \Drupal::service('lecturer.DB');
        $nids = $connection->getNode();
        $array = [];
        $index = 0;
        $rows = array();

        foreach ($nids as $nide) {
            foreach ($nide as $nid) {
                $index++;
                $node = Node::load($nid);

                $array[$index]['name'] = $node->get('field_name')->getValue();
                $array[$index]['surname'] = $node->get('field_surname')->getValue();
                $array[$index]['tel'] = $node->get('field_tel')->getValue();
                $array[$index]['email'] = $node->get('field_email')->getValue();
                $array[$index]['departement'] = $node->get('field_department')->getValue();
                //  $array[$index]['image'] = $node->get('field_photo')->getValue();

                $imageId = \Drupal::entityTypeManager()->getStorage('file')->load($node->field_photo->target_id);
                $file = \Drupal\file\Entity\File::load($imageId->id());
                $array[$index]['image'] = \Drupal\image\Entity\ImageStyle::load('svg_grid')->buildUrl($file->getFileUri());

                $rows[] = array('data' => array(
                    'name' => $array[$index]['name'][0]['value'],
                    'surname' =>  $array[$index]['surname'][0]['value'], // This hardcoded [BLOB] is just for display purpose only.
                    'email' => $array[$index]['email'][0]['value'], // This hardcoded [BLOB] is just for display purpose only.
                   
                ));

                }
            
        }
        // dvm($array[1]['name']);
        // dvm($array[1]['name'][0]['value']);
        // dvm($rows);

      

        // The table description.
        $build = array(
            '#markup' => t('List of All Lecturer'),
        );

        // Generate the table.
        $build['lecturer_table'] = array(
            '#theme' => 'table',
            '#header' => $header,
            '#rows' => $rows,
        );

        // Finally add the pager.
        $build['pager'] = array(
            '#type' => 'pager',
        );

        return $build;
    }

}
