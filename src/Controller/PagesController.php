<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path) {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }

    public function index() {
        
    }

    public function download() {
        $file_path = WWW_ROOT . 'uploads' . DS . 'Gaurav_Resume.pdf';
        $this->response->file($file_path, array(
            'download' => true,
            'readfile' => TRUE,
            'name' => 'Gaurav_Resume.pdf',
        ));
        return $this->response;
    }

    public function add() {
        $this->autoRender = FALSE;
        $this->Contact = TableRegistry::get('Contact');

        $contact = $this->Contact->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->data;

            $contact = $this->Contact->patchEntity($contact, $data);

            if ($this->Contact->save($contact)) {
               
//                $body = __('Welcome {0},<br/><br/>Thank you for send query. I will conatct you soon.<br/><br/>Thanks,<br/>Gaurav Kumar',[$contact['first_name']]);
//                $email = new Email('default');
//                $email->from(['ngauravkumar@gmail.com' => 'Gaurav Kumar'])
//                        ->to($contact->email)
//                        ->subject('Thank You For Query')
//                        
//                        ->send($body);

                $this->Flash->success(__('Your Query Was Sent.'));

                return $this->redirect(['controller' => 'Pages', 'action' => 'index']);
            }
            $this->Flash->error(__('The contact could not be saved. Please, try again.'));
        }
        $this->set(compact('contact'));
        $this->set('_serialize', ['contact']);
    }

}
