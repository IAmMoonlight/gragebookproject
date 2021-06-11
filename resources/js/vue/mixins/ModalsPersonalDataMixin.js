export default {
    data(){
        return {
            url: '',
            errors: {},
        }
    },
    computed: {
        canSubmit(){
            for(let field in this.updateData){
                if(this.updateData[field].length === 0){
                    return false;
                }
            }
            return true;
        }
    },
    methods: {
        sendForm(){
            this.errors = {}
            axios.post(this.url, this.updateData)
                .then(() => {
                    location.reload();
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
                });
        }
    },
    mounted() {

    }
}