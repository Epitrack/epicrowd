var APP = APP || {};
APP.Maps = {
  setUp: function() {
    this.initMap();
  },

  initMap: function() {
    // Exibir mapa;
    var myLatlng = new google.maps.LatLng(-8.131534799999999, -34.9040744);
    var mapOptions = {
      scrollwheel: false,
      scaleControl: false,
      zoom: 17,
      center: myLatlng,
      panControl: false,
      // scrollwheel:false,
      mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
      }
    }

    // Exibir o mapa na div;
    var map = new google.maps.Map(document.getElementById("location-map"), mapOptions);

    // Marcador personalizado;
    var image = 'https://cdn3.iconfinder.com/data/icons/eightyshades/512/72_Pin_alt-32.png';
    var marcadorPersonalizado = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: image,
      title: 'Mar Hotel',
      animation: google.maps.Animation.DROP
    });

    // Parâmetros do texto que será exibido no balão do mapa.
    var contentString = '<h2 class="maps-title">Mar Hotel</h2>' +
    '<p class="maps-description">R. Barão de Souza Leão, 451 - Boa Viagem, 51030-300.</p>' +
    '<p class="maps-description">Recife / PE - Brasil</p>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 500
    });

    infowindow.open(map,marcadorPersonalizado);

    // Estilizando o mapa;
    // Criando um array com os estilos
    var styles = [
      // {
      //   stylers: [
      //     { hue: "#214788" },
      //     { saturation: 40 },
      //     { lightness: -10 },
      //     { gamma: 1.50 }
      //   ]
      // },
      {
        featureType: "road",
        elementType: "geometry",
        stylers: [
          { lightness: 100 },
          { visibility: "simplified" }
        ]
      },
      {
        featureType: "road",
        elementType: "labels"
      }
    ];

    // crio um objeto passando o array de estilos (styles) e definindo um nome para ele;
    var styledMap = new google.maps.StyledMapType(styles, {
      name: "MMGS"
    });

    // Aplicando as configurações do mapa
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
  }
}
