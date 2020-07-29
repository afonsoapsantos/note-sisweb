<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="field">	
		<div class="ui horizontal divider">Menu</div>
		<div class="ui buttons">
	      	<a class="ui green button" href="/customer/farms/create">
	        	<i class="plus icon"></i>Nova Fazenda
	      	</a>
	      	<a class="ui green button" href="/customer/farms">
	        	<i class="list icon"></i>Listar Fazendas
	      	</a>
	    </div>
	</div>
	<br>
	<div class="field" align="left" id="margin"	>
		<?php if( $success != '' ){ ?>
		<div class="field">
			<div class="ui success message">
				<div class="header"><?php echo htmlspecialchars( $success, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
			</div>
		</div>
		<?php } ?>
		<?php if( $error != '' ){ ?>
		<div class="field">
			<div class="ui negative message">
				<div class="header"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
			</div>
		</div>
		<?php } ?>
		<h2 class="ui header dividing" align="center">Atualizar Fazenda</h2>
		<form class="ui form" action="/customer/farms/<?php echo htmlspecialchars( $farm["idfarm"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">

			<div class="field">
				<label>Nome da Fazenda: </label>
				<input type="text" name="txnamefarm" value="<?php echo htmlspecialchars( $farm["txnamefarm"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
			</div>

			<div class="field">
				<label>Descrição da Fazenda: </label>
				<input type="text" name="txdescriptionfarm" value="<?php echo htmlspecialchars( $farm["txdescriptionfarm"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
			</div>

			<div class="field" align="center">
				<div class="ui buttons">
					<button class="ui green button" type="submit">Salvar</button>
					<a class="ui black button" href="/customer/farms">Cancelar</a>
				</div>
			</div>
		</form><br>
	</div>