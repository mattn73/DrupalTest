<?php

namespace Drupal\course\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;


/**
 * Custom lectuer form block form
 */
class lectuerForm extends FormBase
{

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'lectuer_form';
    }

    /**
     * {@inheritdoc}
     */

    public function buildForm(array $form, FormStateInterface $form_state)
    {

        $form['csv'] = array(
            '#type' => 'managed_file',
            '#title' => t('CSV'),
            '#description' => t("Upload your csv"),
            '#upload_location' => 'public://files',
            '#required' => true,
            '#upload_validators' => array(
                'file_validate_extensions' => array('csv'),

            ),
        );

        // Submit.
        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Upload'),
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {

        $fileId = \Drupal::entityTypeManager()->getStorage('file')->load($form_state->getValue('csv')[0]);
        $fileCsv = \Drupal\file\Entity\File::load($fileId->id());

        $valid = true;
        if (($handle = fopen($fileCsv->getFileUri(), "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {

                $array[$row] = $data;
                $row++;

            }
            fclose($handle);
        }

        unset($array[1]);

        foreach ($array as $lecture) {
            $data = file_get_contents($lecture[5]);
            $imgName = explode("/", $lecture[5]);

            $a = getimagesize($data);
            $image_type = $a[2];

            if (!in_array($image_type, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
                $valid = false;
            }

        }

        if ($valid = false) {

            $form_state->setErrorByName('csv', $this->t('Invalid '));
        }

    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {

        $fileId = \Drupal::entityTypeManager()->getStorage('file')->load($form_state->getValue('csv')[0]);
        $fileCsv = \Drupal\file\Entity\File::load($fileId->id());

        // $file = fopen($fileCsv->getFileUri(), "r");
        // dvm($fileCsv->getFileUri());
        // print_r(fgetcsv($file));
        // dvm(fgetcsv($file));
        // fclose($file);

        $text;
        $row = 1;

        if (($handle = fopen($fileCsv->getFileUri(), "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {

                $array[$row] = $data;
                $row++;

            }
            fclose($handle);
        }

        unset($array[1]);

        // $form_state->setRedirect(
        //     'lecture.store',
        //     array(
        //       'data' => $array,

        //     )
        //   );

        foreach ($array as $lecture) {

            $data = file_get_contents($lecture[5]);
            $imgName = explode("/", $lecture[5]);
            $file = file_save_data($data, 'public://files' . end($imgName), FILE_EXISTS_REPLACE);

            $connection = \Drupal::service('course.MyDB');
            $nid = $connection->getNode($lecture[0]);

            $tid = $connection->getTerm($lecture[4]);
            if (empty($tid)) {

                $term = Term::create([
                    'name' => $lecture[4],
                    'vid' => 'department',
                ])->save();

            }


            //check if node exist or not

            if (empty($nid)) {
                $node = Node::create([
                    'type' => 'lecturer',
                    'title' => $lecture[0],
                    'field_name' => $lecture[0],
                    'field_surname' => $lecture[1],
                    'field_tel' => $lecture[2],
                    'field_email' => $lecture[3],
                    'field_department' => [
                        ['target_id' => $tid]
                      ],
                    'field_photo' => [
                        'target_id' => $file->id(),
                        'alt' => $lecture[0],
                        'title' => $lecture[0],
                    ],

                ]);
                $node->save();
                $node->field_yourfield_name[$node->language][0]['tid'] = $tid;

                drupal_set_message($lecture[0] . " " . $lecture[1] . " Created");

            } else {

                $node = Node::load($nid);
                $node->type = 'lecturer';
                $node->field_name = $lecture[0];
                $node->field_surname = $lecture[1];
                $node->field_tel = $lecture[2];
                $node->field_email = $lecture[3];
                $field_department = array(
                    ['target_id' => $tid]
                );

                $node->field_department = $field_department;
                $field_photo = array(
                    'target_id' => $file->id(),
                    'alt' => $lecture[0],
                    'title' => $lecture[0],
                );

                $node->field_photo = $field_photo;

                $node->save();

                drupal_set_message($lecture[0] . " " . $lecture[1] . " Updated");

            }

        }

    }

    public function checkTaxo($name)
    {

        $connection = \Drupal::service('course.MyDB');
        $tid = $connection->getTerm($name);

        if (empty($tid)) {

            $term = Term::create([
                'name' => $name,
                'vid' => 'department',
            ])->save();

        }

    }
}
