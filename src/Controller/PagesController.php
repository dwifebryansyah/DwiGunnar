<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function index()
    {
        $this->loadModel('Barangs');
        $this->loadModel('Keranjangs');

        $carts = $this->Keranjangs->find('all')
            ->select(['qty']);

        $res = [];

        foreach($carts as $c){
            $res[] = $c->qty;
        }

        $barangs = $this->Barangs->find('all');

        $this->set(compact('barangs','res'));
    }


    public function category($param = null)
    {
        $this->loadModel('Categories');
        $this->loadModel('Barangs');
        $this->loadModel('Keranjangs');

        $carts = $this->Keranjangs->find('all')
            ->select(['qty']);

        $res = [];

        foreach($carts as $c){
            $res[] = $c->qty;
        }
        //dd($param);

        if($param == 'all'){
            $kategoribarang = $this->Barangs->find('all', [
                'contain' => ['Categories']
            ]);
            
        }else{
            $kategoribarang = $this->Barangs->find('all', [
            'contain' => ['Categories']
        ])
                ->where([
                    'category_id' => (int)$param
                ]); 
        }


        $this->set(compact('kategoribarang','res'));

        //dd($productCategory->all());
    }

    public function viewCategory($param = null) {
        $this->loadModel('Categories');
        $this->loadModel('Barangs');
        $this->loadModel('Keranjangs');

        $carts = $this->Keranjangs->find('all')
            ->select(['qty']);

        $res = [];

        foreach($carts as $c){
            $res[] = $c->qty;
        }
        
        $barangs = $this->Barangs->find('all');  

        //dd($titleSlug);

        $productCategory = $this->Barangs->find('all' )
            ->where([
                'id = ' => $param 
        ]);



        $keranjang = $this->Keranjangs->newEntity();
        if ($this->request->is('post')) {

            $keranjang = $this->Keranjangs->patchEntity($keranjang, $this->request->getData());
            //dd($keranjang);
            if ($this->Keranjangs->save($keranjang)) {
                $this->Flash->success(__('The keranjang has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keranjang could not be saved. Please, try again.'));
        }

        //dd($productCategory->all());

        $this->set(compact('productCategory','barangs','res'));
    }
}
