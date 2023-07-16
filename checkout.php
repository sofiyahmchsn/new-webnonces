
  <div class="site-wrap">
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php?page=dashboard">Home</a> 
            <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong>
            <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Returning customer? <a href="./user-area/login_user.php">Click here</a> to login
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-md-0">
            <h2 class="h3 text-black">Billing Details</h2>
            <div class="p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control">
                  <option value="1">Select a country</option>    
                  <option value="2">Jakarta Selatan</option>    
                  <option value="3">Jakarta Pusat</option>    
                  <option value="4">Jakarta Timur</option>    
                  <option value="5">Jakarta Barat</option>    
                  <option value="6">Jakarta Utara</option>    
                  <option value="7">Depok</option>    
                  <option value="8">Bekasi</option>   
                  <option value="9">Take Away</option>   
                  <option value="10">Free</option>   

                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mt-5 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                        <td>$250.00</td>
                      </tr>
                      <tr>
                        <td>Polo Shirt <strong class="mx-2">x</strong>   1</td>
                        <td>$100.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Delivery</strong></td>
                        <td class="text-black font-weight-bold"><strong>$10.00</strong></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$360.00</strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <p class="text-black font-weight-bold"><strong>Bank Transfer</strong></p>
                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bank BCA</a></h3>
                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">07712345</p>
                        <p class="mb-0">A.N FATMA ALBAR</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Bank Mandiri</a></h3>
                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">070000012345</p>
                        <p class="mb-0">A.N FATMA ALBAR</p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">Place Order</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

