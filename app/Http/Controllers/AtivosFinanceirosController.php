<?php 

use Illuminate\Support\Facades\DB;

public function index()
{
    $ativosFinanceiros = DB::table('ATIVOSFINANCEIROS')->get();

    return view('investidor', ['ativosFinanceiros' => $ativosFinanceiros]);
}

?>