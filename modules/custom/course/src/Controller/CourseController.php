<?php
namespace Drupal\course\Controller;

use Drupal\Core\Controller\ControllerBase;

class CourseController extends ControllerBase
{

    /**
     * Display the markup.
     *
     * @return array
     */

    function list() {

        $connection = \Drupal::service('course.MyDB');
        $result = $connection->getTitle();

        return [
            '#theme' => 'course',
            '#data' => $result,
        ];
    }

    /**
     * Constructs Lorem ipsum text with arguments.
     * This callback is mapped to the path
     * 'loremipsum/generate/{paragraphs}/{phrases}'.
     *
     * @param array $data
     *   The element in the CSV as array
     *
     */

    public function saveCsv($data)
    {

        // $data = file_get_contents('https://www.drupal.org/files/druplicon.small_.png');
        // $file = file_save_data($data, 'public://druplicon.png', FILE_EXISTS_REPLACE);

        foreach ($data as $lecture) {

            $connection = \Drupal::service('course.MyDB');
            $nid = $connection->getNode($lecture[0]);

            if (!isset($nid['nid'])) {
                $node = Node::create([
                    'type' => 'lectuer',
                    'title' => $lecture[0],
                    'field_name' => $lecture[0],
                    'field_surname' => $lecture[1],
                    'field_tel' => $lecture[2],
                    'field_email' => $lecture[3],
                    'field_department' => $lecture[4],
                    'field_photo' => $lecture[5],

                ]);
                $node->save();
            } else {

               $node = Node::load($nid['nid']);
                    
                $node->field_name = $lecture[0];
                $node->field_surname = lecture[1];
                $node->field_tel = $lecture[2];
                $node->field_email = $lecture[3];
                $node->field_department = $lecture[4];
                $node->field_photo = $lecture[5];

                
                $node->save();

                

            }

            


        }


        //send to twig
    }

}
