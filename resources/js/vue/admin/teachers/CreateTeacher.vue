<template>
  <div>
  <form @submit.prevent="submitForm()" method="POST" class="form_admin_create_item">
    <div class="form_block form_admin_create_block">
      <input type="input" class="form_block__input" name="name" v-model="form.name" required autocomplete="name" autofocus>
      <span class="form_block__input--focus" data-placeholder="ФИО"></span>
    </div>
    <template v-if="errors.name">
      <div class="form_error_text" v-for="(message, index) in errors.name" :key="index"> {{ message }} </div>
    </template>

    <div class="form_block form_admin_create_block">
      <input type="email" class="form_block__input" name="email" v-model="form.email" required autocomplete="email">
      <span class="form_block__input--focus" data-placeholder="Почта"></span>
    </div>
    <template v-if="errors.email">
      <div class="form_error_text" v-for="(message, index) in errors.email" :key="index"> {{ message }} </div>
    </template>

    <div class="form_block form_admin_create_block">
      <input type="password" class="form_block__input" name="password" v-model="form.password" required autocomplete="password">
      <span class="form_block__input--focus" data-placeholder="Пароль"></span>
    </div>
    <template v-if="errors.password">
      <div class="form_error_text" v-for="(message, index) in errors.password" :key="index"> {{ message }} </div>
    </template>

    <div class="table_item_wrapper admin_table_wrapper">
      <div class="table_item_header">
        <div class="table_item_header__title">Группа</div>
        <div class="btn_create_item" @click="addGroupToTable()">Добавить</div>
      </div>
      <div class="table_item_row">
        <div class="table_item_title admin_table_2col__name">Группа</div>
        <div class="table_item_title admin_table_2col__delete">Действие</div>
      </div>
      <template v-if="form.groups.length > 0">
        <div class="table_item_row" v-for="(group, index) in form.groups" :key="index">
          <div class="admin_table_2col__name">
            <div class="form_block select_block_group">
              <div @click="changingGroup = index">{{ form.groups[index]['groupName'] }}</div>
              <span class="form_block__select--focus"></span>
            </div>
          </div>
          <div class="admin_table_2col__delete table_item_del" @click="removeGroup(index)">Удалить</div>
        </div>
      </template>
    </div>
    <div class="btn_submit_wrapper">
      <input type="submit" class="btn_submit form_admin__submit btn_submit_active" value="Сохранить">
    </div>
  </form>
  <template v-if="changingGroup !== -1">
    <modal-teacher-discipline :form="form.groups[changingGroup]"
                              @sendDataForm="updateDataGroup($event, changingGroup)"
                              @closeModal="modalClose()"/>
  </template>
  </div>
</template>

<script>
import TeacherMixin from "../../mixins/TeacherMixin";
import ModalTeacherDiscipline from "../../modals/ModalTeacherDiscipline";
export default {
  name: "CreateTeacher",
  components: {ModalTeacherDiscipline},
  mixins: [TeacherMixin],
  data(){
    return {
      routeSave: document.querySelector('meta[name=route-store]').getAttribute('content'),
    }
  }
}
</script>

<style scoped>

</style>