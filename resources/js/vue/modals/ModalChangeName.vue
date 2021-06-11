<template>
  <div>
      <div class="upload_file_title">Смена персональных данных</div>
      <form @submit.prevent="sendForm()" method="POST" class="upload_file_form">
        <div class="form_block">
          <input type="text" class="form_block__input" name="name" v-model="updateData.name" required>
          <span class="form_block__select--focus">ФИО</span>
        </div>
        <template v-if="errors.name">
          <div class="form_error_text" v-for="(message, index) in errors.name" :key="index"> {{ message }} </div>
        </template>
        <div class="btn_submit_wrapper">
          <input type="submit" :class="{'btn_submit': true, 'btn_submit_active': canSubmit}" value="Сохранить" :disabled="!canSubmit">
        </div>
      </form>
  </div>
</template>

<script>
import ModalsPersonalDataMixin from "../mixins/ModalsPersonalDataMixin";

export default {
  name: "ModalChangeName",
  mixins: [ModalsPersonalDataMixin],
  data(){
    return {
      updateData: {
        name: ''
      }
    }
  },
  mounted() {
    this.updateData.name = window.userData.name;
    this.url = document.querySelector('meta[name=route-change-name]').getAttribute('content');
  }
}
</script>

<style scoped>

</style>