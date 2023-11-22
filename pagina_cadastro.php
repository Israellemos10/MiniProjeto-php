<?php

?>
<form action="cadastro.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome">

    <label>CPF</label>
    <input type="text" name="cpf">

    <label>Telefone</label>
    <input type="text" name="telefone">

    <label>Email</label>
    <input type="text" name="email">

    <label>NEI</label>
    <select name="nei">
        <option value="diabetico">Diabetico</option>
        <option value="hipertenso">Hipertenso</option>
    </select>

    <button type="submit">Entrar</button>
</form>