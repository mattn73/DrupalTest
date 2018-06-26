<?php

namespace Drupal\custom_profile\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity;
use Drupal\image\Entity\ImageStyle;
use Drupal\file\FileInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
/**
 * Custom profile form block form
 */
class custom_profileBlockForm extends FormBase
{

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'CustomProfile_block_form';
    }

    /**
     * {@inheritdoc}
     */

    private $imageId;
    public function buildForm(array $form, FormStateInterface $form_state)
    {

        $form['Name'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Name'),
            '#default_value' => 'Write Your Name Here',
            '#description' => $this->t('What Your Name'),
        );

        $form['Email'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Email'),
            '#default_value' => 'info@example.com',
            '#description' => $this->t('What Your Email'),
        );

        $form['Address'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Address'),
            '#default_value' => 'Write Your Address Here',
            '#description' => $this->t('What Your Physical Adress'),
        );

        $form['image'] = array(
            '#type' => 'managed_file',
            '#title' => t('Block image'),
            '#size' => 40,
            '#description' => t("Image should be less than 400 pixels wide and in JPG format."),
            '#upload_location' => 'public://files',
        );

        // Submit.
        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Generate'),
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $Name = $form_state->getValue('Name');
        if (!ctype_alpha($Name)) {
            $form_state->setErrorByName('Name', $this->t('Name Shound only contain Aphalbet'));
        }

        $email = $form_state->getValue('Email');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $form_state->setErrorByName('Email', $this->t('Invalid '));
        }

        $image = $form_state->getValue('image');
        if (!isset($image)) {
        
            
             $form_state->setErrorByName('image', $this->t('Need Image '));
          

        }

    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        
        
//      $image = file_load($form_state->getValue('image')[0]->fid);
        
        //$imageId = $form_state->getValue('image')[0]->fid;
        
        $imageId= \Drupal::entityTypeManager()->getStorage('file')->load($form_state->getValue('image')[0]);
        $file = \Drupal\file\Entity\File::load($imageId->id());
        $file->setPermanent();
        $file->save();
        
        $url = \Drupal\image\Entity\ImageStyle::load('medium')->buildUrl($file->getFileUri());
       
//        $url = ImageStyle::load('myimagestyle')->buildUrl($image);
    
        $element = [
            'name' => $form_state->getValue('Name'),
            'email' => $form_state->getValue('Email'),
            'address' => $form_state->getValue('Address'),
            'image' => $url,

        ];
        \Drupal::state()->setMultiple($element);
    }
}
