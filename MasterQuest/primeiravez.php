

<?php

print ("CPF = $cpf <br/>") ;
?>

<form action="primeiravezAction.php" method="post">

	<table border="0">
		<tr>
			<td align="right">CPF ::</td><td><input type="text" name="cpf" value="<?php echo "$cpf";?>" /> </td>
		</tr>
		<tr>
			<td align="right">NOME ::</td><td><input type="text" name="nome" /> </td>
		</tr>
		<tr>
			<td align="right">E-MAIL ::</td><td><input type="text" name="email" /> </td>
		</tr>
		<tr>
			<td align="right">TELEFONE ::</td><td><input type="text" name="telefone" /> </td>
		</tr>
	
	</table> <br/>
	
	<input type="submit" value="Salvar"/>
	
</form>
