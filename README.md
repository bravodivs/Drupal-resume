1. create a folder called Custom in modules folder
2. create a folder of your module name {resume_creator}
3. in that folder, create the folder structure as follows:
    ->src->Controller->ResumeController.php
    ->src->Form->ResumeForm.php
    ->resume_creator.info.yml
    ->resume_creator.routing.yml
    ->resume_creator.install
4. in the info file, mention about the name, description and other details of the module.
5. in the routing file, mention the routes and the method to be rendered on thay route. refer the file for the syntax
6. in the controller file(ResumeController.php), define the function specified in the routing file
    and return a form through it. we use controller file to just route to the required methods as 
    per the path.
7. in the forms file(ResumeForm.php), specify the logic of the form you need to render.
    inherit the required methods(getid, submit, build)
    create form elements -> return the form
    save to db on submission