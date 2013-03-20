<article>
	<header>
		<p class="hide-printer"><a href="index.php">&#60;&#60; Pealehele</a></p>
		<h1>Hääleta</h1>
		@if(Auth::check())
			<p class="hide-printer">Hääletamiseks kliki sobiva kandidaadi peale.</p>
		@else
			<p class="hide-printer">Soovid hääletada? <a href="{{ url("login") }}">Logi sisse &#62;</a></p>
		@endif
	</header>
	<section>
		<form id="search-form" action="">
			<input type="text" name="name" disabled title="Väljalülitatud kuna vajab serveri-poolset otsingut" placeholder="Sisesta kandidaadi nimi">
			<select name="region" id="sorting">
				<option value="0">Kõik valimisringkonnad</option>
				<option value="1">Valimisringkond 1</option>
				<option value="2">Valimisringkond 2</option>
			</select>
			<select name="party">
				<option value="0">Kõik parteid</option>
				<option value="1">Partei 1</option>
				<option value="2">Partei 2</option>
			</select>
			<input type="submit" value="Otsi" />
		</form>
		<table id="candidate-list">
			<thead>
				<tr>
					<th>Number</th>
					<th>Nimi</th>
					<th>Ringkond</th>
					<th>Partei</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1234567855</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567855") }}">Janaida Jalutova</a>
					</td>
					<td>Tartumaa</td>
					<td>Eesti Reformierakond</td>
				</tr>
				<tr>
					<td>1234567894</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567894") }}">Ildegaard Ilumeel</a>
					</td>
					<td>Tartumaa</td>
					<td>Sotsiaaldemokraatlik erakond</td>
				</tr>
				<tr>
					<td>1234567893</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567893") }}">Harald Hamster</a>
					</td>
					<td>Tartumaa</td>
					<td>Isamaa- ja Respublica Liit</td>
				</tr>
				<tr>
					<td>1234567892</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567892") }}">Gerhard Gätegõverdus</a>
					</td>
					<td>Tartumaa</td>
					<td>Sotsiaaldemokraatlik erakond</td>
				</tr>
				<tr>
					<td>1234567891</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567891") }}">Ferdinand Fuksia</a>
					</td>
					<td>Tartumaa</td>
					<td>Eesti Keskerakond</td>
				</tr>
				<tr>
					<td>1234567890</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567890") }}">Eduard Ekskavaator</a>
					</td>
					<td>Tartumaa</td>
					<td>Eesti Reformierakond</td>
				</tr>
				<tr>
					<td>1234567857</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567857") }}">Leila Lagerfeld</a>
					</td>
					<td>Põlvamaa</td>
					<td>Eesti Keskerakond</td>
				</tr>
				<tr>
					<td>1234567856</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567856") }}">Kõikme Kannatameära</a>
					</td>
					<td>Põlvamaa</td>
					<td>Sotsiaaldemokraatlik erakond</td>
				</tr>
				<tr>
					<td>1234567855</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567855") }}">Janaida Jalutova</a>
					</td>
					<td>Põlvamaa</td>
					<td>Isamaa- ja Respublica Liit</td>
				</tr>
				<tr>
					<td>1234567894</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567894") }}">Ildegaard Ilumeel</a>
					</td>
					<td>Põlvamaa</td>
					<td>Eesti Reformierakond</td>
				</tr>
				<tr>
					<td>1234567893</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567893") }}">Harald Hamster</a>
					</td>
					<td>Jõgevamaa</td>
					<td>Isamaa- ja Respublica Liit</td>
				</tr>
				<tr>
					<td>1234567892</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567892") }}">Gerhard Gätegõverdus</a>
					</td>
					<td>Ida-Virumaa</td>
					<td>Sotsiaaldemokraatlik erakond</td>
				</tr>
				<tr>
					<td>1234567891</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567891") }}">Ferdinand Fuksia</a>
					</td>
					<td>Läänemaa</td>
					<td>Eesti Keskerakond</td>
				</tr>
				<tr>
					<td>1234567890</td>
					<td>
						<a href="{{ url("kandidaadid/info/1234567890") }}">Eduard Ekskavaator</a>
					</td>
					<td>Harjumaa</td>
					<td>Eesti Reformierakond</td>
				</tr>
			</tbody>
		</table>
	</section>
</article>