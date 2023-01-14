<?php
class factorial{
    protected $numeros = '';
    public function iteracionFactorial($numero)
    {
        $this->numeros .= $numero." . ";
        return ($numero <= 1 ? 1:$numero * $this->iteracionFactorial($numero - 1));
    }
    
    public function imprimir(){
        return $this->numeros;
        
    }
}
$factorial = new factorial;
$numeroInicial = 7;
$resultado = $factorial->iteracionFactorial($numeroInicial);
$numerosRecorridos = $factorial->imprimir();
echo $numeroInicial."! = ".$numerosRecorridos." = ".$resultado;