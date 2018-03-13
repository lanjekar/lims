<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LabMasters Controller
 *
 * @property \App\Model\Table\LabMastersTable $LabMasters
 *
 * @method \App\Model\Entity\LabMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LabMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
     public function initialize(){
        parent::initialize();
        
        
         $this->viewBuilder()->layout('masters');
    }
    public function index()
    {
        $labMasters = $this->paginate($this->LabMasters);

        $this->set(compact('labMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Lab Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $labMaster = $this->LabMasters->get($id, [
            'contain' => []
        ]);

        $this->set('labMaster', $labMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $labMaster = $this->LabMasters->newEntity();
        if ($this->request->is('post')) {
            $labMaster = $this->LabMasters->patchEntity($labMaster, $this->request->getData());
            if ($this->LabMasters->save($labMaster)) {
                $this->Flash->success(__('The lab master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lab master could not be saved. Please, try again.'));
        }
        $this->set(compact('labMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lab Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $labMaster = $this->LabMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $labMaster = $this->LabMasters->patchEntity($labMaster, $this->request->getData());
            if ($this->LabMasters->save($labMaster)) {
                $this->Flash->success(__('The lab master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lab master could not be saved. Please, try again.'));
        }
        $this->set(compact('labMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lab Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $labMaster = $this->LabMasters->get($id);
        if ($this->LabMasters->delete($labMaster)) {
            $this->Flash->success(__('The lab master has been deleted.'));
        } else {
            $this->Flash->error(__('The lab master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
