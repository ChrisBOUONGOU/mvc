<?php

namespace app\controllers;

use kurisushinjiro\phpmvc\Application;
use kurisushinjiro\phpmvc\Controller;
use kurisushinjiro\phpmvc\Request;
use kurisushinjiro\phpmvc\Response;
use app\models\ContactForm;

/**
 * Class SiteController
 * 
 * @author Chris Boukongou <chrisbouk@outlook.fr>
 * @package app\controllers
 */

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Chris"
        ];
        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }
}
