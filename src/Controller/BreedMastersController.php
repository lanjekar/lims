<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BreedMasters Controller
 *
 * @property \App\Model\Table\BreedMastersTable $BreedMasters
 *
 * @method \App\Model\Entity\BreedMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BreedMastersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SpeciesMasters']
        ];
        $breedMasters = $this->paginate($this->BreedMasters);

        $this->set(compact('breedMasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Breed Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $breedMaster = $this->BreedMasters->get($id, [
            'contain' => ['SpeciesMasters']
        ]);

        $this->set('breedMaster', $breedMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $breedMaster = $this->BreedMasters->newEntity();
        if ($this->request->is('post')) {
            $breedMaster = $this->BreedMasters->patchEntity($breedMaster, $this->request->getData());
            if ($this->BreedMasters->save($breedMaster)) {
                $this->Flash->success(__('The breed master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breed master could not be saved. Please, try again.'));
        }
        $speciesMasters = $this->BreedMasters->SpeciesMasters->find('list', ['limit' => 200]);
        $this->set(compact('breedMaster', 'speciesMasters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Breed Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $breedMaster = $this->BreedMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $breedMaster = $this->BreedMasters->patchEntity($breedMaster, $this->request->getData());
            if ($this->BreedMasters->save($breedMaster)) {
                $this->Flash->success(__('The breed master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breed master could not be saved. Please, try again.'));
        }
        $speciesMasters = $this->BreedMasters->SpeciesMasters->find('list', ['limit' => 200]);
        $this->set(compact('breedMaster', 'speciesMasters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Breed Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $breedMaster = $this->BreedMasters->get($id);
        if ($this->BreedMasters->delete($breedMaster)) {
            $this->Flash->success(__('The breed master has been deleted.'));
        } else {
            $this->Flash->error(__('The breed master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
