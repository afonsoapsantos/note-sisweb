<?php if(!class_exists('Rain\Tpl')){exit;}?><title>Sisweb - Clientes</title>
<div class="ui horizontal divider">Menu</div>
    <div class="ui buttons">
      <a class="ui green button" href="/admin/users/customers/create">
        <i class="user plus icon"></i>Novo CLiente
      </a>
      <a class="ui green button" href="/admin/users/customers">
        <i class="users icon"></i>Listar CLientes
      </a>
      <a class="ui green button" href="//admin/users/customers/consult">
        <i class="id card icon"></i>Consultar CLiente
      </a>
</div><br/><br/>
<form class="ui form" action="/admin/users/create" method="POST">
	<div class="ui field">
		<div class="ui horizontal divider">Adicionar Cliente</div>
		<div class="field" align="left" style="margin-left: 50px; margin-right: 50px;">
			<div class="ui horizontal divider">Dados Pessoais</div>
			
			<label class="ui label">Nome Completo:</label>
		    <input type="text" name="txperson" placeholder="Nome Completo"><br><br>
		    
		    <label class="ui label">RG:</label>
		    <input type="text" name="nurg" placeholder="RG: 1245612312"><br><br>
		    
		    <label class="ui label">CPF:</label>
		    <input type="text" name="nucpf" placeholder="CPF: 78945612389"><br><br>
		    
		    <label class="ui label">email:</label>
		    <input type="email" name="txemail" placeholder="Email: joão@outlook.com"><br><br>

		    <div class="ui horizontal divider">Dados Empresariais</div>

		    <div class="field">
		    	<label class="ui label">Razão Social:</label>
		    	<input type="text" name="txcorporatename" placeholder="Ex: João Marcos ME">
		    </div>

		    <div class="field">
		    	<label class="ui label">Nome Fantasia:</label>
		    	<input type="text" name="txfantasyname" placeholder="Ex: Calhas Santos">
		    </div>

		    <div class="field">
		    	<label class="ui label">Inscrição Estadual:</label>
		    	<input type="number" name="nuie" placeholder="Inscrição Estadual">
		    </div>

		    <div class="field">
		    	<label class="ui label">CNPJ:</label>
		    	<input type="number" name="nucpj" placeholder="CNPJ">
		    </div>

		    <div class="ui horizontal divider">Dados de Acesso</div>
		    
		    <label class="ui label">Usuário:</label>
		    <input type="text" name="txlogin" placeholder="Usuário"><br><br>
		    
		    <label class="ui label">Senha:</label>
		    <input type="password" name="txpassword" placeholder="Senha de acesso"><br><br>

            <div class="field">
            	<label class="ui label">Status:</label>
            	<input type="hidden" name="fkstatususer" value="4">
            	<input type="text" readonly="true" value="Solicitação">
            </div>

            <div class="field">
            	<label class="ui label">Tipo de Usuario: </label>
            	<input type="hidden" name="fkusertype" value="4">
            	<input type="text" readonly="true" value="Cliente">
            </div>
            
		</div>
		<div class="ui buttons">
			<button class="ui green button" type="submit"><i class="save icon"></i>Salvar</button>
			<a class="ui red button" href="/admin/users/create">
				<i class="delete icon"></i>Cancelar
			</a>
		</div><br>
	</div>
</form><br><br>