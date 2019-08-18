var mymap = L.map("mapid").setView([50.457747077070806, 4.8686887633323295],18);
L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager_labels_under/{z}/{x}/{y}{r}.png', {maxZoom: 40}).addTo(mymap);
var marker = L.marker([50.457747077070806, 4.8686887633323295]).addTo(mymap);
marker.bindPopup("<b>FAMISEC<b> <br> Avenue du Bourgmestre Jean Materne 38, 5100 Namur").openPopup();