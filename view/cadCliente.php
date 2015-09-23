<?php

?>
<html>
    <head></head>
    <body>
        <form action="../ManagerPage/ManageBean.php/setCliente" method="Post">
            Nome: <input type="text" name="nome"><br>
            Cpf: <input type="text" name="cpf"><br>
            E-mail: <input type="text" name="email"><br>
            Fone: <input type="text" name="fone"><br>
            Endereço: <input type="text" name="endereco"><br>
            Carro: <select name="carro">
                    <option value="celta">Celta 1.0 2009</option>
                    <option value="gol">Gol g5 1.0 2013</option>
                    <option value="golf">Golf 2.0 2014</option>
                    <option value="cruzer">Cruzer 2.0 2014 </option>
                    <option value="m3">BMW M2 4.5 2012</option>
            </select><br>
            Data de Retirada: <input type="date" name="dtretirada"/><br>
            Data de Devolução: <input type="date" name="dtdevolucao"/><br>
            <button type="submit">Enviar</button>
            
        </form>
    </body>
</html>

