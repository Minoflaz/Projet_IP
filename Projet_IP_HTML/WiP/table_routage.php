<?php
	require_once('header.php');
	require_once('nav.php');
?>
			
			<div id="content">
		
				<div id="welcome" class="routage">
					<h1>Remplir cette table de routage.</h1>
					
					<form id="routage" method="post">
						<table>
							<thead>
								<tr>
									<th id="destination">
										<label for="destination">Destination</label>
									</th>
									<th id="gateway">
										<label for="gateway">Gateway</label>
									</th>
									<th id="netmask">
										<label for="netmask">Netmask</label>
									</th>
									<th id="flags">
										<label for="flags">Flags</label>
									</th>
									<th id="interface">
										<label for="interface">Interface</label>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<input type="text" id="destination" name="destination"/>
									</td>
									<td>
										<input type="text" id="gateway" name="gateway"/>
									</td>
									<td>
										<input type="text" id="netmask" name="netmask"/>
									</td>
									<td>
										<input type="text" id="flags" name="flags"/>
									</td>
									<td>
										<input type="text" id="interface" name="interface"/>
									</td>
								</tr>
							</tbody>
						</table>

					</form>

				</div>
				
			</div>
<?php
	require_once('footer.php');
?>
	
