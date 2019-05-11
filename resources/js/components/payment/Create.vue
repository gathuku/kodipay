<template >
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header bg-primary"> <strong> Payment Create</strong></div>

                  <div class="card-body">

                       <form class="" action="#" method="post">
                         <div class="form-group">
                          <label for="">Select Payment Type</label>
                          <select class="form-control" name="type">
                            <option value="Mpesa">Mpesa</option>
                            <option value="Cash">Cash</option>
                            <option value="Bank Transfer">Bank Transer</option>
                          </select>
                         </div>
                         <div class="from-group">
                           <label for="">Enter Amount</label>
                           <input class="form-control" type="text" name="amount" value="">
                         </div>
                         <div class="from-group">

                           <input class="form-control btn btn-primary" type="submit"  value="Submit">
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

  }
</script>
