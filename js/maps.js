// $(function () {
  function initMap() {
    // console.log('initMap');
    var coords_cix = {
      lat: -6.7691707,
      lng: -79.8379537
    };


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 20,
      center: coords_cix,
      zoomControl: true,
      mapTypeControl: false,
      scaleControl: true,
      streetViewControl: true,
      fullscreenControl: true,
    });

    var iconMarker = {
      url: './img/map-marker.png',
    };

    var marker_cix = new google.maps.Marker({
      position: coords_cix,
      map: map,
      icon: iconMarker,
      title: 'Leoncio Prado 925 (A 20 metros de llegar a la Av. Balta)',
    });

    var contentString = `
                        <div class="infowindow">
                          <div class="content">
                            <p>
                              <strong>Direccion: </strong>Ca. Leoncio Prado 925 (A 20 metros de llegar a la Av. Balta). </strong> <br>
                              <strong>Tel: </strong>   <a href="tel:+74526964">(074) 526964</a> </strong>  <br>
                              <strong>Email: </strong>reservas@hostalcostanorte.com.pe</strong>
                              </p>

                          </div>
                        </div> `;

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
    // Zoom click marker
    google.maps.event.addListener(marker_cix, 'click', function () {
      infowindow.open(map, marker_cix);

      map.setZoom(17);
      map.setCenter(marker_cix.getPosition());
    });

  };

  //initMap();
  setTimeout(() => { console.log('cargar mapa'); initMap(); }, 2500);

// });