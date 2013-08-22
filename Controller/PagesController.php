<?php

class PagesController extends AppController {

    public function home() {
        try {
            $this->mc->helper->ping();
        } catch (Mailchimp_Invalid_ApiKey $e) {
            $this->Session->setFlash('The API key is invalid. Change it in Controller/AppController.php', 'flash_error');
        } catch (Mailchimp_Error $e) {
            if ($e->getMessage()) {
                $this->Session->setFlash($e->getMessage(), 'flash_error');
            } else {
                $this->Session->setFlash('An unknown error occurred', 'flash_error');
            }
        }
    }

}
