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
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
         <?php 
            foreach ($products as $key => $product): 
            $key++;
         ?>
         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="#" onclick='addToCart(<?=json_encode($product)?>); return false;' class="option1">Add To Cart</a>
                     <a href="/description?id_products=<?=$key?>"class="option2">View Now</a>
                  </div>
               </div>
               <div class="img-box">
                  <img src="<?=url("/assets/images/p".$key.".png")?>" alt="">
               </div>
               <div class="detail-box">
                  <h5>Men's Shirt</h5>
                  <h6>$75/h6>
               </div>
            </div>
         </div>
         <?php endforeach; ?>
      </div>
            <form>
               <fieldset>
                     <div class="field">
                        <input type="email" placeholder="Enter Your Mail" name="email" />
                        <input type="submit" value="Subscribe" />
                     </div>
               </fieldset>
            </form>
         </div>
      </section>
      <!-- end product section -->

      <script>
         async function addToCart(product) {
         
         let formData = new FormData();
   
         for (const [key, value] of Object.entries(product)) {
            formData.append(key, value);
         }

         let response = await fetch('/cart?add', { method: "POST", body: formData})
         console.log(response)
         
         }
      </script>
   </body>