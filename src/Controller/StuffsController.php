<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Stuffs Controller
 *
 * @property \App\Model\Table\StuffsTable $Stuffs
 */
class StuffsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rooms', 'Teachers']
        ];
        $stuffs = $this->paginate($this->Stuffs);

        $this->set(compact('stuffs'));
        $this->set('_serialize', ['stuffs']);
    }

    /**
     * View method
     *
     * @param string|null $id Stuff id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stuff = $this->Stuffs->get($id, [
            'contain' => ['Rooms', 'Teachers']
        ]);

        $this->set('stuff', $stuff);
        $this->set('_serialize', ['stuff']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stuff = $this->Stuffs->newEntity();
        if ($this->request->is('post')) {
            $stuff = $this->Stuffs->patchEntity($stuff, $this->request->data);
            if ($this->Stuffs->save($stuff)) {
                $this->Flash->success(__('The stuff has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stuff could not be saved. Please, try again.'));
        }
        $rooms = $this->Stuffs->Rooms->find('list', ['limit' => 200]);
        $teachers = $this->Stuffs->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('stuff', 'rooms', 'teachers'));
        $this->set('_serialize', ['stuff']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stuff id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stuff = $this->Stuffs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stuff = $this->Stuffs->patchEntity($stuff, $this->request->data);
            if ($this->Stuffs->save($stuff)) {
                $this->Flash->success(__('The stuff has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stuff could not be saved. Please, try again.'));
        }
        $rooms = $this->Stuffs->Rooms->find('list', ['limit' => 200]);
        $teachers = $this->Stuffs->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('stuff', 'rooms', 'teachers'));
        $this->set('_serialize', ['stuff']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stuff id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stuff = $this->Stuffs->get($id);
        if ($this->Stuffs->delete($stuff)) {
            $this->Flash->success(__('The stuff has been deleted.'));
        } else {
            $this->Flash->error(__('The stuff could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
