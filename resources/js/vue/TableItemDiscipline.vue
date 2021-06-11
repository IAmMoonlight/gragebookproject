<template>
    <div>
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

            <div class="btn_add_item" 
                    @click="addTableItemRow('lecture')"
                    >Добавить лекцию</div>
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

            <div class="btn_add_item"
                    @click="addTableItemRow('lab')"
                    >Добавить лабораторную</div>
        </div>
    </div>
</template>
<script>
import TableItemRow from './components/TableItemRow';
export default({
    name: 'TableItemDiscipline',
    components: {TableItemRow},
    data(){
        return {
            isTutor: true,
            isLectures: true,
            isLabs: false,
            dataLectures: [
                {
                    date: "12.02.2021",
                    hasFile: true
                },{
                    date: "17.02.2021",
                    hasFile: true
                },{
                    date: "22.02.2021",
                    hasFile: false
                }
            ],
            dataLabs: [
                {
                    date: "14.02.2021",
                    hasFile: true
                },{
                    date: "16.02.2021",
                    hasFile: false
                },{
                    date: "23.02.2021",
                    hasFile: false
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
        },
        addTableItemRow(nameTable){
            let newDataItem = {
                date: "00.00.0000",
                hasFile: false
            };
            if(nameTable === 'lecture'){
                this.dataLectures.push(newDataItem);
            }else if(nameTable === 'lab'){
                this.dataLabs.push(newDataItem);
            }
        }
    }
})
</script>
