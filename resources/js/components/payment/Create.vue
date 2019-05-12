<template >
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header bg-primary"> <h3> Payment Create</h3></div>

                  <div class="card-body">
                      <button @click="moveBack" class="btn btn-primary" type="button" name="button">Go Back</button>
                        <div v-if="message" class="alert alert-success">
                          {{message.message}}
                        </div>

                       <form @submit.prevent="createPayment">
                         <div class="form-group">
                          <label for="">Select Payment Type</label>
                          <select v-model="form.type" class="form-control" name="type">
                            <option value="Mpesa">Mpesa</option>
                            <option value="Cash">Cash</option>
                            <option value="Bank Transfer">Bank Transer</option>
                          </select>
                         </div>
                         <div class="from-group">
                           <label for="">Enter Amount</label>
                           <input v-model="form.amount" class="form-control" type="text" name="amount" value="">
                         </div>

                         <br>
                         <div class="from-group">

                           <input  class="form-control btn btn-primary col-md-3" type="submit"  value="Submit">
                         </div>
                       </form>

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
        form:{
          userId:this.$route.params.id,
          type:'',
          amount:'',
        },
        message:{},
      }
    },

    methods:{
     createPayment(){
       axios.post('/api/payment',this.form).then(({data})=>{this.message=data})
     },
     moveBack(){
       this.$router.push({name:'payment'});
     },
   },
  }
</script>
