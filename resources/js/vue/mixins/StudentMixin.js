export default {
    data(){
        return {
            form: {
                name: '',
                email: '',
                password: '',
                groups: []
            },
            routeListGroups: document.querySelector('meta[name=get-list-groups]').getAttribute('content'),
            routeIndex: document.querySelector('meta[name=route-index]').getAttribute('content'),
            listGroups: [],
            errors: {}
        }
    },
    methods: {
        submitForm(){
            this.errors = {};
            axios.post(this.routeSave, this.form)
                .then(() => {
                    //window.location.href = this.routeIndex;
                })
                .catch(err => {
                    let errors = err.response.data.errors;
                    if(errors){
                        let newErrors = {};
                        for(let error in errors){
                            newErrors[error] = errors[error];
                        }
                        this.errors = newErrors;
                    }
                })
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
        addGroupToTable(){
            this.form.groups.push('0');
        },
        removeGroup(index){
            this.form.groups.splice(index, 1);
        }
    },
    mounted(){
        this.getListGroups();
    }
}