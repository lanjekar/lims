<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LabSampleDatas Controller
 *
 * @property \App\Model\Table\LabSampleDatasTable $LabSampleDatas
 *
 * @method \App\Model\Entity\LabSampleData[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LabSampleDatasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SampleRegistrations', 'LabMasters', 'SpeciesMasters', 'BreedMasters', 'SampleMasters', 'SampleApplicableTests']
        ];
        $labSampleDatas = $this->paginate($this->LabSampleDatas);

        $this->set(compact('labSampleDatas'));
    }

    /**
     * View method
     *
     * @param string|null $id Lab Sample Data id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $labSampleData = $this->LabSampleDatas->get($id, [
            'contain' => ['SampleRegistrations', 'LabMasters', 'SpeciesMasters', 'BreedMasters', 'SampleMasters', 'SampleApplicableTests']
        ]);

        $this->set('labSampleData', $labSampleData);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $labSampleData = $this->LabSampleDatas->newEntity();
        if ($this->request->is('post')) {
            $labSampleData = $this->LabSampleDatas->patchEntity($labSampleData, $this->request->getData());
            if ($this->LabSampleDatas->save($labSampleData)) {
                $this->Flash->success(__('The lab sample data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lab sample data could not be saved. Please, try again.'));
        }
        $sampleRegistrations = $this->LabSampleDatas->SampleRegistrations->find('list', ['limit' => 200]);
        $labMasters = $this->LabSampleDatas->LabMasters->find('list', ['limit' => 200]);
        $speciesMasters = $this->LabSampleDatas->SpeciesMasters->find('list', ['limit' => 200]);
        $breedMasters = $this->LabSampleDatas->BreedMasters->find('list', ['limit' => 200]);
        $sampleMasters = $this->LabSampleDatas->SampleMasters->find('list', ['limit' => 200]);
        $sampleApplicableTests = $this->LabSampleDatas->SampleApplicableTests->find('list', ['limit' => 200]);
        $this->set(compact('labSampleData', 'sampleRegistrations', 'labMasters', 'speciesMasters', 'breedMasters', 'sampleMasters', 'sampleApplicableTests'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lab Sample Data id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $labSampleData = $this->LabSampleDatas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $labSampleData = $this->LabSampleDatas->patchEntity($labSampleData, $this->request->getData());
            if ($this->LabSampleDatas->save($labSampleData)) {
                $this->Flash->success(__('The lab sample data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lab sample data could not be saved. Please, try again.'));
        }
        $sampleRegistrations = $this->LabSampleDatas->SampleRegistrations->find('list', ['limit' => 200]);
        $labMasters = $this->LabSampleDatas->LabMasters->find('list', ['limit' => 200]);
        $speciesMasters = $this->LabSampleDatas->SpeciesMasters->find('list', ['limit' => 200]);
        $breedMasters = $this->LabSampleDatas->BreedMasters->find('list', ['limit' => 200]);
        $sampleMasters = $this->LabSampleDatas->SampleMasters->find('list', ['limit' => 200]);
        $sampleApplicableTests = $this->LabSampleDatas->SampleApplicableTests->find('list', ['limit' => 200]);
        $this->set(compact('labSampleData', 'sampleRegistrations', 'labMasters', 'speciesMasters', 'breedMasters', 'sampleMasters', 'sampleApplicableTests'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lab Sample Data id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $labSampleData = $this->LabSampleDatas->get($id);
        if ($this->LabSampleDatas->delete($labSampleData)) {
            $this->Flash->success(__('The lab sample data has been deleted.'));
        } else {
            $this->Flash->error(__('The lab sample data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
