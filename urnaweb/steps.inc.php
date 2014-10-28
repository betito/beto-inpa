
<?php
if ((! is_session_started ())) {
	session_start ();
}
?>

<div id="step1" class="step1">
	<form method="post" action="step1action.php">
		<input type="hidden" value="1" name="currentstep" />
		<div class="labelw100">MATR&Iacute;CULA:</div>
		<input class="inputx" name="matricula" />
		<div class="labelw100">SENHA:</div>
		<input class="inputx" type="password" name="password" /> <br /> <input
			type="submit" class="botao" value="ENTRAR" /> <input type="reset"
			class="botao" value="LIMPAR" />
	</form>
</div>


<div id="step2" class="step2">


	<div class="textvotante">NOME DO VOTANTE / CARGO</div>

	<div class="labelcargo">CARGO: COORDENADOR</div>
	<div class="labelcaord">CORDENA&Ccedil;&Atilde;O</div>
	<form method="post" action="step2action.php">
		<div class="labelw100">NOME DO INDICADO 1:</div>
		<select name="indicado1" onselect="excludeName(this);" id="coord1">
			<option>XXXXXX</option>
			<option>YYYYYY</option>
			<option>ZZZZZZ</option>
		</select>
		<div class="labelw100">NOME DO INDICADO 2:</div>
		<select name="indicado2" onselect="excludeName(this);" id="coord2">
			<option>XXXXXX</option>
			<option>YYYYYY</option>
			<option>ZZZZZZ</option>
		</select> <br /> <input type="submit" class="botao" value="VOTAR" />
	</form>

	<div class="botaosalvar"></div>

</div>

<div id="step3" class="step3">


	<div class="textvotante">NOME DO VOTANTE / CARGO</div>

	<div class="confirmacao">CONFIRMA&Ccedil;&Atilde;O DO VOTO</div>

	<div class="labelcargo">CARGO: COORDENADOR</div>
	<div class="labelcaord">CORDENA&Ccedil;&Atilde;O</div>
	<form method="post" action="step3action.php">
		<div class="labelw150">NOME DO INDICADO 1:</div>
		<div class="nomeindicado">
		<?php
		if (isset ( $_SESSION ["coordindicado1"] )) {
			print ("<br/>INDICADO 1 :: " . $_SESSION ["coordindicado1"]) ;
			?>
				<input type="hidden"
				value="<?php print($_SESSION["coordindicado1"]); ?>"
				name="indicado1" />
				<?php
		}
		?>
		</div>
		<div class="labelw150">NOME DO INDICADO 2:</div>
		<div class="nomeindicado">
		<?php
		print ("<br/>INDICADO 2 :: " . $_SESSION ["coordindicado2"]) ;
		?>
			<input type="hidden"
				value="<?php print($_SESSION["coordindicado2"]); ?>"
				name="indicado2" />
			<?php
			?>
		</div>
		<input type="button" class="botao" value="VOLTAR"
			onclick="hideAll('step2'); <?php $_SESSION["currentstep"] = 2;?>" />
		<input type="submit" class="botao" value="CONFIRMAR" />
	</form>

	<div class="botaosalvar"></div>


</div>


<div id="step4" class="step4">

	<div class="textvotante">NOME DO VOTANTE / CARGO</div>

	<div class="labelcargo">CARGO: COORDENADOR</div>
	<div class="labelcaord">CORDENA&Ccedil;&Atilde;O</div>
	<form method="post" action="step4action.php">
		<div class="comprovante">COMPROVANTE</div>
		<input type="button" class="botao" value="IMPRIMIR" /> <input
			type="submit" class="botao" value="CONTINUAR" />
		<!-- PQ Guardar ?? -->
	</form>


</div>

<div id="step5" class="step5">


	<form method="" action="step5action.php">
		<div class="textvotante">NOME DO VOTANTE / CARGO</div>
		<div class="labelcargo">INDIQUE AGORA UM NOME PARA O CONSELHO</div>
		<input type="submit" class="botao" value="CONTINUAR" />
	</form>


</div>



