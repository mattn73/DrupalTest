<?php

namespace Drupal\custom_profile\Controller;

use Drupal\Core\Url;
use Drupal\Component\Utility\Html;
use Drupal\Core\Entity\EntityInterface;



class custom_profileController {



  public function SaveData($Name,$Email,$Address,$Image) {
    $config = \Drupal::config('CustomProfile.settings');

      $element = [
        'name' =>$Name ,
        'email' => $Email,
        'address' => $Address,
        'image' => $Image

      ];

    \Drupal::state()->setMultiple($element);
    \Drupal::state()->set('name',$Name);
    \Drupal::state()->set('email',$Email);
    \Drupal::state()->set('address',$Address);
    \Drupal::state()->set('image',$Image);


  }
  public function LoadData($Name,$Email,$Address,$Image) {
    $config = \Drupal::config('CustomProfile.settings');



    $Name = \Drupal::state()->set('name');
    $Email = \Drupal::state()->set('email');
    $Address = \Drupal::state()->set('address');
    $Image = \Drupal::state()->set('image');

    $image = $this->configuration['image'];
    if (!empty($image[0])) {
    if ($file = File::load($image[0])) {
      $build['image'] = [
       '#theme' => 'image_style',
       '#style_name' => 'medium',
       '#uri' => $file->getFileUri(),
      ];
    }
}

  }


  



}



