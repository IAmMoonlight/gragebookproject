import Vue from 'vue';

import AttestationProgress from './vue/AttestationProgress';
import TableItemDiscipline from './vue/TableItemDiscipline';
import TableItemProgress from './vue/TableItemProgress';



require("./others/swiper");
require("./others/auth_menu");
require("./others/submenu");
require('./others/forms/checkFields');

if(document.querySelector('#AttestationProgress')){
    new Vue(AttestationProgress).$mount('#AttestationProgress');
}
if(document.querySelector('#TableItemDiscipline')){
    new Vue(TableItemDiscipline).$mount('#TableItemDiscipline');
}
if(document.querySelector('#TableItemProgress')){
    new Vue(TableItemProgress).$mount('#TableItemProgress');
}