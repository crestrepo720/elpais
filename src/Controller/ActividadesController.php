<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actividades Controller
 *
 * @property \App\Model\Table\ActividadesTable $Actividades
 *
 * @method \App\Model\Entity\Actividade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActividadesController extends AppController
{





    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];

        if ($this->request->is('put')) {
            $data = $this->request->getData();
            $criterio = $data['filtro'];
            $query = $this->Actividades->find()->where([
                'titulo like' => "%{$criterio}%"
            ]);
        }else{
            $query = $this->Actividades;
        }

        $actividades = $this->paginate($query);


        $this->set(compact('actividades'));
    }

    /**
     * View method
     *
     * @param string|null $id Actividade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actividade = $this->Actividades->get($id, [
            'contain' => ['Users', 'Categorias']
        ]);

        $this->set('actividade', $actividade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actividade = $this->Actividades->newEntity();
        if ($this->request->is('post')) {
            $actividade = $this->Actividades->patchEntity($actividade, $this->request->getData());
            if ($this->Actividades->save($actividade)) {
                $this->Flash->success(__('The actividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actividade could not be saved. Please, try again.'));
        }
        $users = $this->Actividades->Users->find('list', ['limit' => 200]);
        $categorias = $this->Actividades->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('actividade', 'users', 'categorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actividade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actividade = $this->Actividades->get($id, [
            'contain' => ['Categorias']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actividade = $this->Actividades->patchEntity($actividade, $this->request->getData());
            if ($this->Actividades->save($actividade)) {
                $this->Flash->success(__('The actividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actividade could not be saved. Please, try again.'));
        }
        $users = $this->Actividades->Users->find('list', ['limit' => 200]);
        $categorias = $this->Actividades->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('actividade', 'users', 'categorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actividade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actividade = $this->Actividades->get($id);
        if ($this->Actividades->delete($actividade)) {
            $this->Flash->success(__('The actividade has been deleted.'));
        } else {
            $this->Flash->error(__('The actividade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function buscador(){
        $respuesta = [];
        $data = $this->request->getData();
        $criterio = $data['criterio'];
        if(!empty($criterio)){
            $query = $this->Actividades->find()
            ->where([
                'titulo like' => "%{$criterio}%"
            ]);
            foreach ($query as  $resultado) {
                $respuesta[] = [
                    'id' => $resultado->titulo,
                    'label' => $resultado->titulo,
                    'value' => $resultado->titulo
                ];
            }
        }
        $this->set(['respuesta' => $respuesta ]);


    }
}
