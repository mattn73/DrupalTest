<?php

namespace Drupal\lecturer\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\node\Entity\Node;

/**
 * Provides a 'Lecturer Block ' Block.
 *
 * @Block(
 *   id = "Lectuer_block",
 *   admin_label = @Translation("Lecturer"),
 *
 * )
 */

class lecturerBlock extends BlockBase implements BlockPluginInterface
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {

        $connection = \Drupal::service('lecturer.DB');
        $nids = $connection->getNode();
        $array = [];
        $index = 0;
        

    
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

            }
        }
        

        return [
            '#theme' => 'lecturer',
            '#data' => $array,
        ];

     

    }

}
