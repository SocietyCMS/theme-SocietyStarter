global.$ = global.jQuery = require('jquery');

import 'bootstrap';

import 'luminous-lightbox';
require('luminous-lightbox/dist/luminous-basic.min.css');
$(function() {
    $('a.lightbox').each(function(i, el) {
        new Luminous(el);
    });
});