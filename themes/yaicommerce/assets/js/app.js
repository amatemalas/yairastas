window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
require('bootstrap');

import '@fortawesome/fontawesome-free/js/all.js';
// import 'aos/dist/aos.js';

require('./modules/navbar');
require('./modules/slider');

import Aos from 'aos';

$(document).ready(function () {
    Aos.init({
        duration: 700,
    });
});
