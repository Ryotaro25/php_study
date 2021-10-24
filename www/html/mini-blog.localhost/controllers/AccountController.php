<?php
class AccountController extends Controller
{
    public function signupAction()
    {
        return $this->render(array(
            'user_name' => '',
            'password' => '',
            '_token' => $this->generateCsrfToken('account/signup'),
        ));
    }
    
    public function registerAction()
    {
        if (!$this->request->isPost()) {
            $this->forward404();
        }

        //to check csrf
        $token = $this->request->getPost('_token');
        if (!$this->checkCsrfToken('account/signup', $token)) {
            return $this->redirect('/account/signup');
        }

        $user_name = $this->request->getPost('user_name');
        $password = $this->request->getPost('password');

        $errors = array();

        if (!strlen($user_name)) {
            $errors[] = 'please input User ID';
        } else if (!preg_match('/^\w{3,20}$/', $user_name)) {
            $errors[] = 'please inpu user name and password within 3~20';
        } else if (!$this->db_manager->get('User')->isUniqueUserName($user_name)) {
            $errors[] = 'this user id has alredy used';
        }

        if (!strlen($password)) {
            $errors[] = 'please input passwprd';
        } else if (4 > strlen($password) || strlen($password) > 30) {
            $errors[] = 'please input password within 4~30';
        }

        if (count($errors) === 0) {
            $this->db_manager->get('User')->insert($user_name, $password);

            $this->session->setAuthenticated(true);
            $user = $this->db_manager->get('User')->fetchByUserName($user_name);
            $this->session->set('user', $user);

            return $this->redirect('/');
        }

        return $this->render(array(
            'user_name' => $user_name,
            'password' => $password,
            'errors' => $errors,
            '_token' => $this->generateCsrfToken('account/sinup'),
        ), 'signup');
    }
}