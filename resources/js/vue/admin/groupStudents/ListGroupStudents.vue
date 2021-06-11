<template>
  <div>
    <form @submit.prevent method="POST" class="form_search_item">
      <div class="form_block search_form_block">
        <input type="input" class="form_block__input" name="search" v-model="search_val" required autocomplete="search_item">
        <span class="form_block__input--focus" data-placeholder="Поиск"></span>
      </div>
      <div class="btn_search" @click="search()">
        <img :src="imageSearch" alt="search">
      </div>
    </form>


    <div class="table_items_wrapper">
      <template v-if="list.length > 0 && meta !== null">
        <div class="table_items_row" v-for="(item, index) in list" :key="index">
          <a :href="item.link" class="table_item_link">{{ item.title }}</a>
        </div>
      </template>
      <template v-else>
        <div class="noData_text">Нет данных</div>
      </template>

      <infinite-loading
          class="bottom"
          @infinite="infinite"
          :identifier="infinityId"
      >
        <span slot="no-more"></span>
        <div slot="no-results"></div>
      </infinite-loading>
    </div>
  </div>
</template>

<script>
import InfiniteLoading from 'vue-infinite-loading';
import InfinityForMultyMixin from "../../mixins/InfinityForMultyMixin";
export default {
  name: "ListGroupStudents",
  mixins: [InfinityForMultyMixin],
  components: {
    InfiniteLoading
  },
  data(){
    return {
      urlList: document.querySelector('meta[name=get-groups]').getAttribute('content'),
      imageSearch: document.querySelector('meta[name=image-search]').getAttribute('content'),
      urlSearch: document.querySelector('meta[name=search]').getAttribute('content'),
      search_val: '',
      url: ''
    }
  },
  methods: {
    updateNotesList() {
      this.getDataFromServer();
    },
    search(){
      this.url = this.urlSearch;
      this.getDataFromServer(null, {'search': this.search_val});
    }
  },
  mounted() {
    this.url = this.urlList;
    this.updateNotesList();
  }
}
</script>

<style scoped>

</style>