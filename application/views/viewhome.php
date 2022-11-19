<div id="map" style="height:500px" class="map"></div>

	
	<script>
		var map = L.map('map', {
			center: [-6.2587903,106.8026797],
			zoom: 13,
			zoomControl: false
		});
		
		var grogolselatan = L.layerGroup();
		var toponimi = L.layerGroup();
		var jalan = L.layerGroup();
		var sungai = L.layerGroup();
		var nonagri = L.layerGroup();
		var saranaibadah = L.layerGroup();
		var pemerintahan = L.layerGroup();
		var pendidikan = L.layerGroup();
		var niaga = L.layerGroup();
		var bidang = L.layerGroup();
    $.getJSON("<?= base_url() ?>geojson/grogolselatan.geojson",function(data){
 	L.geoJson( data , {
 		style: function(feature){
 			var fillColor,
 				Data = feature.properties.data;
			return { color: "#e5eb34", weight: 1, fillColor: fillColor, fillOpacity: .5 };
	},
	onEachFeature: function( feature, layer ){
	  layer.bindPopup( "<strong>" + feature.properties.NAMOBJ + "</strong>")
 }
 } ).addTo(grogolselatan);
});
	$.getJSON("<?= base_url() ?>geojson/Toponimi1.geojson",function(data){
 	L.geoJson( data , {
 		style: function(feature){
 			var fillColor,
 				Data = feature.properties.data;
 			
			return { color: "#eb3434", weight: 1, fillColor: fillColor, fillOpacity: .9 };
	},
	onEachFeature: function( feature, layer ){
	  layer.bindPopup( "<strong>" + feature.properties.NAMOBJ + "</strong>")
 }
 } ).addTo(toponimi);
});
$.getJSON("<?= base_url() ?>geojson/jalan1.geojson",function(data){
 	L.geoJson( data , {
 		style: function(feature){
 			var fillColor,
 				Data = feature.properties.data;
 			
			return { color: "#eb3434", weight: 2, fillColor: fillColor, fillOpacity: .9 };
	},
	onEachFeature: function( feature, layer ){
	  layer.bindPopup( "<strong>" + feature.properties.REMARK + "</strong>")
 }
 } ).addTo(jalan);
});
$.getJSON("<?= base_url() ?>geojson/sungai1.geojson",function(data){
 	L.geoJson( data , {
 		style: function(feature){
 			var fillColor,
 				Data = feature.properties.data;
 			
			return { color: "#3456eb", weight: 2, fillColor: fillColor, fillOpacity: .9 };
	},
	onEachFeature: function( feature, layer ){
	  layer.bindPopup( "<strong>" + feature.properties.NAMOBJ + "</strong>")
 }
 } ).addTo(sungai);
});
$.getJSON("<?= base_url() ?>geojson/nonagri1.geojson",function(data){
 	L.geoJson( data , {
 		style: function(feature){
 			var fillColor,
 				Data = feature.properties.data;
 			
			return { color: "#eb9934", weight: 1, fillColor: fillColor, fillOpacity: .9 };
	},
	onEachFeature: function( feature, layer ){
	  layer.bindPopup( "<strong>" + feature.properties.REMARK + "</strong>")
 }
 } ).addTo(nonagri);
});
$.getJSON("<?= base_url() ?>geojson/saranaibadah1.geojson",function(data){
 	L.geoJson( data , {
 		style: function(feature){
 			var fillColor,
 				Data = feature.properties.data;
 			
			return { color: "#34c3eb", weight: 1, fillColor: fillColor, fillOpacity: .9 };
	},
	onEachFeature: function( feature, layer ){
	  layer.bindPopup( "<strong>" + feature.properties.REMARK + "</strong>")
 }
 } ).addTo(saranaibadah);
});
$.getJSON("<?= base_url() ?>geojson/pemerintahan1.geojson",function(data){
 	L.geoJson( data , {
 		style: function(feature){
 			var fillColor,
 				Data = feature.properties.data;
 			
			return { color: "#34c3eb", weight: 1, fillColor: fillColor, fillOpacity: .9 };
	},
	onEachFeature: function( feature, layer ){
	  layer.bindPopup( "<strong>" + feature.properties.REMARK + "</strong>")
 }
 } ).addTo(pemerintahan);
});
$.getJSON("<?= base_url() ?>geojson/pendidikan1.geojson",function(data){
 	L.geoJson( data , {
 		style: function(feature){
 			var fillColor,
 				Data = feature.properties.data;
 			
			return { color: "#34c3eb", weight: 1, fillColor: fillColor, fillOpacity: .9 };
	},
	onEachFeature: function( feature, layer ){
	  layer.bindPopup( "<strong>" + feature.properties.REMARK + "</strong>")
 }
 } ).addTo(pendidikan);
});
$.getJSON("<?= base_url() ?>geojson/niaga1.geojson",function(data){
 	L.geoJson( data , {
 		style: function(feature){
 			var fillColor,
 				Data = feature.properties.data;
 			
			return { color: "#34c3eb", weight: 1, fillColor: fillColor, fillOpacity: .9 };
	},
	onEachFeature: function( feature, layer ){
	  layer.bindPopup( "<strong>" + feature.properties.REMARK + "</strong>")
 }
 } ).addTo(niaga);
});
		L.circle([-6.231927,106.7815783], 0)
            .addTo(map)
            .showMeasurements();;

		var tiles = L.tileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}.png', {
			maxZoom: 18,
			attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
		}).addTo(map);

		L.marker([-6.231927,106.7815783]).addTo(map)
		.bindPopup("<b>Rumah</b><br/>Alif ").openPopup();

		L.circle([-6.231927,106.78157837], 0, {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5
		}).addTo(map).bindPopup("Jangkauan");

		L.polygon([
			[-6.2587903,106.8026797],
			[-6.2587903,106.8026797],
			[-6.2587903,106.8026797]
			]).addTo(map).bindPopup("Jangkauan");


		var popup = L.popup();


		var printer = L.easyPrint({
      		tileLayer: tiles,
      		sizeModes: ['Current', 'A4Landscape', 'A4Portrait'],
      		filename: 'myMap',
      		exportOnly: true,
      		hideControlContainer: true
		}).addTo(map);

		function manualPrint () {
			printer.printMap('CurrentSize', 'MyManualPrint')
		}
		var c = new L.Control.Coordinates();
		c.addTo(map);
		function onMapClick(e) {
			c.setCoordinates(e);
		}

		map.on('click', onMapClick);

		var defaultLayer = L.tileLayer.provider('OpenStreetMap.Mapnik').addTo(map);

		var baseLayers = {
			'OpenStreetMap Default': defaultLayer,
			'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery'),
			
		};

		var overlayLayers = {'Administrasi':grogolselatan, 'Pasar' : bidang, 'Toponimi' : toponimi, 'Jaringan Jalan' : jalan, 'Jaringan Sungai' : sungai, 'Non Agri Alang' : nonagri, 'Sarana Ibadah' : saranaibadah, 'Pemerintahan' : pemerintahan, 'Pendidikan' : pendidikan, 'Niaga' : niaga
			
		};

		var layerControl = L.control.layers(baseLayers, overlayLayers, {collapsed: false}).addTo(map)
		<?php foreach ($mitigasi as $key => $value) { ?>
        mitigasi = L.geoJSON(<?= $value->geojson; ?>, {
            style: {
                color: 'white',
                dashArray: '1',
                lineCap: 'butt',
                lineJoin: 'miter',
                fillColor: '<?= $value->warna ?>',
                fillOpacity: 0.50,
            },
        }).addTo(bidang).bindPopup(
                "Waktu : <?= $value->waktu ?></br>" +
                "Nama Daerah : <?= $value->nama_daerah?></br>" +
                "Ancaman Mitigasi: <?= $value->ancaman_mitigasi?></br>" +
                "Kapasitas Mitigasi: <?= $value->kapasitas_mitigasi?></br>" +
                "Kerentanan Mitigasi: <?= $value->kerentanan_mitigasi ?><br>"+ 
                "Resiko Mitigasi : <?= $value->resiko_mitigasi ?></br>" );     
    <?php } ?>
    </script>
