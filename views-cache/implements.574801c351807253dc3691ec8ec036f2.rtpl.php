<?php if(!class_exists('Rain\Tpl')){exit;}?><title>Sisweb - Solicitações</title>
  		<div class="ui horizontal divider">Menu</div>
  		<div class="ui buttons">
	      	<a class="ui green button" href="/admin/implements/create">
	        	<i class="plus icon"></i>Novo Implemento
	      	</a>
	      	<a class="ui green button" href="/admin/implements">
	        	<i class="list icon"></i>Listar Implementos
	      	</a>
	      	<a class="ui green button" href="/admin/implements/consult">
	        	<i class="info icon"></i>Consultar Implemento
	      	</a>
	    </div>
	    <br/>
	    <br/>
	    <div class="ui horizontal divider">Solicitações</div>
	    <table class='ui very basic table'>
	        <thead align='center'>
		        <tr>
		        	<th>Codigo</th>
		            <th>Cliente</th>
		            <th>Implemento</th>
		            <th>Problema</th>
		            <th>Status</th> 
		            <th>Opções</th>
		        </tr>
	        </thead>
	        <tbody align='center'>
	            
	            	<tr>
	            		<td>a</td>
	            		<td>a</td>
	            		<td>a</td>
	            		<td>a</td>
	            		<td>a</td>
	            		<td>
			                <a href="/admin/users/" class="circular ui green icon button">
			                  <i class="edit icon"></i>
			                </a>
			                <a href="/admin/users//delete" onclick="return confirm('Deseja realmente excluir?')" class="circular ui red icon button">
			                  <i class="delete icon"></i>
			                </a>
	              		</td>
	            	</tr>
	            
	        </tbody>        
	    </table>
	    <!--<?php $counter1=-1;  if( isset($requests) && ( is_array($requests) || $requests instanceof Traversable ) && sizeof($requests) ) foreach( $requests as $key1 => $value1 ){ $counter1++; ?>-->
	    <!--<?php echo htmlspecialchars( $value1["idrequest"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-->
	    <!--<?php echo htmlspecialchars( $value1["idcustomer"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-->
		<!--<?php echo htmlspecialchars( $value1["txnameimplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-->
		<!--<?php echo htmlspecialchars( $value1["txproblem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-->
		<!--<?php echo htmlspecialchars( $value1["txnamestatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-->
	    <!--<?php } ?>-->