<div id="step6" class="step6">


	<div class="textvotante">NOME DO VOTANTE / CARGO</div>

	<div class="labelcargo">CARGO: COORDENADOR</div>
	<div class="labelcaord">CORDENA&Ccedil;&Atilde;O</div>
	<form method="post" action="step6action.php">
		<div class="labelw100">NOME DO INDICADO 1:</div>
		<select name="consindicado1">
			<option>XXXXXX</option>
			<option>YYYYYY</option>
			<option>ZZZZZZ</option>
			<option>AAAAAA</option>
			<option>DDDDDD</option>
		</select>
		<div class="labelw100">NOME DO INDICADO 2:</div>
		<select name="consindicado2">
			<option>XXXXXX</option>
			<option>YYYYYY</option>
			<option>ZZZZZZ</option>
			<option>AAAAAA</option>
			<option>DDDDDD</option>
		</select>
		<div class="labelw100">NOME DO INDICADO 3:</div>
		<select name="consindicado3">
			<option>XXXXXX</option>
			<option>YYYYYY</option>
			<option>ZZZZZZ</option>
			<option>AAAAAA</option>
			<option>DDDDDD</option>
		</select>
		<div class="labelw100">NOME DO INDICADO 4:</div>
		<select name="consindicado4">
			<option>XXXXXX</option>
			<option>YYYYYY</option>
			<option>ZZZZZZ</option>
			<option>AAAAAA</option>
			<option>DDDDDD</option>
		</select>
		<div class="labelw100">NOME DO INDICADO 5:</div>
		<select name="consindicado5">
			<option>XXXXXX</option>
			<option>YYYYYY</option>
			<option>ZZZZZZ</option>
			<option>AAAAAA</option>
			<option>DDDDDD</option>
		</select> <br /> <input type="submit" class="botao" value="CONFIRMA" />
	</form>

	<div class="botaosalvar"></div>

</div>

<div id="step7" class="step7">


	<div class="textvotante">NOME DO VOTANTE / CARGO</div>

	<div class="confirmacao">CONFIRMA&Ccedil;&Atilde;O DO VOTO</div>

	<div class="labelcargo">CARGO: consENADOR</div>
	<div class="labelcaord">CORDENA&Ccedil;&Atilde;O</div>
	<form method="post" action="step7action.php">
		<div class="labelw150">NOME DO INDICADO 1:</div>
		<div class="nomeindicado">
		<?php
		if (isset ( $_SESSION ["consindicado1"] )) {
			print ("<br/>INDICADO 1 :: " . $_SESSION ["consindicado1"]) ;
			?>
				<input type="hidden"
				value="<?php print($_SESSION["consindicado1"]); ?>"
				name="indicado1" />
				<?php
		}
		?>
		</div>
		<div class="labelw150">NOME DO INDICADO 2:</div>
		<div class="nomeindicado">
		<?php
		print ("<br/>INDICADO 2 :: " . $_SESSION ["consindicado2"]) ;
		?>
			<input type="hidden"
				value="<?php print($_SESSION["consindicado2"]); ?>"
				name="indicado2" />
			<?php
			?>
		</div>
		
		<div class="labelw150">NOME DO INDICADO 3:</div>
		<div class="nomeindicado">
		<?php
		print ("<br/>INDICADO 3 :: " . $_SESSION ["consindicado3"]) ;
		?>
			<input type="hidden"
				value="<?php print($_SESSION["consindicado3"]); ?>"
				name="indicado3" />
			<?php
			?>
		</div>
		
		
		<div class="labelw150">NOME DO INDICADO 4:</div>
		<div class="nomeindicado">
		<?php
		print ("<br/>INDICADO 4 :: " . $_SESSION ["consindicado4"]) ;
		?>
			<input type="hidden"
				value="<?php print($_SESSION["consindicado4"]); ?>"
				name="indicado4" />
			<?php
			?>
		</div>
		
		<div class="labelw150">NOME DO INDICADO 5:</div>
		<div class="nomeindicado">
		<?php
		print ("<br/>INDICADO 5 :: " . $_SESSION ["consindicado5"]) ;
		?>
			<input type="hidden"
				value="<?php print($_SESSION["consindicado5"]); ?>"
				name="indicado5" />
			<?php
			?>
		</div>
		
		
		<input type="button" class="botao" value="VOLTAR"
			onclick="hideAll('step2'); <?php $_SESSION["currentstep"] = 6;?>" />
		<input type="submit" class="botao" value="CONFIRMAR" />
	</form>

	<div class="botaosalvar"></div>


</div>


<div id="step8" class="step8">


	<div class="textvotante">NOME DO VOTANTE / CARGO</div>

	<div class="labelcargo">CARGO: COONSELHO</div>
	<div class="labelcaord">CORDENA&Ccedil;&Atilde;O</div>
	<form method="post" action="step8action.php">
		<div class="comprovante">COMPROVANTE</div>
		<input type="button" class="botao" value="IMPRIMIR" /> <input
			type="submit" class="botao" value="CONTINUAR" />
	</form>


</div>


<div id="step9" class="step9">

	<div class="labelcargo">FIM</div>
	<form method="post" action="step9action.php">
		<input type="submit" class="botao" value="FIM" />
	</form>

</div>
