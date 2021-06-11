<template>
  <div>
    <div class="upload_file_title">Смена персональных данных</div>
    <form @submit.prevent="sendForm()" method="POST" class="upload_file_form">
      <div class="form_block">
        <input type="password" class="form_block__input" name="password" v-model="updateData.password" required>
        <span class="form_block__select--focus">Пароль</span>
      </div>
      <template v-if="errors.password">
        <div class="form_error_text" v-for="(message, index) in errors.password" :key="index"> {{ message }} </div>
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
  name: "ModalChangePassword",
  mixins: [ModalsPersonalDataMixin],
  data(){
    return {
      updateData: {
        password: ''
      }
    }
  },
  mounted() {
    this.url = document.querySelector('meta[name=route-change-password]').getAttribute('content');
  }
}
</script>

<style scoped>

</style>