/**
 * Created by igora on 30/09/2016.
 */
var initMap  = function() {

        // Verifica se o browser do usuario tem suporte a Geolocation
        if ( navigator.geolocation ) {
            navigator.geolocation.getCurrentPosition(function (posicao) {

                map = new google.maps.Map(document.getElementById('map-dash'), {
                    center: {lat: posicao.coords.latitude, lng: posicao.coords.longitude},
                    zoom: 12
                });

            });
        }
};
