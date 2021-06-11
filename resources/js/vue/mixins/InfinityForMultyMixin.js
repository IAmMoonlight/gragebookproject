export default {
    data() {
        return {
            list: [],
            infinityId: +new Date(),
            meta: null,
            links: {
                first: null,
                last: null,
                next: null,
                prev: null
            },

        };
    },
    methods: {
        inList(item){
            for(let i = 0; i < this.list.length; i++){
                if(this.list[i].id === item.id){
                    return true;
                }
            }
            return false;
        },
        hasFalseInRules(){
            for(let rule in this.rules){
                if(!this.rules[rule]){
                    return true;
                }
            }
            return false;
        },
        getPrevItems(){
            let newList = [];
            return new Promise((resolved, rejected) => {
                if( !this.hasFalseInRules() ) {
                    for (let i = 1; i <= this.meta.current_page; i++) {
                        axios.post(this.meta.path + '?page=' + i)
                            .then((res => {
                                newList = newList.concat(res.data.data);
                            })).catch(err => {
                            rejected(err);
                        }).then(() => {
                            if (i === this.meta.current_page) {
                                for(let i = 0; i < newList.length; i++){
                                    if(!this.inList(newList[i])){
                                        this.list.push(newList[i]);
                                    }
                                }
                                resolved();
                            }
                        });
                    }
                }else{
                    resolved(this.list);
                }
            });
        },
        infinite($state) {
            let id = this.infinityId;
            if (this.links.next !== null) {
                this.getPrevItems()
                    .then(() => {
                        axios.post((this.links.next), this.filter)
                            .then((res => {
                                if (this.infinityId === id) {
                                    this.links = res.data.links;
                                    this.meta = res.data.meta;
                                    this.list = this.list.concat(res.data.data);
                                    if (this.list.length) {
                                        $state.loaded();
                                    } else {
                                        $state.complete();
                                    }
                                }
                            })).catch(err => {
                            $state.error(err.response.data.message);
                        });
                    })
                    .catch(e => {
                        console.dir(e);
                    });
            } else {
                $state.complete();
            }
        },
        reload() {
            this.list = [];
            this.meta = null;
            this.links.next = this.url;

            this.infinityId = +new Date();
        },
        getDataFromServer(preRender = null, options = null) {
            axios.post(this.url, options)
                .then(res => {
                    this.list = res.data.data;
                    this.links = res.data.links;
                    this.meta = res.data.meta;
                    this.infinityId = +new Date();
                    if (preRender) {
                        preRender.remove();
                    }
                })
                .catch(err => {
                    console.log();
                });

        }

    },
    mounted() {
        this.$watch('filter', function () {
            this.reload();
        }, {deep: true});
    }

}
