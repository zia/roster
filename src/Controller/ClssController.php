<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clss Controller
 *
 * @property \App\Model\Table\ClssTable $Clss
 */
class ClssController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rooms']
        ];
        $clss = $this->paginate($this->Clss);

        $this->set(compact('clss'));
        $this->set('_serialize', ['clss']);
    }

    /**
     * View method
     *
     * @param string|null $id Cls id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cls = $this->Clss->get($id, [
            'contain' => ['Rooms']
        ]);

        $this->set('cls', $cls);
        $this->set('_serialize', ['cls']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        

        $cls = $this->Clss->newEntity();
        if ($this->request->is('post')) {
            $cls = $this->Clss->patchEntity($cls, $this->request->data);
            if ($this->Clss->save($cls)) {
                $this->Flash->success(__('The cls has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cls could not be saved. Please, try again.'));
        }
        $rooms = $this->Clss->Rooms->find('list', ['keyField' => 'id','valueField' => array('name','description'),'limit' => 200]);
        $this->set(compact('cls', 'rooms'));
        $this->set('_serialize', ['cls']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cls id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cls = $this->Clss->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cls = $this->Clss->patchEntity($cls, $this->request->data);
            if ($this->Clss->save($cls)) {
                $this->Flash->success(__('The cls has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cls could not be saved. Please, try again.'));
        }
        $rooms = $this->Clss->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('cls', 'rooms'));
        $this->set('_serialize', ['cls']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cls id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cls = $this->Clss->get($id);
        if ($this->Clss->delete($cls)) {
            $this->Flash->success(__('The cls has been deleted.'));
        } else {
            $this->Flash->error(__('The cls could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
