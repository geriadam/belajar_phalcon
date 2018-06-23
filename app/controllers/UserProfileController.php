<?php

class UserProfileController extends ControllerBase
{

    public function indexAction()
    {
        $view = new \Phalcon\Mvc\View();
        $userProfile = UserProfile::find();
        //echo "<pre>".print_r($userProfile,1)."</pre>";die();
        $this->view->userprofile = $userProfile;
    }
     
    public function createAction()
    {
        
    }
    
    public function editAction($id)
    {
        $userProfile = UserProfile::findFirst($id);
        $this->view->userprofile = $userProfile;
    }
    
    public function storeAction()
    {
        $post = $this->request->getPost();
        $modelUserProfile = new UserProfile();
        if (!$modelUserProfile->create($post)) {
            $this->view->errors = [];
            foreach ($modelUserProfile->getMessages() as $err)
                array_push($this->view->errors, [
                    "field"     => $err->getField(),
                    "message"   => $err->getMessage()
                  ]);
        }
        
        $this->view->data = $modelUserProfile;
        $this->flashSession->success("Data sudah di simpan");
        $this->response->redirect('userprofile');
    }
    
    
    public function updateAction()
    {
        $post = $this->request->getPost();
        $modelUserProfile = UserProfile::findFirst($this->request->getPost("user_profile_id"));
        if (!$modelUserProfile->update($post)) {
            $this->view->errors = [];
            foreach ($modelUserProfile->getMessage() as $err)
                array_push($this->view->errors, [
                    "field"     => $err->getField(),
                    "message"   => $err->getMessage(),
                    ]);
            return;
        }
        $this->view->data = $modelUserProfile;
        $this->flashSession->success("Data sudah di update");
        $this->response->redirect('userprofile');
    }
    
    public function deleteAction($id)
    {
        $userProfile = UserProfile::findFirst($id);
        $userProfile->delete();
        $this->flashSession->success("Data sudah di hapus");
        return $this->response->redirect('userprofile');
    }

}

