<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TestMasters Controller
 *
 * @property \App\Model\Table\TestMastersTable $TestMasters
 *
 * @method \App\Model\Entity\TestMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $testMasters = $this->paginate($this->TestMasters);

        $this->set(compact('testMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Test Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testMaster = $this->TestMasters->get($id, [
            'contain' => []
        ]);

        $this->set('testMaster', $testMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testMaster = $this->TestMasters->newEntity();
        if ($this->request->is('post')) {
            $testMaster = $this->TestMasters->patchEntity($testMaster, $this->request->getData());
            if ($this->TestMasters->save($testMaster)) {
                $this->Flash->success(__('The test master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test master could not be saved. Please, try again.'));
        }
        $this->set(compact('testMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Test Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testMaster = $this->TestMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testMaster = $this->TestMasters->patchEntity($testMaster, $this->request->getData());
            if ($this->TestMasters->save($testMaster)) {
                $this->Flash->success(__('The test master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test master could not be saved. Please, try again.'));
        }
        $this->set(compact('testMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Test Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testMaster = $this->TestMasters->get($id);
        if ($this->TestMasters->delete($testMaster)) {
            $this->Flash->success(__('The test master has been deleted.'));
        } else {
            $this->Flash->error(__('The test master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
