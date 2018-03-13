<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StateMasters Controller
 *
 * @property \App\Model\Table\StateMastersTable $StateMasters
 *
 * @method \App\Model\Entity\StateMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StateMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $stateMasters = $this->paginate($this->StateMasters);

        $this->set(compact('stateMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id State Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stateMaster = $this->StateMasters->get($id, [
            'contain' => []
        ]);

        $this->set('stateMaster', $stateMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stateMaster = $this->StateMasters->newEntity();
        if ($this->request->is('post')) {
            $stateMaster = $this->StateMasters->patchEntity($stateMaster, $this->request->getData());
            if ($this->StateMasters->save($stateMaster)) {
                $this->Flash->success(__('The state master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state master could not be saved. Please, try again.'));
        }
        $this->set(compact('stateMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id State Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stateMaster = $this->StateMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stateMaster = $this->StateMasters->patchEntity($stateMaster, $this->request->getData());
            if ($this->StateMasters->save($stateMaster)) {
                $this->Flash->success(__('The state master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state master could not be saved. Please, try again.'));
        }
        $this->set(compact('stateMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id State Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stateMaster = $this->StateMasters->get($id);
        if ($this->StateMasters->delete($stateMaster)) {
            $this->Flash->success(__('The state master has been deleted.'));
        } else {
            $this->Flash->error(__('The state master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
