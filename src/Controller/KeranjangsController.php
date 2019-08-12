<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Keranjangs Controller
 *
 * @property \App\Model\Table\KeranjangsTable $Keranjangs
 *
 * @method \App\Model\Entity\Keranjang[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KeranjangsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->loadModel('Barangs');

        $barangs = $this->Barangs->find('all');

        $this->paginate = [
            'contain' => ['Barangs']
        ];

        $keranjangs = $this->Keranjangs->find('all')
            ->contain([
                'Barangs'
            ]);

        //dd($keranjangs);

        $cartTot = $this->Keranjangs->find('all')
            ->select(['qty']);

        $res = [];
        foreach($cartTot as $c){
            $res[] = $c->qty;
        }

        $price = $this->Keranjangs->find('all')
            ->select(['price','qty']);

        $res1 = [];
        foreach($price as $p){
            $res1[] = $p->price * $p->qty;
        }

        $totals = array_sum($res1);
        //dd($totals);


        $this->set(compact('keranjangs','res','totals','barangs'));
    }

    /**
     * View method
     *
     * @param string|null $id Keranjang id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $keranjang = $this->Keranjangs->get($id, [
            'contain' => ['Barangs']
        ]);
        //dd($keranjang);
        $this->set('keranjang', $keranjang);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $keranjang = $this->Keranjangs->newEntity();
        if ($this->request->is('post')) {
            $keranjang = $this->Keranjangs->patchEntity($keranjang, $this->request->getData());
            if ($this->Keranjangs->save($keranjang)) {
                $this->Flash->success(__('The keranjang has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keranjang could not be saved. Please, try again.'));
        }
        $produks = $this->Keranjangs->Produks->find('list', ['limit' => 200]);
        $this->set(compact('keranjang', 'produks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Keranjang id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $keranjang = $this->Keranjangs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $keranjang = $this->Keranjangs->patchEntity($keranjang, $this->request->getData());
            if ($this->Keranjangs->save($keranjang)) {
                $this->Flash->success(__('The keranjang has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keranjang could not be saved. Please, try again.'));
        }
        $produks = $this->Keranjangs->Produks->find('list', ['limit' => 200]);
        $this->set(compact('keranjang', 'produks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Keranjang id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        //s$this->request->allowMethod(['post', 'delete']);
        $keranjang = $this->Keranjangs->get($id);
        if ($this->Keranjangs->delete($keranjang)) {
            $this->Flash->success(__('The keranjang has been deleted.'));
        } else {
            $this->Flash->error(__('The keranjang could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
