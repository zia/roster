<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Attendences Controller
 *
 * @property \App\Model\Table\AttendencesTable $Attendences
 */
class AttendencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'Rosters']
        ];
        $attendences = $this->paginate($this->Attendences);

        $this->set(compact('attendences'));
        $this->set('_serialize', ['attendences']);
    }

    /**
     * View method
     *
     * @param string|null $id Attendence id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attendence = $this->Attendences->get($id, [
            'contain' => ['Students', 'Rosters']
        ]);

        $this->set('attendence', $attendence);
        $this->set('_serialize', ['attendence']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        #This Is For Saving
        $attendence = $this->Attendences->newEntity();
        if ($this->request->is('post')) {
            $attendence = $this->Attendences->patchEntity($attendence, $this->request->data);
            if ($this->Attendences->save($attendence)) {
                $this->Flash->success(__('The attendence has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendence could not be saved. Please, try again.'));
        }

        #This is for getting lists
        #$students = $this->Attendences->Students->find('list', ['limit' => 200]);
        #students will be according to the roster,for instance a roster is for a class and classes have students.
        $students = $this->Attendences->Students->find('all');
        #I'll get only the specific roster later
        $rosters = $this->Attendences->Rosters->find('list', ['limit' => 200]);

        $this->paginate = [
            'contain' => ['Students', 'Rosters']
        ];
        $attendences = $this->paginate($this->Attendences);
        $this->set(compact('attendence','attendences', 'students', 'rosters'));
        $this->set('_serialize', ['attendences']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Attendence id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attendence = $this->Attendences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attendence = $this->Attendences->patchEntity($attendence, $this->request->data);
            if ($this->Attendences->save($attendence)) {
                $this->Flash->success(__('The attendence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendence could not be saved. Please, try again.'));
        }
        $students = $this->Attendences->Students->find('list', ['limit' => 200]);
        $rosters = $this->Attendences->Rosters->find('list', ['limit' => 200]);
        $this->set(compact('attendence', 'students', 'rosters'));
        $this->set('_serialize', ['attendence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Attendence id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attendence = $this->Attendences->get($id);
        if ($this->Attendences->delete($attendence)) {
            $this->Flash->success(__('The attendence has been deleted.'));
        } else {
            $this->Flash->error(__('The attendence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
