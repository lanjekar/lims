<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DistrictMasters Controller
 *
 * @property \App\Model\Table\DistrictMastersTable $DistrictMasters
 *
 * @method \App\Model\Entity\DistrictMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DistrictMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StateMasters']
        ];
        $districtMasters = $this->paginate($this->DistrictMasters);

        $this->set(compact('districtMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id District Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $districtMaster = $this->DistrictMasters->get($id, [
            'contain' => ['StateMasters']
        ]);

        $this->set('districtMaster', $districtMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $districtMaster = $this->DistrictMasters->newEntity();
        if ($this->request->is('post')) {
            $districtMaster = $this->DistrictMasters->patchEntity($districtMaster, $this->request->getData());
            if ($this->DistrictMasters->save($districtMaster)) {
                $this->Flash->success(__('The district master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The district master could not be saved. Please, try again.'));
        }
        $stateMasters = $this->DistrictMasters->StateMasters->find('list', ['limit' => 200]);
        $this->set(compact('districtMaster', 'stateMasters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id District Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $districtMaster = $this->DistrictMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $districtMaster = $this->DistrictMasters->patchEntity($districtMaster, $this->request->getData());
            if ($this->DistrictMasters->save($districtMaster)) {
                $this->Flash->success(__('The district master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The district master could not be saved. Please, try again.'));
        }
        $stateMasters = $this->DistrictMasters->StateMasters->find('list', ['limit' => 200]);
        $this->set(compact('districtMaster', 'stateMasters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id District Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $districtMaster = $this->DistrictMasters->get($id);
        if ($this->DistrictMasters->delete($districtMaster)) {
            $this->Flash->success(__('The district master has been deleted.'));
        } else {
            $this->Flash->error(__('The district master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
