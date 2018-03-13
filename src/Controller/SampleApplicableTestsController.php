<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SampleApplicableTests Controller
 *
 * @property \App\Model\Table\SampleApplicableTestsTable $SampleApplicableTests
 *
 * @method \App\Model\Entity\SampleApplicableTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SampleApplicableTestsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SampleRegistrations', 'LabSampleDatas', 'TestMasters', 'DiseaseMasters']
        ];
        $sampleApplicableTests = $this->paginate($this->SampleApplicableTests);

        $this->set(compact('sampleApplicableTests'));
    }

    /**
     * View method
     *
     * @param string|null $id Sample Applicable Test id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sampleApplicableTest = $this->SampleApplicableTests->get($id, [
            'contain' => ['SampleRegistrations', 'LabSampleDatas', 'TestMasters', 'DiseaseMasters']
        ]);

        $this->set('sampleApplicableTest', $sampleApplicableTest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sampleApplicableTest = $this->SampleApplicableTests->newEntity();
        if ($this->request->is('post')) {
            $sampleApplicableTest = $this->SampleApplicableTests->patchEntity($sampleApplicableTest, $this->request->getData());
            if ($this->SampleApplicableTests->save($sampleApplicableTest)) {
                $this->Flash->success(__('The sample applicable test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample applicable test could not be saved. Please, try again.'));
        }
        $sampleRegistrations = $this->SampleApplicableTests->SampleRegistrations->find('list', ['limit' => 200]);
        $labSampleDatas = $this->SampleApplicableTests->LabSampleDatas->find('list', ['limit' => 200]);
        $testMasters = $this->SampleApplicableTests->TestMasters->find('list', ['limit' => 200]);
        $diseaseMasters = $this->SampleApplicableTests->DiseaseMasters->find('list', ['limit' => 200]);
        $this->set(compact('sampleApplicableTest', 'sampleRegistrations', 'labSampleDatas', 'testMasters', 'diseaseMasters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sample Applicable Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sampleApplicableTest = $this->SampleApplicableTests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sampleApplicableTest = $this->SampleApplicableTests->patchEntity($sampleApplicableTest, $this->request->getData());
            if ($this->SampleApplicableTests->save($sampleApplicableTest)) {
                $this->Flash->success(__('The sample applicable test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample applicable test could not be saved. Please, try again.'));
        }
        $sampleRegistrations = $this->SampleApplicableTests->SampleRegistrations->find('list', ['limit' => 200]);
        $labSampleDatas = $this->SampleApplicableTests->LabSampleDatas->find('list', ['limit' => 200]);
        $testMasters = $this->SampleApplicableTests->TestMasters->find('list', ['limit' => 200]);
        $diseaseMasters = $this->SampleApplicableTests->DiseaseMasters->find('list', ['limit' => 200]);
        $this->set(compact('sampleApplicableTest', 'sampleRegistrations', 'labSampleDatas', 'testMasters', 'diseaseMasters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sample Applicable Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sampleApplicableTest = $this->SampleApplicableTests->get($id);
        if ($this->SampleApplicableTests->delete($sampleApplicableTest)) {
            $this->Flash->success(__('The sample applicable test has been deleted.'));
        } else {
            $this->Flash->error(__('The sample applicable test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
