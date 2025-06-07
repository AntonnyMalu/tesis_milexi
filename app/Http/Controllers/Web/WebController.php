<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Clase;
use App\Models\Recurso;
use Illuminate\Http\Request;

class WebController extends Controller
{
    protected int $delay = 0;
    public mixed $listarClases = [];

    public function index()
    {
        $this->getDataClases(6);
        return view('welcome')
            ->with('clases',$this->listarClases);
    }

    public function clases()
    {
        $this->getDataClases();
        return view('web.clases')
            ->with('clases',$this->listarClases);
    }

    public function propuestas()
    {
        return view('web.propuestas');
    }

    public function sobre_nosotros()
    {
        return view('web.nosotros');
    }

    public function recursos($id)
    {
        return view('web.recursos');
    }

    protected function delay(): int
    {
        if ($this->delay){
            if ($this->delay == 1){
                $this->delay = $this->delay + 2;
            }else{
                if ($this->delay == 5){
                    $this->delay = 1;
                }else{
                    $this->delay = $this->delay + 2;
                }
            }
        }else{
            $this->delay = 1;
        }
        return $this->delay;
    }

    protected function getDataClases($limit = null): void
    {
        if ($limit){
            $this->listarClases = Clase::where('estatus', 1)->limit($limit)->get();
        }else{
            $this->listarClases = Clase::where('estatus', 1)->get();
        }
        $this->listarClases->each(function ($clase){
            $count = Recurso::where('clases_id', $clase->id)->where('estatus', 1)->count();
            $clase->recursos = $count;
            //data-wow-delay
            $clase->delay = $this->delay();
        });
    }
}
