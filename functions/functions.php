<?php
    function descobrir_n_primo(){
        $n = filter_input(INPUT_POST, 'numero');
        $cont=1;
        for ($i=1; $i<$n;$i++){
            if ($n%$i == 0){
                $cont++;
            }    
        }
        if ($cont == 2){
            print("<h3>O número ".$n." é primo</h3>");
        }
        else{
            print ("<h3>O número ".$n." não é primo</h3>");
            $cont=0;
        }
    }
    
    function n_primo_0_100 () {
        for($x = 1; $x <= 100; $x++){
            $n = 0;
            
            for($y = $x; $y >= 1; $y--){
                if (($x % $y) == 0) {
                    $n++;
                }
            }
            if ($n == 2){
                print($x.", ");
            }
        }
    }
    
    function color(){
        print("<br><br><br>");
        print("Insira as cores: ");
        $cont=0;
        $n_color = filter_input(INPUT_POST, 'n_de_cores');
        print('<form method="POST">');
        do{
                
            //formulario para as cores  
            print('<input type="text" ');
            print('name="'."n".$cont.'"');
            print (">");               
            $cont++;
           
        }while ($cont<$n_color);
        print('<input type="submit">');
        print('</form>');
       //$cont2 = filter_input(INPUT_POST, 'n2');
        //print("<h1>".$cont2."</h1>");
       
        $x=-1;
        do{
        $color = filter_input(INPUT_POST, 'n'.$x);
        $x++;
        print($color)."  ";
        }while ($x<$n_color+100);
    }

