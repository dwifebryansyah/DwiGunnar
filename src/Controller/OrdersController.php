<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Core\Configure;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 *
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
    }

    public function transaksi() {

        $this->loadModel('Barangs');
        $this->loadModel('OrdersDetails');
        $this->loadModel('Keranjangs');

        $order = $this->Orders->newEntity();
        
        if ($this->request->is('post')) {
            $request = $this->request->getData();
            
            $request['date'] = date('Y-m-d');
            //dd($request);
            $order = $this->Orders->patchEntity($order, $request,[
                'associated' => [
                    'OrdersDetails'
                ]
            ]);

            //dd($order);

            if ($this->Orders->save($order)) {
                //dd('hey');
                $orderAja = $this->Orders
                    ->find()
                    ->order(['code' => 'DESC'])
                    ->first();

                $idOrder = $orderAja->id;

                $orderDetails = $this->OrdersDetails
                    ->find()
                    ->contain('Barangs')
                    ->where([
                        'order_id' => $idOrder
                    ]);


                foreach($orderDetails as $od){
                    //dd($od);
                    $query = $this->Barangs->query();
                    $query->update()
                        ->set(['stok' => $od->barang->barang - $od->qty ])
                        ->where(['id' => $od->barang_id])
                        ->execute();
                }

                //In Coupons Controller
                $truncate = $this->Keranjangs->connection()->transactional(function ($conn) {
                    $sqls = $this->Keranjangs->schema()->truncateSql($this->Keranjangs->connection());
                    foreach ($sqls as $sql) {
                        $this->Keranjangs->connection()->execute($sql)->execute();
                    }
                });

                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }

    }

    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['OrdersDetails']
        ]);

        $this->set('order', $order);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $this->set(compact('order'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $this->set(compact('order'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
