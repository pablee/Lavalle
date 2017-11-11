function login()
{
    var url = 'https://www.mercadolibre.com/jms/mla/lgz/msl/login?platform_id=mp&go=https://www.mercadopago.com/mla/accountSummary';
    var myWindow = window.open(url, "MsgWindow", "width=500,height=600");
}


function carrito()
{
    var url = 'https://www.mercadopago.com/mla/account/movements';
    var myWindow = window.open(url, "MsgWindow", "width=500,height=600");
}


function verMediosPago()
{
    var url = 'https://www.mercadopago.com.ar/promociones';
    var myWindow = window.open(url, "MsgWindow", "width=500,height=600");
}


function campoModificado(id)
{
    document.getElementById(id+"-modificado").value=1;
}


function geocodeAddress(geocoder, resultsMap) {
    var address = document.getElementById('address').value;
    geocoder.geocode({'address': address}, function(results, status) {
        if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location
            });
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}


function initMap()
{
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: {lat: -34.397, lng: 150.644}
    });
    var geocoder = new google.maps.Geocoder();

    document.getElementById('submit').addEventListener('click', function () {
        geocodeAddress(geocoder, map);
    });


    /*
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 12
    });
    var infoWindow = new google.maps.InfoWindow({map: map});

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Localidad encontrada');
            map.setCenter(pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
    */
    //Mendoza   {lat: -32.8839071, lng: -69.879828};
    var centrar = {lat: -32.8839071, lng: -69.879828};
    var lavalle = {lat: -32.8885155, lng: -68.8383156};
    var las_heras = {lat: -32.885, lng: -68.845};
    var mendocinas = {lat: -32.8847666, lng: -68.8441965};
    var san_martin_360 = {lat: -32.9203932, lng: -68.8495405};
    //Maipu
    var mitre = {lat: -32.9241499, lng: -68.8433248};
    //Guaymallen
    var adolfo_calle = {lat: -32.9000336, lng: -68.8296385};
    var adolfo_calle_post_venta = {lat: -32.9000351, lng: -68.8300564};
    var adolfo_calle_entrega = {lat: -32.8998605, lng: -68.8302212};
    //San Juan
    var rawson_431 = {lat: -31.5387835, lng: -68.5147208};
    var rawson_311 = {lat: -31.5373817, lng: -68.5172181};
    var villa_krause = {lat: -31.5842476, lng: -68.5387582};
    //San Luis
    var san_luis = {lat: -33.3065322, lng: -66.3357458};
    //San Martin (Mendoza)
    var san_martin = {lat: -33.0821705, lng: -68.4744797};
    //San Rafael
    var san_rafael = {lat: -34.614842, lng: -68.3343528};
    //Tunuyan
    var san_martin_1230 = {lat: -33.5788665, lng: -69.0185986};


    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: centrar
    });

    var lavalle = new google.maps.Marker({
        position: lavalle,
        map: map,
        title: 'Lavalle 162'
    });
    var las_heras = new google.maps.Marker({
        position: las_heras,
        map: map,
        title: 'Av. Las Heras 403'
    });
    var mendocinas = new google.maps.Marker({
        position: mendocinas,
        map: map,
        title: 'P. Mendocinas 1574'
    });
    var san_martin_360 = new google.maps.Marker({
        position: san_martin_360,
        map: map,
        title: 'San Mart�n 360'
    });
    var mitre = new google.maps.Marker({
        position: mitre,
        map: map,
        title: 'Mitre 105'
    });
    var adolfo_calle = new google.maps.Marker({
        position: adolfo_calle,
        map: map,
        title: 'Adolfo Calle 795, Dorrego'
    });
    var adolfo_calle_post_venta = new google.maps.Marker({
        position: adolfo_calle_post_venta,
        map: map,
        title: 'Adolfo Calle 727, Dorrego'
    });
    var adolfo_calle_entrega = new google.maps.Marker({
        position: adolfo_calle_entrega,
        map: map,
        title: 'Adolfo Calle 718, Dorrego'
    });
    var rawson_431 = new google.maps.Marker({
        position: rawson_431,
        map: map,
        title: 'Rawson 431'
    });
    var rawson_311 = new google.maps.Marker({
        position: rawson_311,
        map: map,
        title: 'Rawson 311'
    });
    var villa_krause = new google.maps.Marker({
        position: villa_krause,
        map: map,
        title: 'Boulevard Sarmiento y San Roque - Villa Krause'
    });
    var san_luis = new google.maps.Marker({
        position: san_luis,
        map: map,
        title: '9 de Julio 801'
    });
    var san_martin = new google.maps.Marker({
        position: san_martin,
        map: map,
        title: '9 de Julio 95'
    });
    var san_rafael = new google.maps.Marker({
        position: san_rafael,
        map: map,
        title: 'Cmte Salas 50'
    });
    var san_martin_1230 = new google.maps.Marker({
        position: san_martin_1230,
        map: map,
        title: 'San Mart�n 1230'
    });

}
/*
function handleLocationError(browserHasGeolocation, infoWindow, pos)
{
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
}

*/