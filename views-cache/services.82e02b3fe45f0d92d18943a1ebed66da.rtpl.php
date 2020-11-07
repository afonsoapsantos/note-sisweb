<?php if(!class_exists('Rain\Tpl')){exit;}?><div id="page-admin-services">
	
	<div class="container">
		<aside>
			<header class="vertical-menu">
				<a href="/admin/services" class="item active">Serviços</a>
				<a href="/admin/services/create" class="item">Novo</a>
				<a href="#" class="item">Gráficos</a>
				<a href="#" class="item">Analises</a>
				<a href="#" class="item">Quadros</a>
				<a href="#" class="item">Agendas</a>
			</header>
		</aside>
	
		<main>
			<h2>Serviços</h2>
			<table>
				<thead>
					<tr>
						<!-- <th>Codigo</th> -->
						<th>Serviço</th>
						<th>Descrição</th>
						<th>Preço</th>
						<th>Opções</th>
					</tr>
				</thead>
				<tbody>
					<?php $counter1=-1;  if( isset($services) && ( is_array($services) || $services instanceof Traversable ) && sizeof($services) ) foreach( $services as $key1 => $value1 ){ $counter1++; ?>
					<tr>
						<!-- <td><?php echo htmlspecialchars( $value1["idservice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td> -->
						<td><?php echo htmlspecialchars( $value1["txnameservice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
						<td><?php echo htmlspecialchars( $value1["txdescriptionservice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
						<td>R$<?php echo formPrice($value1["vlpriceservice"]); ?></td>
						<td>
							<a href="/admin/services/update/<?php echo htmlspecialchars( $value1["idservice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Atualizar</a>
				              <a href="/admin/services/delete/<?php echo htmlspecialchars( $value1["idservice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente excluir?')">
				                Excluir
				              </a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</main>
	</div>
</div>