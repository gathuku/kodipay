<template>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">

                  <div class="card-header bg-primary"> <strong> Payment</strong></div>

                  <div class="card-body">
                    <router-link>
                     <button class="btn btn-primary" type="button" name="button">New</button>
                    </router-link>
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
                        <button class="btn btn-primary" type="button" name="button">Edit</button>
                        <button class="btn btn-primary" type="button" name="button">Delete</button>
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
      form:{

      }
    }
  },
  methods:{
    loadPaymet(){
      axios.get('api/payment').then(({data})=>{this.payments=data});
    }
  },

  created(){
    this.loadPaymet();
  }
}

</script>
