const app = Vue.createApp({
    data() {
      return {
        dateAplication:'',
        description:'',
        typeAccount:1,
        amount:0,
        requestID:'',
        accountID:'',
        //
        accs:[],
      }
    },
    computed:{
        requestID(){
            if( this.requestID == '' )
                return '--';
            return this.requestID;
        }
    },
    methods:{
        onReady(){
            let myaccs = this.accs;
            axios({
                method: 'get',
                url: getApi,
            }).then(function (r) {
                r.data.forEach(element => {
                    myaccs.push(element);
                });
              });
        },
        newAcc(){
            let myaccs = this.accs;
            let self = this;
            if( !confirm('¿Agregar registro?') )
                return;
            axios({
                method: 'post',
                url: saveApi,
                data: {
                    dateAplication:this.dateAplication,
                    description:this.description,
                    typeAccount:this.typeAccount,
                    amount:this.amount,
                    requestID:this.requestID,
                    accountID:this.accountID,
                    _token:document.getElementsByName('_token')[0].value,
                }
              })
              .then(function (r) {
                  self.dateAplication = "";
                  self.description = "";
                  self.typeAccount = 1;
                  self.amount = 0;
                  self.requestID = "";
                  self.accountID = "";
                  myaccs.push(r.data);
              });
        }
    },
    beforeMount(){
        this.onReady();
    }
  })

 app.mount('#app')
