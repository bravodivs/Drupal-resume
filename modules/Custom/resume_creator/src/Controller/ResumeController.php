<?php

namespace Drupal\resume_creator\Controller;

use Drupal\Core\Controller\ControllerBase;

class ResumeController extends ControllerBase
{
    public function showForm()
    {
        $form = \Drupal::formBuilder()->getForm('Drupal\resume_creator\Form\ResumeForm');
        return $form;
    }
    public function showResume($id)
    {
        
        $values = \Drupal::database()->select('resume_info', 'r')
            ->fields('r')
            ->condition('id', $id)
            ->execute()->fetchAll();
        if(!$values || count($values)==0){
            return [
                "#markup"=>"Id not found.",
            ];
        }
        return [
            '#theme' => 'my_template',
            '#test_var' => $values,
        ];
    }
}
