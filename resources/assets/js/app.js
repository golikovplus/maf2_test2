
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

require('./component');

Vue.component('maf-app', require('./components/index.vue'));
Vue.http.options.emulateJSON = true;

const app = new Vue({
  el: '#app',
  data: {
    lead: null,
    googleMapRequested: false,
    googleMap: null,
    googleMapCallback: null
  },
  created: function() {
    this.lead = new Lead();
    this.lead.load();
  },
  methods: {
    geoSet: function(formatted_address, pos) {
      if (this.googleMapCallback !== null) this.googleMapCallback(formatted_address, pos);
    },
    getGoogleMap: function() {
      var mapProp = {
        center: new google.maps.LatLng(32.715736, -117.161087), // Note: nginx good autodetect of first positions
        zoom: 13,
        streetViewControl: false,
        scaleControl: false,
        scrollwheel: false,
        panControl: false,
        zoomControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,

        //styles from https://snazzymaps.com/style/74/becomeadinosaur
        styles:
          [
            {
              "elementType": "labels.text",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "landscape.natural",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#f5f5f2"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "administrative",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "transit",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi.attraction",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "landscape.man_made",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#ffffff"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "poi.business",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi.medical",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi.place_of_worship",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi.school",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi.sports_complex",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                },
                {
                  "visibility": "simplified"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "stylers": [
                {
                  "visibility": "simplified"
                },
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.icon",
              "stylers": [
                {
                  "color": "#ffffff"
                },
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.local",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "water",
              "stylers": [
                {
                  "color": "#71c8d4"
                }
              ]
            },
            {
              "featureType": "landscape",
              "stylers": [
                {
                  "color": "#e5e8e7"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "stylers": [
                {
                  "color": "#8ba129"
                }
              ]
            },
            {
              "featureType": "road",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "poi.sports_complex",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#c7c7c7"
                },
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "water",
              "stylers": [
                {
                  "color": "#a0d3d3"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "stylers": [
                {
                  "color": "#91b65d"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "stylers": [
                {
                  "gamma": 1.51
                }
              ]
            },
            {
              "featureType": "road.local",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "geometry",
              "stylers": [
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "poi.government",
              "elementType": "geometry",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "landscape",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "labels",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "geometry",
              "stylers": [
                {
                  "visibility": "simplified"
                }
              ]
            },
            {
              "featureType": "road.local",
              "stylers": [
                {
                  "visibility": "simplified"
                }
              ]
            },
            {
              "featureType": "road"
            },
            {
              "featureType": "road"
            },
            {},
            {
              "featureType": "road.highway"
            }
          ]
      };
      var mapElement = document.getElementById("map");
      return this.googleMap = new google.maps.Map(mapElement, mapProp);
    },
    sendLead: function() {
      this.$http.post('/api/lead', {
        leadJson: JSON.stringify(this.lead)
      }, function (data, status, request) {
        console.log('sendLead done', data);
        this.postResults = data;
        this.ajaxRequest = false;
      });
    },
    setCallback: function(callback) {
      this.googleMapCallback = callback;
      if (!navigator.geolocation) return;
      var self = this;
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        self.googleMap.setCenter(pos);
        var geocoder = new google.maps.Geocoder;
        geocoder.geocode({'location': pos}, function(results, status) {
          for (var index in results) {
            if (parseInt(index) == 0) continue;
            var result = results[index];
            if (typeof result['formatted_address'] != 'undefined') {
              self.geoSet(result['formatted_address'], pos);
              break;
            }
          }
        });
      }, function(message) {
        console.log('error on geo position', message);
      });
    }
  }
});

window.addEventListener('popstate', () => {
  app.currentRoute = window.location.pathname;
  var params = window.location.pathname.substr(1).split('/');
  var vue_form = app.$children[0].get_vue_form();
  if (params[0] == 'location' && typeof params[1] != 'undefined') {
    vue_form.step = params[1];
    vue_form.updateProgress();
  } else if ((params.length == 1) && (params[0] == "")) {
    vue_form.step = 'location';
    vue_form.updateProgress();
  }
});
