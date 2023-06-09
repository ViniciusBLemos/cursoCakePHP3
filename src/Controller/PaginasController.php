<?php

namespace App\Controller;


use Cake\Event\Event;
use Cake\Http\Exception\NotFoundException;

class PaginasController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('view');
    }

    public function view ($url)
    {
        $pagina = $this->Paginas->getPaginaByUrl($url);

        // if (empty($pagina)) {
        //     throw new NotFoundException('Pagina não encontrada');
        // }
        $this->set(compact('pagina'));
    }

}
