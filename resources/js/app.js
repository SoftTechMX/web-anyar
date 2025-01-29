// Axios
// =================================================================================== //
//                             _    __  _____ ___  ____                                //  
//                            / \   \ \/ /_ _/ _ \/ ___|                               //
//                           / _ \   \  / | | | | \___ \                               //
//                          / ___ \  /  \ | | |_| |___) |                              //
//                         /_/   \_\/_/\_\___\___/|____/                               //
//                        https://axios-http.com/docs/intro                            //
//                               npm install axios                                     //
// =================================================================================== //
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

var axios_config = {
    headers: { 'Content-Type': 'multipart/form-data' }
};

// AOs
// =================================================================================== //
//                                  _    ___                                           //
//                                 / \  / _ \ ___                                      //
//                                / _ \| | | / __|                                     //
//                               / ___ \ |_| \__ \                                     //
//                              /_/   \_\___/|___/                                     //
//                                                                                     //
//                       https://github.com/michalsnik/aos                             //
//                          npm install --save aos@next                                //
// =================================================================================== //
import Aos from 'aos';
import 'aos/dist/aos.css';

// Inicializamos todos los componentes del DOM con una duracion de 1 segundo y con  la //
// animacion de ease-in                                                                //

window.addEventListener('DOMContentLoaded', () => {
    Aos.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
});

window.Aos = Aos;
window.AOS = Aos;

// ApexCharts
// =================================================================================== //
//                  _                     ____ _                _                      //
//                 / \   _ __   _____  __/ ___| |__   __ _ _ __| |_ ___                //
//                / _ \ | '_ \ / _ \ \/ / |   | '_ \ / _` | '__| __/ __|               //
//               / ___ \| |_) |  __/>  <| |___| | | | (_| | |  | |_\__ \               //
//              /_/   \_\ .__/ \___/_/\_\\____|_| |_|\__,_|_|   \__|___/               //
//                      |_|                                                            //
//                            https://apexcharts.com/                                  //
//                        npm install --save apexcharts                                //
// =================================================================================== //
import ApexCharts from 'apexcharts';
window.ApexCharts = ApexCharts;


// Bootstrap
// =================================================================================== //
//                   ____              _       _                                       //
//                  | __ )  ___   ___ | |_ ___| |_ _ __ __ _ _ __                      //
//                  |  _ \ / _ \ / _ \| __/ __| __| '__/ _` | '_ \                     //
//                  | |_) | (_) | (_) | |_\__ \ |_| | | (_| | |_) |                    //
//                  |____/ \___/ \___/ \__|___/\__|_|  \__,_| .__/                     //
//                                                          |_|                        //
//                          https://getbootstrap.com                                   //
//                           npm i bootstrap --save                                    //
// =================================================================================== //
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

document.addEventListener('DOMContentLoaded', function () {

    // Encuentra todos los elementos con el atributo 'data-bs-toggle="tooltip"' y actívalos
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

});


// GLightbox
// =================================================================================== //
//                    ____ _     _       _     _   _                                   //
//                   / ___| |   (_) __ _| |__ | |_| |__   _____  __                    //
//                  | |  _| |   | |/ _` | '_ \| __| '_ \ / _ \ \/ /                    //
//                  | |_| | |___| | (_| | | | | |_| |_) | (_) >  <                     //
//                   \____|_____|_|\__, |_| |_|\__|_.__/ \___/_/\_\                    //
//                                 |___/                                               //
//                                                                                     //
//                      https://www.npmjs.com/package/glightbox                        //
//                           npm install glightbox --save                              //
// =================================================================================== //
import GLightbox from 'glightbox';
window.GLightbox = GLightbox;

window.addEventListener('DOMContentLoaded', () => {
    new GLightbox({
        selector: '.glightbox'
    });
});


