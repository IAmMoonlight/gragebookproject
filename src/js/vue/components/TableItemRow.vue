<template>
    <div class="table_item_row">
        <div class="table_item_cell">{{ dataItem.date }}</div>
        <div class="table_item_cell"
             v-bind:class="{ table_item_file: isTutor }"
             >lesson_test.xlsx</div>
    </div>
</template>

<script>
export default({
    name: 'TableItemRow',
    props: {
            dataItem: {
                type: Object
            },
            isTutor: {
                type: Boolean
            }
        },
    data(){
        return {
            
        }
    },
    methods: {
        
    }
})
</script>
