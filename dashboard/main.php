<section class="mb-4">
      <div class="card">
            <div class="card-header text-center py-3">
                  <h5 class="mb-0 text-center">
                        <strong>Top 10 Orders</strong>
                  </h5>
            </div>
            <div class="card-body">
                  <div class="table-responsive">
                        <table class="table table-hover text-nowrap">
                              <thead>
                                    <tr>
                                          <th scope="col">Order Id</th>
                                          <th scope="col">Product Name</th>
                                          <th scope="col">Max Selling Amount</th>
                                          <th scope="col">Total Deduction</th>
                                          <th scope="col">Final Cost</th>
                                          <th scope="col">User Id</th>
                                          <th scope="col">User Name</th>
                                    </tr>
                              </thead>
                              <tbody class="order-table">

                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
      <div class="text-center mx-auto">
            <a href="<?php echo htmlspecialchars("?page=orders"); ?>" class="btn form-control btn-primary">View All</a>
      </div>
</section>
<!--orders-->

<!--single order-->
<section class="single-order-container d-none mb-2">
      <div class="row ">
            <div class="col-md-4 col-sm-6 col-12 mb-4">
                  <div class="card">
                        <h5 class="card-title text-center mt-2">Order</h5>
                        <div class="card-body single-order">

                        </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 mb-4">
                  <div class="card">
                        <h5 class="card-title text-center mt-2">Address</h5>
                        <div class="card-body single-address">

                        </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 mb-4">
                  <div class="card">
                        <h5 class="card-title text-center mt-2">Problems</h5>
                        <div class="card-body single-problem">

                        </div>
                  </div>
            </div>
      </div>
</section>