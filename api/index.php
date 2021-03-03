<?php

/*# Verificação de controle de rota
/## Caso a view não seja encontrada retorna para index
/
/
*/
if(isset($_GET['view'])){
    if(file_exists('api/core/controles/'.strtolower($_GET['view'])));

}else{
    include('core/controles/indexControler.php');
} 