<?php

namespace Drupal\resume_creator\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ResumeForm extends FormBase
{
    public function getFormId()
    {
        // unique id of the form
        return 'resume_form';
    }
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['user_details'] = [
            '#type' => 'details',
            '#value' => 'Personal Details',
            '#title' => 'Personal Details',

        ];
        $form['user_details']['name'] = [
            '#type' => 'textfield',
            '#placeholder' => $this->t("Name"),
            '#required' => TRUE,
        ];
        $form['user_details']['email'] = [
            '#type' => 'textfield',
            '#placeholder' => $this->t("E-mail"),
            '#required' => TRUE,
        ];
        $form['user_details']['phone'] = [
            '#type' => 'tel',
            '#placeholder' => $this->t("phone"),
            '#required' => TRUE,
        ];
        $form['user_details']['address'] = [
            '#type' => 'textfield',
            '#placeholder' => $this->t("Address"),
            '#required' => TRUE,
        ];

        $form['education'] = [
            '#type' => 'details',
            '#value' => 'Educational Qualifications',
            '#title' => 'Educational Details'
        ];
        $form['education']['pg'] = [
            '#type' => 'textfield',
            '#placeholder' => $this->t("Post Graduation"),
            '#default' => "NA"
        ];
        $form['education']['ug'] = [
            '#type' => 'textfield',
            '#placeholder' => $this->t("Graduation"),
            '#default' => "NA"
        ];
        $form['education']['tenth'] = [
            '#type' => 'textfield',
            '#placeholder' => $this->t("10th"),
            '#required' => TRUE,
        ];

        $form['skills'] = [
            '#type' => 'details',
            '#value' => 'Skill set',
            '#title' => 'Skill sets / Internships'
        ];
        $form['skills']['intern'] = [
            '#type' => 'textfield',
            '#placeholder' => $this->t("Internships/Employment details"),
            '#required' => TRUE,

        ];
        $form['skills']['skill'] = [
            '#type' => 'textfield',
            '#placeholder' => $this->t("Skills"),
            '#required' => TRUE,

        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t("Submit Details"),
        ];

        return $form;
    }
    public function submitForm(&$form, FormStateInterface $form_state)
    {

        $values = $form_state->getValues();
        $fields = [];
        $table = 'resume_info';
        foreach ($values as $field_name => $value) {
            if ($field_name == 'submit')
                break;
            $fields[$field_name] = $value;
        }

        $query = \Drupal::database()->insert($table)->fields($fields)->execute();

        if ($query)
            \Drupal::messenger()->addMessage("Data added");
        else \Drupal::messenger()->addError("Error adding the data");


        $last_row = \Drupal::database()
        ->select($table, 'r')
        ->fields('r', ['id'])
        ->orderBy('id', 'DESC')
        ->range(0, 1)
        ->execute()
        ->fetchAssoc();
        
        // \Drupal::messenger()->addMessage($id['id']);
        $form_state->setRedirect('resume_creator.display', ['id' => $last_row['id']]);
    }
    public function generateResume(array &$form, FormStateInterface $form_state)
    {
    }
}
