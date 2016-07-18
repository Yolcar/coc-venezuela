<?php

namespace App\Http\Controllers;

use App\Helpers\ClashClass;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

class ClanController extends Controller
{
    public function index()
    {
        $clashClass = new ClashClass();
        $ClashAPI = $clashClass->getClan('8QGU99PC')->data;

        $grafico = Lava::DataTable();
        $grafico->addStringColumn('Guerras');
        $grafico->addNumberColumn("Resultado");
        $grafico->addRow(['Victorias',$ClashAPI->warWins]);
        $grafico->addRow(['Derrotas',$ClashAPI->warLosses]);
        $grafico->addRow(['Empates',$ClashAPI->warTies]);

        Lava::PieChart('Grafico', $grafico, [
            'title'  => 'Historial de Guerra',
            'is3D'   => true
        ]);

        return view('clan.index',compact('ClashAPI'));
    }
}
