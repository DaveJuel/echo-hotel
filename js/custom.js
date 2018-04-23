// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. 
var placeSearch, autocomplete;
var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
};

function initAutocomplete() {
    // Create the autocomplete object, restricting the search to geographical
    // location types.
    autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    //autocomplete.addListener('place_changed', fillInAddress);
}

function geolocate() {   
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}

/**
 * Counting the total price to be charged. 
 */
function updatePrice(obj){
var currentPrice=parseFloat(document.getElementById("total-price-holder").value);
var selectedService=obj.id;
var identifier=selectedService.split("-");
var unitPriceHolder="service-price-"+identifier[1];
var previousPriceHolder="previous-service-price-"+identifier[1];
var unitPrice=document.getElementById(unitPriceHolder).value;
var quantity=obj.value;
var servicePrice=unitPrice*quantity;
var previousPrice=parseFloat(document.getElementById(previousPriceHolder).value);
var totalPrice=currentPrice+servicePrice-previousPrice;
document.getElementById(previousPriceHolder).value=servicePrice;
document.getElementById("total-price-holder").value=totalPrice;
document.getElementById("total-price").innerHTML=totalPrice;
}
