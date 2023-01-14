<?php
class binomio{
    protected $array_store = array();
    private function get_element($r,$p)   
    {
        if(isset($this->array_store[$r][$p])) //trae los datos anterior o el numero anterior
        {
            return $this->array_store[$r][$p];
        }
        if($r==1 && $p==1)//si es el principio o final
            return 1;
        else if($p==0)  //si el inicio es igual a 0
            return 0;
        else if($p>$r)  //si el final es mayor a 0 termina
            return 0;
        
        return $this->get_element($r-1,$p-1) + $this->get_element($r-1,$p);   //calcula los valores siguientes basandose en el valor anterior
    }
    public function imprimir($numero){
        
        echo "(a+b)<sup>$numero</sup> = ";
        $numero++;
        for($i=1;$i<=$numero;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                if($numero==$i){
                    
                    echo $this->array_store[$i][$j] = $this->get_element($i,$j); //asigna y despliega el valor operado
                    if($j==1)
                        echo "a";//primer
                    else if($j==$i)
                        echo "b";
                    else 
                        echo "ab";
                    echo "<sup>".($numero-1)."</sup>";  
                }
                if($i!=$j)
                    echo ' ';
            }
        }

    }
}
$binomios = new binomio;
$numeroInicial = 5;
$resultado = $binomios->imprimir($numeroInicial);