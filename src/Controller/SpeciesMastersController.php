<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SpeciesMasters Controller
 *
 * @property \App\Model\Table\SpeciesMastersTable $SpeciesMasters
 *
 * @method \App\Model\Entity\SpeciesMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpeciesMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $speciesMasters = $this->paginate($this->SpeciesMasters);

        $this->set(compact('speciesMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Species Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $speciesMaster = $this->SpeciesMasters->get($id, [
            'contain' => []
        ]);

        $this->set('speciesMaster', $speciesMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $speciesMaster = $this->SpeciesMasters->newEntity();
        if ($this->request->is('post')) {
            $speciesMaster = $this->SpeciesMasters->patchEntity($speciesMaster, $this->request->getData());
            if ($this->SpeciesMasters->save($speciesMaster)) {
                $this->Flash->success(__('The species master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The species master could not be saved. Please, try again.'));
        }
        $this->set(compact('speciesMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Species Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $speciesMaster = $this->SpeciesMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $speciesMaster = $this->SpeciesMasters->patchEntity($speciesMaster, $this->request->getData());
            if ($this->SpeciesMasters->save($speciesMaster)) {
                $this->Flash->success(__('The species master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The species master could not be saved. Please, try again.'));
        }
        $this->set(compact('speciesMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Species Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $speciesMaster = $this->SpeciesMasters->get($id);
        if ($this->SpeciesMasters->delete($speciesMaster)) {
            $this->Flash->success(__('The species master has been deleted.'));
        } else {
            $this->Flash->error(__('The species master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
