<template>
  <div>
      <attestation v-for="(attestation, index) in localAttestations" :key="index"
                    :index="index"
                    :attestation="attestation"
                    @updateData="dataUpdate($event, index)"
                    @removeAttestation="attestationRemove(index)"/>
      <div class="admin_attestation_add_btn" @click="addAttestation()">Добавить аттестацию</div>
  </div>
</template>

<script>
import Attestation from "./Attestation";
export default {
  components: {Attestation},
  props: {
    attestations: {
      type: Array,
    }
  },
  name: "AttestationList",
  data(){
    return {
      localAttestations: []
    }
  },
  methods: {
    dataUpdate($event, index){
      this.localAttestations[index] = $event;
      this.$emit('updateAttestations', this.localAttestations);
    },
    attestationRemove(index){
      this.localAttestations.splice(index, 1);
      this.$emit('updateAttestations', this.localAttestations);
    },
    addAttestation(){
      this.localAttestations.push({
        begin: '',
        end: ''
      });
    }
  },
  watch: {
    attestations(){
      this.localAttestations = this.attestations;
    }
  },
  mounted() {
    this.localAttestations = this.attestations === undefined ? [] : this.attestations;
  }
}
</script>

<style scoped>

</style>