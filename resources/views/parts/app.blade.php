@include('parts.header')
<div clss="container" style="padding: 100px 0; background: #98AFC7;">
  <body class="bg-light">l
  <div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Checkout form</h2>
    
    </div>


      <div class="col-md-7 col-lg-8 mx-auto">
        <h4 class="mb-3">Billing address</h4>
        <form actio="{{ route('student.store') }}" method="post" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <span class="input-group-text">***</span>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <span class="input-group-text">***</span>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <span class="input-group-text">***</span>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="phonenumber" class="form-label">Phonenumber</label>
              <div class="input-group has-validation">
                <span class="input-group-text">***</span>
                <input type="text" class="form-control" id="phonenumber" placeholder="Phone number" required>
              <div class="invalid-feedback">
                  Your Phonenumber is required.
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <label for="emargancy phonenumber" class="form-label">Emargancy Phonenumber</label>
              <div class="input-group has-validation">
                <span class="input-group-text">***</span>
                <input type="text" class="form-control" id="emargancyphonenumber" placeholder="Emargancy Phonenumber" required>
              <div class="invalid-feedback">
                 Another phonenumber is required for e nmargancy .
                </div>
              </div>
            </div>
        

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
  
            <div class="form-group"> 
                        <label for="description"> Description: </label>
                         <textarea name="description" id="description" class="form-control" cols="10" rows="10"></textarea>
                         </div>

                         <div class="form-group"> 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineradio1" checked || value="1" >
                            <label class="form-check-label" for="inlineradio1"> Publish</label>
                        </div>
                       

                        <div class="form-group"> 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineradio2" || value="0" >
                            <label class="form-check-label" for="inlineradio1"> Unpublish</label>
                        </div>
            

        
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <!-- <script src="bundle.min.js"></script> -->

      <script src="form-validation.js"></script>
  </body>
</html>
