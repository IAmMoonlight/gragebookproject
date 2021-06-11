import Vue from 'vue';
import TableItemDiscipline from "./vue/TableItemDiscipline";
import TableItemProgress from "./vue/TableItemProgress";

import ListDisciplines from "./vue/admin/disciplines/ListDisciplines";
import ListGroupStudents from "./vue/admin/groupStudents/ListGroupStudents";
import ListStudents from "./vue/admin/students/ListStudents";
import CreateStudent from "./vue/admin/students/CreateStudent";
import EditStudent from "./vue/admin/students/EditStudent";
import PersonalData from "./vue/personalData/PersonalData";

import ModalChangeName from "./vue/modals/ModalChangeName";
import ModalChangeMail from "./vue/modals/ModalChangeMail";
import ModalChangePassword from "./vue/modals/ModalChangePassword";

import ListTeachers from "./vue/admin/teachers/ListTeachers";
import CreateTeacher from "./vue/admin/teachers/CreateTeacher";
import EditTeacher from "./vue/admin/teachers/EditTeacher";

require('./bootstrap');
require("./others/swiper");
require("./others/auth_menu");
require('./others/forms/checkFields');
require('./others/modalsManipulate');
require('./others/submenu');


if(document.querySelector('#TableItemDiscipline')){
    new Vue(TableItemDiscipline).$mount('#TableItemDiscipline');
}
if(document.querySelector('#TableItemProgress')){
    new Vue(TableItemProgress).$mount('#TableItemProgress');
}
/* disciplines */
if(document.querySelector('#show_list_disciplines_admin')){
    new Vue(ListDisciplines).$mount('#show_list_disciplines_admin');
}
/* groups */
if(document.querySelector('#show_list_group_students_admin')){
    new Vue(ListGroupStudents).$mount('#show_list_group_students_admin');
}
/* students */
if(document.querySelector('#show_list_students_admin')){
    new Vue(ListStudents).$mount('#show_list_students_admin');
}
if(document.querySelector('#create_student_page')){
    new Vue(CreateStudent).$mount('#create_student_page');
}
if(document.querySelector('#edit_student_page')){
    new Vue(EditStudent).$mount('#edit_student_page');
}
/* teachers */
if(document.querySelector('#show_list_teachers_admin')){
    new Vue(ListTeachers).$mount('#show_list_teachers_admin');
}
if(document.querySelector('#create_teachers_page')){
    new Vue(CreateTeacher).$mount('#create_teachers_page');
}
if(document.querySelector('#edit_teachers_page')){
    new Vue(EditTeacher).$mount('#edit_teachers_page');
}

/* personal data */
if(document.querySelector('#user_personal_data')){
    new Vue(PersonalData).$mount('#user_personal_data');
}

/* modals */
if(document.querySelector('#modal_change_name')){
    new Vue(ModalChangeName).$mount('#modal_change_name');
}
if(document.querySelector('#modal_change_email')){
    new Vue(ModalChangeMail).$mount('#modal_change_email');
}
if(document.querySelector('#modal_change_password')){
    new Vue(ModalChangePassword).$mount('#modal_change_password');
}