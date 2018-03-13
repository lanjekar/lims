<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SampleMasters Controller
 *
 * @property \App\Model\Table\SampleMastersTable $SampleMasters
 *
 * @method \App\Model\Entity\SampleMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SampleMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $sampleMasters = $this->paginate($this->SampleMasters);

        $this->set(compact('sampleMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Sample Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sampleMaster = $this->SampleMasters->get($id, [
            'contain' => []
        ]);

        $this->set('sampleMaster', $sampleMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sampleMaster = $this->SampleMasters->newEntity();
        if ($this->request->is('post')) {
            $sampleMaster = $this->SampleMasters->patchEntity($sampleMaster, $this->request->getData());
            if ($this->SampleMasters->save($sampleMaster)) {
                $this->Flash->success(__('The sample master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample master could not be saved. Please, try again.'));
        }
        $this->set(compact('sampleMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sample Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sampleMaster = $this->SampleMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sampleMaster = $this->SampleMasters->patchEntity($sampleMaster, $this->request->getData());
            if ($this->SampleMasters->save($sampleMaster)) {
                $this->Flash->success(__('The sample master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample master could not be saved. Please, try again.'));
        }
        $this->set(compact('sampleMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sample Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sampleMaster = $this->SampleMasters->get($id);
        if ($this->SampleMasters->delete($sampleMaster)) {
            $this->Flash->success(__('The sample master has been deleted.'));
        } else {
            $this->Flash->error(__('The sample master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
