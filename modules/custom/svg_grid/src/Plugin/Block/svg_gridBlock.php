<?php

namespace Drupal\svg_grid\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\file\Entity;
use Drupal\image\Entity\ImageStyle;
use Drupal\node\Entity\Node;

/**
 *
 *
 * @Block(
 *   id = "svg_grid",
 *   admin_label = @Translation("SVG GRID"),
 *
 * )
 */

class svg_gridBlock extends BlockBase implements BlockPluginInterface
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {

        $connection = \Drupal::service('svg_grid.MyDB');
        $nids = $connection->getNode();
        $array = [];
        $index = 0;
        

       
        foreach ($nids as $nide) {
            foreach ($nide as $nid) {
                $index++;
                $node = Node::load($nid);

                $array[$index]['name'] = ($node->get('field_name')->getValue())[0]['value'];
                $array[$index]['surname'] = ($node->get('field_surname')->getValue())[0]['value'];
                $array[$index]['tel'] = ($node->get('field_tel')->getValue())[0]['value'];
                $array[$index]['email'] = ($node->get('field_email')->getValue())[0]['value'];
                $array[$index]['departement'] = ($node->get('field_department')->getValue())[0]['value'];
                // $array[$index]['image'] = $node->get('field_photo')->getValue();

                $imageId = \Drupal::entityTypeManager()->getStorage('file')->load($node->field_photo->target_id);
                $file = \Drupal\file\Entity\File::load($imageId->id());
                $array[$index]['image'] = \Drupal\image\Entity\ImageStyle::load('svg_grid')->buildUrl($file->getFileUri());

            }
        }
        dvm($array);

        return [
            '#theme' => 'svg_grid',
            '#data' => $array,
        ];

    }

}
