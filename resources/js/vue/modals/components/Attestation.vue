<template>
  <div>
    <div class="admin_attestation">
      <div class="admin_attestation__text">
        Аттестация {{ index + 1 }}
      </div>
      <div class="admin_attestation__delete" @click="remove()">
        Удалить
      </div>
    </div>

    <div class="admin_attestation_dates">
      <div class="form_block admin_attestation_date">
        <input type="date" class="form_block__input" :value="localAttestation.begin" @change="updateField($event, 'begin')">
        <span class="form_block__select--focus">Начало аттестации</span>
      </div>
      <div class="form_block admin_attestation_date">
        <input type="date" class="form_block__input" :value="localAttestation.end" @change="updateField($event, 'end')">
        <span class="form_block__select--focus">Конец аттестации</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    attestation: {
      type: Object
    },
    index: {
      type: Number
    }
  },
  name: "Attestation",
  data(){
    return {
      localAttestation: {
        begin: '',
        end: ''
      }
    }
  },
  methods: {
    updateField($event, fieldName){
      let value = $event.target.value;
      if(this.checkField(value)){
        switch (fieldName){
          case 'begin':
            this.localAttestation.begin = value;
            break;
          case 'end':
            this.localAttestation.end = value;
        }
      }
    },
    remove(){
      this.$emit('removeAttestation');
    },
    sendData(){
      this.$emit('updateData', {
          'begin': this.local_begin,
          'end': this.local_end
      });
    },
    checkField(value){
      return value.length > 0;
    }
  },
  watch: {
    local_begin(){
      this.sendData();
    },
    local_end(){
      this.sendData();
    },
    attestation(){
      this.localAttestation = this.attestation === undefined ? {begin: '', end: ''} : this.attestation;
    }
  },
  mounted() {
    this.localAttestation = this.attestation === undefined ? {begin: '', end: ''} : this.attestation;
  }
}
</script>

<style scoped>

</style>