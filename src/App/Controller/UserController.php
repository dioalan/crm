<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;

class UserController extends AppController
{


    public function create()
    {
        $entry = $this->collection->newInstance()->set($this->getCriteria());

        $this->data['entry'] = $entry;

        if ($this->request->isPost()) {
            try {

                $post = $this->request->getBody();
                $result = $entry->set($this->request->getBody())->save();

                if ($post['role']['0']=='3') {
                    $operasional = Norm::factory('Operasional')->newInstance();
                    $operasional->set('nama_operasional', $post['first_name']);
                    $operasional->save();

                } elseif ($post['role']['0']=='6') {
                    $customer = Norm::factory('Customer')->newInstance();
                    $customer->set('nama_customer', $post['first_name']);
                    $customer->save();
                    
                }

                h('notification.info', $this->clazz.' created.');

                h('controller.create.success', array(
                    'model' => $entry
                ));
            } catch (Stop $e) {
                throw $e;
            } catch (Exception $e) {
                // no more set notification.error since notificationmiddleware will
                // write this later
                // h('notification.error', $e);

                h('controller.create.error', array(
                    'model' => $entry,
                    'error' => $e,
                ));

                // rethrow error to make sure notificationmiddleware know what todo
                throw $e;
            }
        }

    }

   
   
    

}