// Toastr
// =================================================================================== //
//                            _____               _                                    //
//                           |_   _|__   __ _ ___| |_ _ __                             //
//                             | |/ _ \ / _` / __| __| '__|                            //
//                             | | (_) | (_| \__ \ |_| |                               //
//                             |_|\___/ \__,_|___/\__|_|                               //
//                                                                                     //
//                      https://www.npmjs.com/package/toastr                           //
//                           npm install --save toastr                                 //
// =================================================================================== //
import toastr from 'toastr';
window.toastr = toastr;


// Isotope JS
// =================================================================================== //
//                   ___           _                         _ ____                    //
//                  |_ _|___  ___ | |_ ___  _ __   ___      | / ___|                   //
//                   | |/ __|/ _ \| __/ _ \| '_ \ / _ \  _  | \___ \                   //
//                   | |\__ \ (_) | || (_) | |_) |  __/ | |_| |___) |                  //
//                  |___|___/\___/ \__\___/| .__/ \___|  \___/|____/                   //
//                                         |_|                                         //
//										                                               //
//                         https://isotope.metafizzy.co/                               //
//                       npm install isotope-layout --save                             //
// =================================================================================== //
import Isotope from 'isotope-layout';
window.Isotope = Isotope;


// SweetAlert2
// =================================================================================== //
//               ____                   _      _    _           _                      //
//              / ___|_      _____  ___| |_   / \  | | ___ _ __| |_                    //
//              \___ \ \ /\ / / _ \/ _ \ __| / _ \ | |/ _ \ '__| __|                   //
//               ___) \ V  V /  __/  __/ |_ / ___ \| |  __/ |  | |_                    //
//              |____/ \_/\_/ \___|\___|\__/_/   \_\_|\___|_|   \__|                   //
//                                                                                     //
//                                                                                     //
//                         npm install --save sweetalert2                              //
// =================================================================================== //
import Swal from 'sweetalert2';
window.Swal = Swal;


/**
 * @see: https://talltips.novate.co.uk/livewire/sweetalert2-with-livewire
 */
window.addEventListener('swal', function (e) {
    Swal.fire(e.detail);
});

// PureCounter
// =================================================================================== //
//                ____                  ____                  _                        //
//               |  _ \ _   _ _ __ ___ / ___|___  _   _ _ __ | |_ ___ _ __             //
//               | |_) | | | | '__/ _ \ |   / _ \| | | | '_ \| __/ _ \ '__|            //
//               |  __/| |_| | | |  __/ |__| (_) | |_| | | | | ||  __/ |               //
//               |_|    \__,_|_|  \___|\____\___/ \__,_|_| |_|\__\___|_|               //
//                                                                                     //
//                 https://www.npmjs.com/package/@srexi/purecounterjs                  //
//                                                                                     //
// =================================================================================== //
import PureCounter from "@srexi/purecounterjs";
window.PureCounter = PureCounter;

document.addEventListener('DOMContentLoaded', () => {
    new PureCounter();
});

// VanillaTilt
// =================================================================================== //
//                   __     __          _ _ _      _____ _ _ _                         //
//                   \ \   / /_ _ _ __ (_) | | __ |_   _(_) | |_                       //
//                    \ \ / / _` | '_ \| | | |/ _` || | | | | __|                      //
//                     \ V / (_| | | | | | | | (_| || | | | | |_                       //
//                      \_/ \__,_|_| |_|_|_|_|\__,_||_| |_|_|\__|                      //
//                                                                                     //
//                              npm i vanilla-tilt                                     //
//                                                                                     //
// =================================================================================== //
import VanillaTilt from 'vanilla-tilt';
window.VanillaTilt = VanillaTilt;


