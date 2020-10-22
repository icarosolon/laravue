@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard" >
                    <div class="row-fluid">
                        <div class="col-md-4">
                            <caixa quantidade="267" titulo="Ciclistas" url="#" cor="#529BC5" icone="ion-android-bicycle"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa quantidade="153" titulo="Inscrições" url="#" cor="#F39C12" icone="ion-clipboard"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa quantidade="21" titulo="Pagamentos" url="#" cor="#00A65A" icone="ion-cash"></caixa>
                        </div>
                    </div>
                    
                    
                </painel>
                
            </div>
        </div>
    </div>
@endsection
