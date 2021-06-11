<template>
    <div>
        <div class="content_auth_tutor" v-if="isLectures">
            Преподаватель: <span class="name_tutor">Иванов Иван Ивановна</span>
        </div>
        <div class="content_auth_tutor" v-if="isLabs">
            Преподаватель: <span class="name_tutor">Иванов Иван Ивановна</span>
        </div>


        <div class="content_auth_attendance" v-if="isLectures">
            <div>Всего лекций: <span id="attendance_all">16</span></div>
            <div>Посещений: <span id="attendance_visit">9</span></div>
            <div>Пропусков: <span id="attendance_skip">5</span></div>
        </div>
        <div class="content_auth_attendance" v-if="isLabs">
            <div>Всего лабораторных: <span id="attendance_all">8</span></div>
            <div>Посещений: <span id="attendance_visit">5</span></div>
            <div>Пропусков: <span id="attendance_skip">3</span></div>
        </div>
        

        <div class="table_item_tabs">
            <div class="table_item_tab" 
                    @click="changeTab('lectures')"
                    v-bind:class="{ table_item_tab_active: isLectures }"
                    >Лекции</div>
            <div class="table_item_tab"
                    @click="changeTab('labs')"
                    v-bind:class="{ table_item_tab_active: isLabs }"
                    >Лабораторные работы</div>
        </div>
        
        <div class="table_item_wrapper" v-if="isLectures">
            <div class="table_item_row">
                <div class="table_item_cell table_item_row_title">Дата лекции</div>
                <div class="table_item_cell table_item_row_title">Статус</div>
            </div>

            <table-item-row v-for="(field, index) in dataLectures"
                            :key="index"
                            :dataItem="field"
                            :isTutor="isTutor">
            </table-item-row>

        </div>

        <div class="table_item_wrapper" v-if="isLabs">
            <div class="table_item_row">
                <div class="table_item_cell table_item_row_title">Дата лабораторной</div>
                <div class="table_item_cell table_item_row_title">Статус</div>
            </div>

            <table-item-row v-for="(field, index) in dataLabs"
                            :key="index"
                            :dataItem="field"
                            :isTutor="isTutor">
            </table-item-row>

        </div>
    </div>
</template>
<script>
import TableItemRow from './components/TableItemRow';
export default({
    name: 'TableItemProgress',
    components: {TableItemRow},
    data(){
        return {
            isTutor: false,
            isLectures: true,
            isLabs: false,
            dataLectures: [
                {
                    date: "12.02.2021",
                    hasFile: 'Присутствовал'
                },{
                    date: "17.02.2021",
                    hasFile: 'Присутствовал'
                },{
                    date: "22.02.2021",
                    hasFile: 'Отсутствовал'
                }
            ],
            dataLabs: [
                {
                    date: "14.02.2021",
                    hasFile: 'Присутствовал'
                },{
                    date: "16.02.2021",
                    hasFile: 'Отсутствовал'
                },{
                    date: "23.02.2021",
                    hasFile: 'Отсутствовал'
                }
            ],

        }
    },
    methods: {
        changeTab(nameTab){
            if(nameTab === 'lectures'){
                this.isLectures = true;
                this.isLabs = false;
            }else if(nameTab === 'labs'){
                this.isLectures = false;
                this.isLabs = true;
            }
        }
    }
})
</script>
