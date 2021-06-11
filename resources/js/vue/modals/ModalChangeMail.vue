<template>
  <div>
      <div class="upload_file_title">Смена персональных данных</div>
      <form @submit.prevent="sendForm()" method="POST" class="upload_file_form">
        <div class="form_block">
          <input type="text" class="form_block__input" name="email" v-model="updateData.email" required>
          <span class="form_block__select--focus">Email</span>
        </div>
        <template v-if="errors.email">
          <div class="form_error_text" v-for="(message, index) in errors.email" :key="index"> {{ message }} </div>
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
  name: "ModalChangeMail",
  mixins: [ModalsPersonalDataMixin],
  data(){
    return {
      updateData: {
        email: ''
      }
    }
  },
  mounted() {
    this.updateData.email = window.userData.email;
    this.url = document.querySelector('meta[name=route-change-email]').getAttribute('content');
  }
}
</script>

<style scoped>

</style>