<?php include "header.php"; ?>

		<div class="main-container">
			<div class="main wrapper clearfix">
				<form>
					<label for="filter-region">Piirkond:</label>
					<select id="filter-region" name="region">
						<option value="0">Kogu Eesti</option>
						<option value="1">Valimisringkond 1</option>
						<option value="2">Valimisringkond 2</option>
					</select>
					<label for="filter-party">Partei:</label>
					<select id="filter-party" name="party">
						<option value="0">Kõik Parteid</option>
						<option value="1">Partei 1</option>
						<option value="2">Partei 2</option>
					</select>
					<label><input type="radio" name="type" value="party" checked="checked" /> Partei</label>
					<label><input type="radio" name="type" value="person" /> Isik</label>
					<button type="submit">Värskenda</button>
				</form>
				<div class="row-left">
					<img src="img/map.png" alt="Kaart" />
					<small class="attrib">Kaart <a href="http://commons.wikimedia.org/wiki/File:Estonia_location_map.svg">CC-by-sa Wikipedia</a></small>
				</div>
				<div class="row-right">
					<table>
						<thead>
							<tr>
								<th>Partei</th>
								<th>Tulemus</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Partei</th>
								<td>
									<div class="result-row" style="width: 50%;"></div>
									<div class="result-text">500,000 (25%)</div>
								</td>
							</tr>
							<tr>
								<th>Partei</th>
								<td>
									<div class="result-row" style="width: 40%;"></div>
									<div class="result-text">400,000 (20%)</div>
								</td>
							</tr>
							<tr>
								<th>Partei</th>
								<td>
									<div class="result-row" style="width: 30%;"></div>
									<div class="result-text">300,000 (15%)</div>
								</td>
							</tr>
							<tr>
								<th>Partei</th>
								<td>
									<div class="result-row" style="width: 20%;"></div>
									<div class="result-text">200,000 (10%)</div>
								</td>
							</tr>
							<tr>
								<th>Partei</th>
								<td>
									<div class="result-row" style="width: 10%;"></div>
									<div class="result-text">100,000 (5%)</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- #main -->
		</div> <!-- #main-container -->

		<?php include "footer.php"; ?>