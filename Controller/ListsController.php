<?php

class ListsController extends AppController {

    public $name = 'Lists';

    public $uses = array();

    public function index() {
        try {
            $lists = $this->mc->lists->getList();
            $this->set('lists', $lists['data']);
        } catch (Mailchimp_Error $e) {
            if ($e->getMessage()) {
                $this->Session->setFlash($e->getMessage(), 'flash_error');
            } else {
                $this->Session->setFlash('An unknown error occurred', 'flash_error');
            }
            $this->redirect('/');
        }
    }

    public function view() {
        try {
            $lists = $this->mc->lists->getList(array('list_id'=>$this->request->params['id']));
            $list = $lists['data'][0];
            $this->set('list', $list);
            $member_res = $this->mc->lists->members($list['id']);
            $this->set('members',$member_res['data']);
        } catch (Mailchimp_List_DoesNotExist $e) {
            $this->Session->setFlash('The list does not exist', 'flash_error');
            $this->redirect('/lists/');
        } catch (Mailchimp_Error $e) {
            if ($e->getMessage()) {
                $this->Session->setFlash($e->getMessage(), 'flash_error');
            } else {
                $this->Session->setFlash('An unknown error occurred', 'flash_error');
            }
            $this->redirect('/lists/');
        }
    }

    public function subscribe() {
        $id = $this->request->params['id'];
        $email = $this->request->data['email'];
        try {
            $this->mc->lists->subscribe($id, array('email'=>$email));
            $this->Session->setFlash('User subscribed successfully!', 'flash_success');
        } catch (Mailchimp_Error $e) {
            if ($e->getMessage()) {
                $this->Session->setFlash($e->getMessage(), 'flash_error');
            } else {
                $this->Session->setFlash('An unknown error occurred', 'flash_error');
            }
        }
        $this->redirect('/lists/'.$id);
    }
}
