<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * T2Itops Controller
 *
 * @property \App\Model\Table\T2ItopsTable $T2Itops
 *
 * @method \App\Model\Entity\T2Itop[] paginate($object = null, array $settings = [])
 */
class T2ItopsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $names = $this->loadComponent('Names')->create_name_array();
        $depts = $this->loadcomponent('Depts')->create_depts_array();
        // $this->set('names', $names);
        $this->set(compact('names', 'depts'));
        $this->set('_serialize', ['names']);
    }

    /**
     * View method
     *
     * @param string|null $id T2 Itop id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $t2Itop = $this->T2Itops->get($id, [
            'contain' => []
        ]);

        $this->set('t2Itop', $t2Itop);
        $this->set('_serialize', ['t2Itop']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $t2Itop = $this->T2Itops->newEntity();
        if ($this->request->is('post')) {
            $t2Itop = $this->T2Itops->patchEntity($t2Itop, $this->request->getData());
            if ($this->T2Itops->save($t2Itop)) {
                $this->Flash->success(__('The t2 itop has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The t2 itop could not be saved. Please, try again.'));
        }
        $this->set(compact('t2Itop'));
        $this->set('_serialize', ['t2Itop']);
    }

    /**
     * Edit method
     *
     * @param string|null $id T2 Itop id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $t2Itop = $this->T2Itops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $t2Itop = $this->T2Itops->patchEntity($t2Itop, $this->request->getData());
            if ($this->T2Itops->save($t2Itop)) {
                $this->Flash->success(__('The t2 itop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The t2 itop could not be saved. Please, try again.'));
        }
        $this->set(compact('t2Itop'));
        $this->set('_serialize', ['t2Itop']);
    }

    /**
     * Delete method
     *
     * @param string|null $id T2 Itop id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $t2Itop = $this->T2Itops->get($id);
        if ($this->T2Itops->delete($t2Itop)) {
            $this->Flash->success(__('The t2 itop has been deleted.'));
        } else {
            $this->Flash->error(__('The t2 itop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
