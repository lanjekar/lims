<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DispatchMasters Controller
 *
 * @property \App\Model\Table\DispatchMastersTable $DispatchMasters
 *
 * @method \App\Model\Entity\DispatchMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DispatchMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dispatchMasters = $this->paginate($this->DispatchMasters);

        $this->set(compact('dispatchMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Dispatch Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dispatchMaster = $this->DispatchMasters->get($id, [
            'contain' => []
        ]);

        $this->set('dispatchMaster', $dispatchMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dispatchMaster = $this->DispatchMasters->newEntity();
        if ($this->request->is('post')) {
            $dispatchMaster = $this->DispatchMasters->patchEntity($dispatchMaster, $this->request->getData());
            if ($this->DispatchMasters->save($dispatchMaster)) {
                $this->Flash->success(__('The dispatch master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dispatch master could not be saved. Please, try again.'));
        }
        $this->set(compact('dispatchMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dispatch Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dispatchMaster = $this->DispatchMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dispatchMaster = $this->DispatchMasters->patchEntity($dispatchMaster, $this->request->getData());
            if ($this->DispatchMasters->save($dispatchMaster)) {
                $this->Flash->success(__('The dispatch master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dispatch master could not be saved. Please, try again.'));
        }
        $this->set(compact('dispatchMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dispatch Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dispatchMaster = $this->DispatchMasters->get($id);
        if ($this->DispatchMasters->delete($dispatchMaster)) {
            $this->Flash->success(__('The dispatch master has been deleted.'));
        } else {
            $this->Flash->error(__('The dispatch master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
