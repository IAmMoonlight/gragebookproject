<template>
  <div class="upload_file_wrapper" id="changeName">
    <div class="btn_close_upload modal__close" @click="closeModal()">
      <img :src="closeImage" alt="btn_close_upload">
    </div>
    <div class="upload_file_title">Прикрепление данных</div>
    <form @submit.prevent="sendForm()" method="POST" class="upload_file_form">

      <div class="form_block">
        <select class="form_block__select" name="group" @change="updateGroup($event)" :value="parseInt(localForm.group)">
          <option value="0">Не выбрано</option>
          <template v-for="group in listGroups">
            <option :value="group.id" :selected="group.id == localForm.group">{{ group.title }}</option>
          </template>
        </select>
        <span class="form_block__select--focus">Группа</span>
      </div>

      <div class="form_block">
        <select class="form_block__select" name="discipline" v-model="localForm.discipline">
          <option value="0">Не выбрано</option>
          <template v-for="discipline in listDisciplines">
            <option :value="discipline.id">{{ discipline.title }}</option>
          </template>
        </select>
        <span class="form_block__select--focus">Дисциплина</span>
      </div>

      <div class="form_block">
        <select class="form_block__select" name="form_control" id="form_control" v-model="localForm.formControl">
          <option value="1">Зачет</option>
          <option value="2">Диф. зачет</option>
          <option value="3">Экзамен</option>
        </select>
        <span class="form_block__select--focus">Форма контроля</span>
      </div>

      <div class="checkbox_wrapper">
        <input type="checkbox" class="checkbox_input" id="coursework" v-model="localForm.courseWork">
        <label for="coursework" class="checkbox_label">
          Курсовая работа
        </label>
      </div>
      <attestation-list :attestations="localForm.attestations"
                        @updateAttestations="attestationsUpdate($event)"/>

      <div class="btn_submit_wrapper">
        <input type="submit" :class="{'btn_submit': true, 'btn_submit_active': canSubmit}" value="Сохранить" :disabled="!canSubmit">
      </div>
    </form>
  </div>
</template>

<script>
import AttestationList from "./components/AttestationList";
export default {
  name: "ModalTeacherDiscipline",
  components: {AttestationList},
  props: {
    form: {
      type: Object
    }
  },
  data(){
    return {
      localForm: [],
      closeImage: '',
      routeListGroups: document.querySelector('meta[name=get-list-groups]').getAttribute('content'),
      routeListDisciplines: document.querySelector('meta[name=get-list-disciplines]').getAttribute('content'),
      listGroups: [],
      listDisciplines: []
    }
  },
  methods: {
    sendForm(){
      this.$emit('sendDataForm', this.localForm);
      this.localForm = [];
    },
    closeModal(){
      this.$emit('closeModal');
      this.localForm = [];
    },
    updateGroup($event){
      this.localForm.group = $event.target.value;
      for(let group of this.listGroups){
        if(group['id'] == this.localForm.group){
          this.localForm.groupName = group['title'];
        }
      }
    },
    getListGroups(){
      axios.get(this.routeListGroups)
          .then(res => {
            this.listGroups = res.data;
          })
          .catch(err => {
            console.dir(err);
          });
    },
    getListDisciplines(){
      axios.get(this.routeListDisciplines)
          .then(res => {
            this.listDisciplines = res.data;
          })
          .catch(err => {
            console.dir(err);
          });
    },
    attestationsUpdate($event){
      this.localForm.attestations = $event;
    }
  },
  computed: {
    canSubmit(){
      return this.localForm.attestations !== undefined &&
              this.localForm.attestations.length > 0 &&
              this.localForm.discipline !== 0 &&
              this.localForm.formControl !== 0 &&
              this.localForm.group !== 0 &&
              this.localForm.groupName !== '';
    }
  },
  mounted() {
    this.getListGroups();
    this.getListDisciplines();
    this.localForm = this.form;
    this.closeImage = document.querySelector('meta[name=image-close]').getAttribute('content')
  }
}
</script>

<style scoped>

</style>