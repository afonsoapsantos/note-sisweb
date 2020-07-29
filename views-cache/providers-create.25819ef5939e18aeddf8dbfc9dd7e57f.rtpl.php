<?php if(!class_exists('Rain\Tpl')){exit;}?><title>Sisweb - Adicionar Fornecerdor</title>
<div class="ui segment">
	<div class="ui buttons">

		<a class="ui green button" href="">
			<i class="plus icon"></i>Novo Fornecedor
		</a>
		<a class="ui green button" href="/manager/providers">
			<i class="list icon"></i>Fornecedores
		</a>
	</div>

	<div class="field">
		<form class="ui form" method="POST" action="/manager/providers/create">
			
			<div class="ui field" style="margin-left: 60px; margin-right: 60px;">
				<div class="ui horizontal divider">Adicionar Fornecedor</div>
				<div class="ui field" align="left">

					<div class="field">
						<label class="ui label">Razão Social: </label>
						<input type="text" name="txcorporatename">
					</div>

					<div class="field">
						<label class="ui label">Nome Fantasia: </label>
						<input type="text" name="txfantasyname">
					</div>

					<div class="field">
						<label class="ui label">CNPJ: </label>
						<input type="number" name="nucnpj">
					</div>

					<div class="field">
						<label class="ui label">Inscrição Estadual: </label>
						<input type="number" name="nustateregistration">
					</div>

					<div class="field">
						<label class="ui label">Inscrição Municipal: </label>
						<input type="number" name="numunicipalregistration">
					</div>
					
				</div>

				<div class="ui buttons">
					<button type="submit" class="ui green button"><i class="save icon"></i>Adicionar</button>
					<a href="/manager/providers/create" class="ui red button">Cancelar</a>
				</div>
			</div>

		</form>
	</div>
</div>