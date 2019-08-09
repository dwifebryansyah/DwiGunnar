<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Barangs Controller
 *
 * @property \App\Model\Table\BarangsTable $Barangs
 *
 * @method \App\Model\Entity\Barang[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BarangsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $barangs = $this->paginate($this->Barangs);

        $this->set(compact('barangs'));
    }

    /**
     * View method
     *
     * @param string|null $id Barang id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $barang = $this->Barangs->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('barang', $barang);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $barang = $this->Barangs->newEntity();
        if ($this->request->is('post')) {
            $barang = $this->Barangs->patchEntity($barang, $this->request->getData());
            //dd($barang);
            if ($this->Barangs->save($barang)) {
                $this->Flash->success(__('The barang has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barang could not be saved. Please, try again.'));
        }
        $categories = $this->Barangs->Categories->find('list', ['limit' => 200]);
        $this->set(compact('barang', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Barang id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $barang = $this->Barangs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $barang = $this->Barangs->patchEntity($barang, $this->request->getData());
            if ($this->Barangs->save($barang)) {
                $this->Flash->success(__('The barang has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barang could not be saved. Please, try again.'));
        }
        $categories = $this->Barangs->Categories->find('list', ['limit' => 200]);
        $this->set(compact('barang', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Barang id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $barang = $this->Barangs->get($id);
        if ($this->Barangs->delete($barang)) {
            $this->Flash->success(__('The barang has been deleted.'));
        } else {
            $this->Flash->error(__('The barang could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
