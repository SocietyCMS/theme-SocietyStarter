"use strict"

global.$ = global.jQuery = require('jquery');

import 'bootstrap';

require('fancybox')(global.$);
require('fancybox/dist/css/jquery.fancybox.css');
$('.fancybox').fancybox();