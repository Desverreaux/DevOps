/** Lodash
 * --------------------------------------------------------------------------
 * A utility library that several other libraries are dependant on
 * --------------------------------------------------------------------------
 */

window._ = require('lodash');

/** Popper
 * --------------------------------------------------------------------------
 * TODO: add description 
 * --------------------------------------------------------------------------
 */

window.Popper = require('popper.js/dist/umd/popper.js').default;

 /** Svg.js
 * --------------------------------------------------------------------------
 * A library used to manipulate and handle svg images and files 
 * --------------------------------------------------------------------------
 */

require('./Libraries/Development/svg.js');

/** jQuery
 * --------------------------------------------------------------------------
 * A utility library that simplifies the interaction with the DOM  
 * --------------------------------------------------------------------------
 */

try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

/** Axios
 * --------------------------------------------------------------------------
 * A library that allows for simiplier ajax calls  
 * --------------------------------------------------------------------------
 */

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/** CSRF
 * --------------------------------------------------------------------------
 * TODO: add description 
 * --------------------------------------------------------------------------
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


//===========================================================================
//TEMPLATE
/** TITLE
 * --------------------------------------------------------------------------
 * DESCRIPTION 
 * --------------------------------------------------------------------------
 */
//===========================================================================

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
