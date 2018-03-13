<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SampleRegistrations Controller
 *
 * @property \App\Model\Table\SampleRegistrationsTable $SampleRegistrations
 *
 * @method \App\Model\Entity\SampleRegistration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SampleRegistrationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'StateMasters', 'DistrictMasters', 'DispatchMasters']
        ];
        $sampleRegistrations = $this->paginate($this->SampleRegistrations);

        $this->set(compact('sampleRegistrations'));
    }

    /**
     * View method
     *
     * @param string|null $id Sample Registration id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sampleRegistration = $this->SampleRegistrations->get($id, [
            'contain' => ['Users', 'StateMasters', 'DistrictMasters', 'DispatchMasters']
        ]);

        $this->set('sampleRegistration', $sampleRegistration);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sampleRegistration = $this->SampleRegistrations->newEntity();
        if ($this->request->is('post')) {
            $sampleRegistration = $this->SampleRegistrations->patchEntity($sampleRegistration, $this->request->getData());
            if ($this->SampleRegistrations->save($sampleRegistration)) {
                $this->Flash->success(__('The sample registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample registration could not be saved. Please, try again.'));
        }
        $users = $this->SampleRegistrations->Users->find('list', ['limit' => 200]);
        $stateMasters = $this->SampleRegistrations->StateMasters->find('list', ['limit' => 200]);
        $districtMasters = $this->SampleRegistrations->DistrictMasters->find('list', ['limit' => 200]);
        $dispatchMasters = $this->SampleRegistrations->DispatchMasters->find('list', ['limit' => 200]);
        $this->set(compact('sampleRegistration', 'users', 'stateMasters', 'districtMasters', 'dispatchMasters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sample Registration id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sampleRegistration = $this->SampleRegistrations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sampleRegistration = $this->SampleRegistrations->patchEntity($sampleRegistration, $this->request->getData());
            if ($this->SampleRegistrations->save($sampleRegistration)) {
                $this->Flash->success(__('The sample registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample registration could not be saved. Please, try again.'));
        }
        $users = $this->SampleRegistrations->Users->find('list', ['limit' => 200]);
        $stateMasters = $this->SampleRegistrations->StateMasters->find('list', ['limit' => 200]);
        $districtMasters = $this->SampleRegistrations->DistrictMasters->find('list', ['limit' => 200]);
        $dispatchMasters = $this->SampleRegistrations->DispatchMasters->find('list', ['limit' => 200]);
        $this->set(compact('sampleRegistration', 'users', 'stateMasters', 'districtMasters', 'dispatchMasters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sample Registration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sampleRegistration = $this->SampleRegistrations->get($id);
        if ($this->SampleRegistrations->delete($sampleRegistration)) {
            $this->Flash->success(__('The sample registration has been deleted.'));
        } else {
            $this->Flash->error(__('The sample registration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
