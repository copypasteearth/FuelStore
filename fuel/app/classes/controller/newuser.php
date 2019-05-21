<?php
/**
 * author: John Rowan
 * class: csc 417 User Interfaces MW 5:45-7pm
 */
class Controller_newuser extends Controller_Base {
    /**
     * 
     * description: this is the initial entry to create a user page
     */
    public function action_createUser(){
        $data = [
  'username' => null,
                'email' => null,
            
];
        $validator = Validators::userValidator();
        $view = View::forge("authenticate/newuser.tpl",$data);
        $view->set_safe('validator', $validator);
        return $view;
    }
    /**
     * 
     * description: this is the reentrand action for creating a user 
     */
    public function action_userValidate(){
        $cancel = Input::param('cancel');
        if(!is_null($cancel)){
            return Response::redirect("/");
        }
        $validator = Validators::userValidator();
        $validated = $validator->run(Input::post());
            if($validated){
                $validData = $validator->validated();
                $user = Model_User::forge();
                $user->name = $validData['username'];
                $user->email = $validData['email'];
                $user->password = hash('sha256', $validData['password']);
                $user->save();
                return Response::redirect("authenticate/login");
                
            }
        $data = [
  'username' => Input::param('username'),
                'email' => Input::param('email')
            
];
        
        $view = View::forge("authenticate/newuser.tpl",$data);
        $view->set_safe('validator', $validator);
        return $view;
    }
    
}
