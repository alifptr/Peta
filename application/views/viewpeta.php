<div id="map" style="height:500px" class="map"></div>
<script>
       var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;
            highlightLayer.openPopup();
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-7.135637393840467,107.17079006612646],[-6.67427390261547,107.73908221090927]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_GoogleRoads_0');
        map.getPane('pane_GoogleRoads_0').style.zIndex = 400;
        var layer_GoogleRoads_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleRoads_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_GoogleRoads_0;
        map.addLayer(layer_GoogleRoads_0);
        map.createPane('pane_GoogleMaps_1');
        map.getPane('pane_GoogleMaps_1').style.zIndex = 401;
        var layer_GoogleMaps_1 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleMaps_1',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_GoogleMaps_1;
        map.addLayer(layer_GoogleMaps_1);
        map.createPane('pane_GoogleSatelliteHybrid_2');
        map.getPane('pane_GoogleSatelliteHybrid_2').style.zIndex = 402;
        var layer_GoogleSatelliteHybrid_2 = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleSatelliteHybrid_2',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_GoogleSatelliteHybrid_2;
        map.addLayer(layer_GoogleSatelliteHybrid_2);
        function pop_JenisTanah_KBB_3(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Id</th>\
                        <td>' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Luas</th>\
                        <td>' + (feature.properties['Luas'] !== null ? autolinker.link(feature.properties['Luas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JenisTanah_KBB_3_0(feature) {
            switch(String(feature.properties['Jenis'])) {
                default:
                    return {
                pane: 'pane_JenisTanah_KBB_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(51,227,119,1.0)',
                interactive: true,
            }
                    break;
                case 'Aluvial':
                    return {
                pane: 'pane_JenisTanah_KBB_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(16,134,207,1.0)',
                interactive: true,
            }
                    break;
                case 'Andosol':
                    return {
                pane: 'pane_JenisTanah_KBB_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(178,213,120,1.0)',
                interactive: true,
            }
                    break;
                case 'Latosol':
                    return {
                pane: 'pane_JenisTanah_KBB_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(207,118,62,1.0)',
                interactive: true,
            }
                    break;
                case 'Podsol Merah Kuning':
                    return {
                pane: 'pane_JenisTanah_KBB_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(230,77,172,1.0)',
                interactive: true,
            }
                    break;
                case 'Regosol':
                    return {
                pane: 'pane_JenisTanah_KBB_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(90,19,203,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_JenisTanah_KBB_3');
        map.getPane('pane_JenisTanah_KBB_3').style.zIndex = 403;
        map.getPane('pane_JenisTanah_KBB_3').style['mix-blend-mode'] = 'normal';
        var layer_JenisTanah_KBB_3 = new L.geoJson(json_JenisTanah_KBB_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_JenisTanah_KBB_3',
            layerName: 'layer_JenisTanah_KBB_3',
            pane: 'pane_JenisTanah_KBB_3',
            onEachFeature: pop_JenisTanah_KBB_3,
            style: style_JenisTanah_KBB_3_0,
        });
        bounds_group.addLayer(layer_JenisTanah_KBB_3);
        map.addLayer(layer_JenisTanah_KBB_3);
        var baseMaps = {};
        L.control.layers(baseMaps,{'JenisTanah_KBB<br /><table><tr><td style="text-align: center;"><img src="legend/JenisTanah_KBB_3_0.png" /></td><td></td></tr><tr><td style="text-align: center;"><img src="legend/JenisTanah_KBB_3_Aluvial1.png" /></td><td>Aluvial</td></tr><tr><td style="text-align: center;"><img src="legend/JenisTanah_KBB_3_Andosol2.png" /></td><td>Andosol</td></tr><tr><td style="text-align: center;"><img src="legend/JenisTanah_KBB_3_Latosol3.png" /></td><td>Latosol</td></tr><tr><td style="text-align: center;"><img src="legend/JenisTanah_KBB_3_PodsolMerahKuning4.png" /></td><td>Podsol Merah Kuning</td></tr><tr><td style="text-align: center;"><img src="legend/JenisTanah_KBB_3_Regosol5.png" /></td><td>Regosol</td></tr></table>': layer_JenisTanah_KBB_3,"Google Satellite Hybrid": layer_GoogleSatelliteHybrid_2,"Google Maps": layer_GoogleMaps_1,"Google Roads": layer_GoogleRoads_0,}).addTo(map);
        setBounds();
        map.addControl(new L.Control.Search({
            layer: layer_JenisTanah_KBB_3,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'Jenis'}));
        </script>
