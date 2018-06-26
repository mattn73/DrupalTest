<?php

namespace Drupal\custom_profile\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\file\Entity;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;


/**
 * Provides a 'CustomProfile' Block.
 *
 * @Block(
 *   id = "customprofile_block",
 *   admin_label = @Translation("Custom Profile"),
 *
 * )
 */

class custom_profile_block extends BlockBase implements BlockPluginInterface
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {

        $element = [
            'name',
            'email',
            'address',
            'image',

        ];

        // $item = \Drupal::state()->get('name');
        $item = \Drupal::state()->getMultiple($element);

        //\Drupal::state()->set('key',$item);
        return [
            '#theme' => 'custom_profile',
            '#data' => $item,
        ];

    }

}
