<?php
/**
 * Template Name: Home Template
 */
?>

<section class="landing">
<div id="video-bg">
  <video id="background-video" muted autoplay loop poster="<?php bloginfo('template_directory'); ?>/assets/videobg/background.png">
    <source src="<?php bloginfo('template_directory'); ?>/assets/videos/video.mp4" type="video/mp4" >
  </video>
</div>
    <div class="landing-message text-center">

        <div class="landing-message-text">
          <div class="line"></div>
          <h1>We make quality beer<br>From quality materials</h1>
<div class="line"></div>
          <button class="btn btn-default">BROWSE THE BEERS</button>
        

        </div>
        
        
        <div class="landing-bottles">
          <img width="150" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
          <img width="150" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
          <img width="150" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        </div>
    </div>
</section>

<section class="skew-left"></section>

<section class="welcome">
    <div class="col-lg-6 text-center center welcome-text"><div class="line"></div>
      <h2>Welcome to Flying Couch Brewing</h2> 
      <div class="line"></div>
      <div class="col-lg-8 center">
      <p>A danish craft brewery placed in the <a href="#map">north western part of Copenhagen.</a></p>
      <p>
      Flying Couch Brewing was founded in 2011 by <a href="">Peter Sonne</a> later joined by <a href="">Jannik Sahlholdt</a>. 
      Today Flying Couch Brewing consists of 5 members with the additions of <a href="">Kasper Gerdes</a>, <a href="">Kim Christiansen</a> & <a href="">Michael Aaron</a>.
      </p>
      <p>
      The brewery is composed of a 4-kettle brewing equipment with a yearly capacity of 10.000 hL. 
      We brew handcrafted high quality beer with an edge. Inspired by all of the world we brew with passion and curiosity!</p>
      </div>
    </div>
  </div>
</section>

<section class="skew-right bg-black"></section>

<section class="brewery bg-black">
  <div class="col-lg-10 brewery-wrap text-center">
    <div class="col-lg-6 left">
      <div class="line"></div>
      <h2 class="color-white">Copenhagen Brewery</h2>
      <div class="line"></div>
      <button class="btn btn-default">TAKE THE TOUR</button>
    </div>
    <figure class="col-lg-6 section-image right">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/fill.jpg" />
    </figure>


  </div>
</section>
<div class="clearfix"></div>

<section class="skew-left bg-black z1"></section>

<section class="fc-map">
<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script> 
 
<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(55.702017,12.519893),
            zoom: 12,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            scaleControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
{
    "elementType": "geometry",
    "stylers": [
      { "hue": "#ff4400" },
      { "saturation": -68 },
      { "lightness": -4 },
      { "gamma": 0.72 }
    ]
  },{
    "featureType": "road",
    "elementType": "labels.icon"  },{
    "featureType": "landscape.man_made",
    "elementType": "geometry",
    "stylers": [
      { "hue": "#0077ff" },
      { "gamma": 3.1 }
    ]
  },{
    "featureType": "water",
    "stylers": [
      { "hue": "#00ccff" },
      { "gamma": 0.44 },
      { "saturation": -33 }
    ]
  },{
    "featureType": "poi.park",
    "stylers": [
      { "hue": "#44ff00" },
      { "saturation": -23 }
    ]
  },{
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      { "hue": "#007fff" },
      { "gamma": 0.77 },
      { "saturation": 65 },
      { "lightness": 99 }
    ]
  },{
    "featureType": "water",
    "elementType": "labels.text.stroke",
    "stylers": [
      { "gamma": 0.11 },
      { "weight": 5.6 },
      { "saturation": 99 },
      { "hue": "#0091ff" },
      { "lightness": -86 }
    ]
  },{
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      { "lightness": -48 },
      { "hue": "#ff5e00" },
      { "gamma": 1.2 },
      { "saturation": -23 }
    ]
  },{
    "featureType": "transit",
    "elementType": "labels.text.stroke",
    "stylers": [
      { "saturation": -64 },
      { "hue": "#ff9100" },
      { "lightness": 16 },
      { "gamma": 0.47 },
      { "weight": 2.7 }
    ]
  }
],
        }
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['Flying Couch Brewing', 'Bygmestervej 23, 2400, København', '21 40 61 64', 'info@flyingcouch.dk', '', 55.706245, 12.535695000000032, 'https://mapbuildr.com/assets/img/markers/solid-pin-black.png']
        ];
        for (i = 0; i < locations.length; i++) {
      if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
      if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
      if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
     }
 function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
      var infoWindowVisible = (function () {
              var currentlyVisible = false;
              return function (visible) {
                  if (visible !== undefined) {
                      currentlyVisible = visible;
                  }
                  return currentlyVisible;
               };
           }());
           iw = new google.maps.InfoWindow();
           google.maps.event.addListener(marker, 'click', function() {
               if (infoWindowVisible()) {
                   iw.close();
                   infoWindowVisible(false);
               } else {
                   var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+desc+"<p><p>"+telephone+"<p><a href='mailto:"+email+"' >"+email+"<a></div>";
                   iw = new google.maps.InfoWindow({content:html});
                   iw.open(map,marker);
                   infoWindowVisible(true);
               }
        });
        google.maps.event.addListener(iw, 'closeclick', function () {
            infoWindowVisible(false);
        });
 }
}
</script>


<div id='map' class="z0"></div>
</section>
<!-- 

<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(55.702017,12.519893),
            zoom: 12,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            scaleControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
    {
      "stylers": [
        { "visibility": "on" },
        { "saturation": -100 },
        { "gamma": 0.54 }
      ]
    },{
      "featureType": "road",
      "elementType": "labels.icon",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "water",
      "stylers": [
        { "color": "#4d4946" }
      ]
    },{
      "featureType": "poi",
      "elementType": "labels.icon",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "poi",
      "elementType": "labels.text",
      "stylers": [
        { "visibility": "simplified" }
      ]
    },{
      "featureType": "road",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#ffffff" }
      ]
    },{
      "featureType": "road.local",
      "elementType": "labels.text",
      "stylers": [
        { "visibility": "simplified" }
      ]
    },{
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#ffffff" }
      ]
    },{
      "featureType": "transit.line",
      "elementType": "geometry",
      "stylers": [
        { "gamma": 0.48 }
      ]
    },{
      "featureType": "transit.station",
      "elementType": "labels.icon",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "road",
      "elementType": "geometry.stroke",
      "stylers": [
        { "gamma": 7.18 }
      ]
    }
  ],
        }
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['Flying Couch Brewing', 'Bygmestervej 23, 2400, København', '21 40 61 64', 'info@flyingcouch.dk', '', 55.706245, 12.535695000000032, 'https://mapbuildr.com/assets/img/markers/solid-pin-black.png']
        ];
        for (i = 0; i < locations.length; i++) {
      if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
      if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
      if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
     }
 function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
      var infoWindowVisible = (function () {
              var currentlyVisible = false;
              return function (visible) {
                  if (visible !== undefined) {
                      currentlyVisible = visible;
                  }
                  return currentlyVisible;
               };
           }());
           iw = new google.maps.InfoWindow();
           google.maps.event.addListener(marker, 'click', function() {
               if (infoWindowVisible()) {
                   iw.close();
                   infoWindowVisible(false);
               } else {
                   var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+desc+"<p><p>"+telephone+"<p><a href='mailto:"+email+"' >"+email+"<a></div>";
                   iw = new google.maps.InfoWindow({content:html});
                   iw.open(map,marker);
                   infoWindowVisible(true);
               }
        });
        google.maps.event.addListener(iw, 'closeclick', function () {
            infoWindowVisible(false);
        });
 }
}
</script>
-->