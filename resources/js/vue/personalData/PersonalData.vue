<template>
  <div class="content_auth">
    <div class="content_auth_title">Личный кабинет</div>
    <div class="acc_table_wrapper">
      <div class="acc_table_row">
        <div class="acc_table_row__title">Профиль</div>
        <div class="acc_table_row__data">{{ userData.name }}</div>
        <div class="acc_table_row__edit_btn">
          <div class="acc_edit_btn_link" data-open-modal="#changeName">Редактировать</div>
        </div>
      </div>
      <div class="acc_table_row">
        <div class="acc_table_row__title">Почта</div>
        <div class="acc_table_row__data">{{ userData.email }}</div>
        <div class="acc_table_row__edit_btn">
          <div class="acc_edit_btn_link" data-open-modal="#changeEmail">Редактировать</div>
        </div>
      </div>
      <div class="acc_table_row">
        <div class="acc_table_row__title">Пароль</div>
        <div class="acc_table_row__data">* * * * * * *</div>
        <div class="acc_table_row__edit_btn">
          <div class="acc_edit_btn_link" data-open-modal="#changePassword">Редактировать</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PersonalData",
  data(){
    return {
      userData: {}
    }
  },
  created() {
    this.userData = window.userData;
  }
}
</script>

<style scoped>

</style>