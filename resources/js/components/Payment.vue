<template>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">

                  <div class="card-header bg-primary"> <strong> Payment</strong></div>

                  <div class="card-body">
                    <router-link
                        :to="{name:'paymentCreate', params:{id:1}}"
                        tag="button" class="btn btn-primary"> New
                    </router-link>
                  <br>
                  <br>
                  <table class="table">
                  <thead>
                    <th>Payment Type</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th></th>
                  </thead>
                  <tbody>
                    <tr v-for="payment in payments">
                      <td>{{payment.type}}</td>
                      <td>{{payment.amount}}</td>
                      <td>{{payment.created_at}}</td>
                      <td>
                        <router-link :to="{name:'paymentEdit',params:{id:payment.id}}">
                          <button class="btn btn-primary" type="button" name="button">Edit</button>
                        </router-link>

                        <button @click="deletePayment(payment.id)" class="btn btn-primary" type="button" name="button">Delete</button>
                       </td>
                    </tr>
                  </tbody>
                  </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>

export default{
  data(){
    return{
      payments:{},
      paymentId:'',
      status:{},


      form:{

      }
    }
  },
  methods:{
    loadPaymet(){
      axios.get('api/payment').then(({data})=>{this.payments=data});
    },
    deletePayment(id){
      const options = {title: 'Confirm Payment Delete?', cancelLabel: 'No'}
      this.$dialogs.confirm('Are you sure you want to delete this Payment!', options)
     .then(res => {

      if(res.ok){
        axios.delete('api/payment/' +id).then(({data})=>{

          const options = {title: 'Info', size: 'sm'}
          this.$dialogs.alert(data.message, options).then(res=>{
             this.$router.go();
          })

        })
      }
    })
    // Redirect Back


    }
  },

  created(){
    this.loadPaymet();
  },


  beforeRouteEnter(to,from,next){
        if(true){
            next()
        }else{
            next(false)
        }
   }
}

</script>
