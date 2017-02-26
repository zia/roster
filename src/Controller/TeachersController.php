<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Teachers Controller
 *
 * @property \App\Model\Table\TeachersTable $Teachers
 */
class TeachersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clss', 'Subjects']
        ];
        $teachers = $this->paginate($this->Teachers);

        $this->set(compact('teachers'));
        $this->set('_serialize', ['teachers']);
    }

    /**
     * View method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teacher = $this->Teachers->get($id, [
            'contain' => ['Clss', 'Subjects', 'Rosters', 'Students', 'Stuffs']
        ]);

        $this->set('teacher', $teacher);
        $this->set('_serialize', ['teacher']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teacher = $this->Teachers->newEntity();
        if ($this->request->is('post')) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->data);
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('The teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teacher could not be saved. Please, try again.'));
        }
        $clss = $this->Teachers->Clss->find('list', ['limit' => 200]);
        $subjects = $this->Teachers->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('teacher', 'clss', 'subjects'));
        $this->set('_serialize', ['teacher']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teacher = $this->Teachers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->data);
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('The teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teacher could not be saved. Please, try again.'));
        }
        $clss = $this->Teachers->Clss->find('list', ['limit' => 200]);
        $subjects = $this->Teachers->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('teacher', 'clss', 'subjects'));
        $this->set('_serialize', ['teacher']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teacher = $this->Teachers->get($id);
        if ($this->Teachers->delete($teacher)) {
            $this->Flash->success(__('The teacher has been deleted.'));
        } else {
            $this->Flash->error(__('The teacher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