// Swiper JS
// =================================================================================== //
//                   ____          _                    _ ____                         //
//                  / ___|_      _(_)_ __   ___ _ __   | / ___|                        //
//                  \___ \ \ /\ / / | '_ \ / _ \ '__|  | \___ \                        //
//                   ___) \ V  V /| | |_) |  __/ | | |_| |___) |                       //
//                  |____/ \_/\_/ |_| .__/ \___|_|  \___/|____/                        //
//                                |_|                                                  //
//                                                                                     //
//                       https://swiperjs.com/get-started                              //
//                          npm install swiper --save                                  //
// =================================================================================== //
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination],
    loop: true,
    speed: 600,
    autoplay: {
        delay: 5000
    },
    slidesPerView: "auto",
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next', // Selector para el botón "siguiente"
        prevEl: '.swiper-button-prev'  // Selector para el botón "anterior"
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 40
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 10
        }
    }
});

window.swiper = swiper;
window.Swiper = Swiper;


// VenoBox
// =================================================================================== //
//                       __     __               ____                                  //
//                       \ \   / /__ _ __   ___ | __ )  _____  __                      //
//                        \ \ / / _ \ '_ \ / _ \|  _ \ / _ \ \/ /                      //
//                         \ V /  __/ | | | (_) | |_) | (_) >  <                       //
//                          \_/ \___|_| |_|\___/|____/ \___/_/\_\                      //
//                                                                                     //
//                                   npm i venobox                                     //
//                        https://www.npmjs.com/package/venobox                        //
// =================================================================================== //
import 'venobox/dist/venobox.css';
import VenoBox from 'venobox';

window.VenoBox = VenoBox;


// FullCalendar
// =================================================================================== //
//                                                                                     //
//                 _____      _ _  ____      _                _                        //
//                |  ___|   _| | |/ ___|__ _| | ___ _ __   __| | __ _ _ __             //
//                | |_ | | | | | | |   / _` | |/ _ \ '_ \ / _` |/ _` | '__|            //
//                |  _|| |_| | | | |__| (_| | |  __/ | | | (_| | (_| | |               // 
//                |_|   \__,_|_|_|\____\__,_|_|\___|_| |_|\__,_|\__,_|_|               //
//                                                                                     //
//                  https://fullcalendar.io/docs/initialize-browser-esm                //
// npm install @fullcalendar/core @fullcalendar/daygrid @fullcalendar/timegrid @fullcalendar/list @fullcalendar/interaction
// =================================================================================== //
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import dayGridMonth from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import esLocale from '@fullcalendar/core/locales/es';
import interactionPlugin from '@fullcalendar/interaction';

window.Calendar          = Calendar;
window.dayGridPlugin     = dayGridPlugin;
window.dayGridMonth      = dayGridMonth;
window.timeGridPlugin    = timeGridPlugin;
window.listPlugin        = listPlugin;
window.esLocale          = esLocale;
window.interactionPlugin = interactionPlugin;

// Livewire
// =================================================================================== //
//                       _     _                    _                                  //
//                      | |   (_)_   _______      _(_)_ __ ___                         //
//                      | |   | \ \ / / _ \ \ /\ / / | '__/ _ \                        //
//                      | |___| |\ V /  __/\ V  V /| | | |  __/                        //
//                      |_____|_| \_/ \___| \_/\_/ |_|_|  \___|                        //
//                                                                                     //
// =================================================================================== //

/**
 * Cierra Todos los Modales de Bootstrap que estan abiertos, Normalmente el backend emite
 * este evento cuando almacena los  datos de manera correcta en las vistas que usan algun 
 * formulario incrustado en un modal.
 */
window.addEventListener('close-modal', function () {
    let modales = document.querySelectorAll('.modal');

    modales.forEach(element => {
        let modal = bootstrap.Modal.getInstance(element);
        if (modal)
            modal.hide();
    });
});

/**
 * Estos listener son para cuando el backend emite alertas, cuando detectan la alerta se
 * muestran mediante toastr
 */
window.addEventListener('alert-warning', event => {
    toastr.warning(event.detail, 'Warning!');
});

window.addEventListener('alert-error', event => {
    toastr.error(event.detail, 'Error!');
});

window.addEventListener('alert-danger', event => {
    toastr.error(event.detail, 'Caution!');
});

window.addEventListener('alert-success', event => {
    toastr.success(event.detail, 'Correct!');
});