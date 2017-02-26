<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rosters Controller
 *
 * @property \App\Model\Table\RostersTable $Rosters
 */
class RostersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clss', 'Teachers']
        ];
        $rosters = $this->paginate($this->Rosters);

        $this->set(compact('rosters'));
        $this->set('_serialize', ['rosters']);
    }

    /**
     * View method
     *
     * @param string|null $id Roster id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roster = $this->Rosters->get($id, [
            'contain' => ['Clss', 'Teachers', 'Attendences']
        ]);

        $this->set('roster', $roster);
        $this->set('_serialize', ['roster']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roster = $this->Rosters->newEntity();
        if ($this->request->is('post')) {
            $roster = $this->Rosters->patchEntity($roster, $this->request->data);
            if ($this->Rosters->save($roster)) {
                $this->Flash->success(__('The roster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roster could not be saved. Please, try again.'));
        }
        $clss = $this->Rosters->Clss->find('list', ['limit' => 200]);
        $teachers = $this->Rosters->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('roster', 'clss', 'teachers'));
        $this->set('_serialize', ['roster']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Roster id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roster = $this->Rosters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roster = $this->Rosters->patchEntity($roster, $this->request->data);
            if ($this->Rosters->save($roster)) {
                $this->Flash->success(__('The roster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roster could not be saved. Please, try again.'));
        }
        $clss = $this->Rosters->Clss->find('list', ['limit' => 200]);
        $teachers = $this->Rosters->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('roster', 'clss', 'teachers'));
        $this->set('_serialize', ['roster']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Roster id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roster = $this->Rosters->get($id);
        if ($this->Rosters->delete($roster)) {
            $this->Flash->success(__('The roster has been deleted.'));
        } else {
            $this->Flash->error(__('The roster could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
