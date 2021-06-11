export default {
    data(){
        return {
            form: {
                name: '',
                email: '',
                password: '',
                groups: []
            },
            routeIndex: document.querySelector('meta[name=route-index]').getAttribute('content'),
            errors: {},
            changingGroup: -1
        }
    },
    methods: {
        submitForm(){
            this.errors = {};
            axios.post(this.routeSave, this.form)
                .then(() => {
                    window.location.href = this.routeIndex;
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
        addGroupToTable(){
            this.form.groups.push({
                    groupName: '',
                    group: 0,
                    discipline: 0,
                    formControl: 1,
                    courseWork: false,
                    attestations: []
                });
            this.changingGroup = this.form.groups.length - 1;
        },
        removeGroup(index){
            this.form.groups.splice(index, 1);
        },
        updateDataGroup($event, index){
            this.form.groups[index] = $event;
            this.modalClose();
        },
        modalClose(){
            this.changingGroup = -1;
        }
    },
    mounted(){
    }
}