<?php $this->layout('ecommerce/master'); ?>

   <body class="sub_page">
      <div class="hero_area">
      <?php include_once "header.php"; ?>
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Register us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="process_registration.php" method="POST">
                           <fieldset>
                              <legend>Customer Information</legend>
                              <input type="text" placeholder="Enter your name" name="customer_name" required />
                              <input type="text" placeholder="Enter your last name" name="customer_lastname" required />
                              <input type="email" placeholder="Enter your email address" name="customer_email" required />
                              <input type="password" placeholder="Enter your password" name="customer_password" required />
                              <input type="text" placeholder="Enter your CPF" name="customer_cpf" required />
                              <input type="date" placeholder="Enter your birthdate" name="customer_birthdate" required />

                              <legend>Address Information</legend>
                              <input type="text" placeholder="Enter your street" name="address_street" required />
                              <input type="text" placeholder="Enter your neighborhood" name="address_neighborhood" required />
                              <input type="text" placeholder="Enter your city" name="address_city" required />
                              <input type="text" placeholder="Enter your state" name="address_state" required />
                              <input type="text" placeholder="Enter your country" name="address_country" required />
                              <input type="text" placeholder="Enter your ZIP code" name="address_zip" required />
                              <input type="text" placeholder="Enter your number" name="address_number" required />
                              <input type="text" placeholder="Enter your reference" name="address_reference" />
                              <input type="text" placeholder="Enter your complement" name="address_complement" />
                              
                              <input type="submit" value="Register" />
                           </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
      