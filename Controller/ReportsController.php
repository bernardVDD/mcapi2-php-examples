<?php

class ReportsController extends AppController {

    public $name = 'Reports';

    public $uses = array();

    public function index() {
        try {
            $campaign_res = $this->mc->campaigns->getList(array('status'=>'sent'));
            $this->set('campaigns', $campaign_res['data']);
        } catch (Mailchimp_Error $e) {
            if ($e->getMessage()) {
                $this->Session->setFlash($e->getMessage(), 'flash_error');
            } else {
                $this->Session->setFlash('An unknown error occurred', 'flash_error');
            }
            $this->redirect('/');
            return;
        }
    }

    public function view() {
        try {
            $campaign_id = $this->request->params['id'];
            $campaigns_res = $this->mc->campaigns->getList(array('campaign_id'=>$campaign_id));
            $this->set('campaign', $campaigns_res['data'][0]);
            $report = $this->mc->reports->summary($campaign_id);
            $this->set('report', $report);
        } catch (Mailchimp_Campaign_DoesNotExist $e) {
            $this->Session->setFlash('The campaign does not exist', 'flash_error');
            $this->redirect('/reports');
        } catch (Mailchimp_Error $e) {
            if ($e->getMessage()) {
                $this->Session->setFlash($e->getMessage(), 'flash_error');
            } else {
                $this->Session->setFlash('An unknown error occurred', 'flash_error');
            }
            $this->redirect('/reports');
        }
    }

}
