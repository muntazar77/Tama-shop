
<!-- 
/*------------------------------------------------------------------
[Table of contents - جدول المحتوى الكود ]

1.  Header Section - الهيدر
2.  slaider-Home - سلايدر الهوم
3.  About section -قسم الحول الموقع
4.  icons section -قسم الايقونات 
5.  collection Section قسم المنتجات الجديدة
6.  prodcuts  Section قسم المنتجات
7.  products-popular Section  قسم المنتجات الشائعة 
8.  review section - قسم ارأء العملاء
9.  contact section - قسم الاتصال بنا
10.  Footer section قسم الفوتر 
-------------------------------------------------------------------*/-->



<!-- /*----------------------------------------*/
    /* Header Section -قسم الهيدر 
    /*----------------------------------------*/ -->

<?php include "includ/header.php"  ?>
   

<!-- 
  /*----------------------------------------*/
  /* Slaider-Home - قسم سلايدرات
 /*----------------------------------------*/ -->
    <div class="container" id="home">
      <div class="slide-container active">
        <div class="slide">
          <div class="content">
            <a href="#">
              <h3>Shopping online</h3>
              <p>Welcome to this world shoping store.before your trip</p>
              <a href="#" class="btn-slid">Open Now</a>
            </a>
          </div>
          <img src="images/2.png" alt="" srcset="" />
        </div>
      </div>

      <div class="slide-container">
        <div class="slide">
          <div class="content">
            <h3>clothes shopping</h3>
            <p>Welcome to this simple store. Hope we meet your expectations</p>
            <a href="#" class="btn-slid">Open Now</a>
          </div>
          <img src="images/1.png" alt="" srcset="" />

        </div>
      </div>

      <div class="slide-container">
        <div class="slide">
          <div class="content">
            <h3>MakeUp shopping</h3>
            <p>Welcome to this simple store. Hope we meet your expectations</p>
            <a href="#" class="btn-slid">Open Now</a>
          </div>
          <img src="images/3.jpg" alt="" srcset="" />
          <!-- <video  src="1images/vid/6.mp4"autoplay width="100%" loop muted></video> -->
        </div>
      </div>

      <div id="next" onclick="next()">></div>
      <div id="prev" onclick="prev()"><</div>
    </div>

    <!--
    /*----------------------------------------*/
  /* 3-About section -قسم حول الموقع 
 /*----------------------------------------*/ -->
    <section class="about" id="about">
      <h1 class="heading"><span> about </span> us</h1>

      <div class="row">
        <div class="video-container">
          <video src="images/vid/2.mp4" loop autoplay muted></video>
          <h3>best online store</h3>
        </div>

        <div class="content">
          <h3>why choose us?</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cumque
            sit nemo pariatur corporis perspiciatis aspernatur a ullam
            repudiandae autem asperiores quibusdam omnis commodi alias repellat
            illum, unde optio temporibus.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Accusantium ea est commodi incidunt magni quia molestias
            perspiciatis, unde repudiandae quidem.
          </p>
          <a href="#" class="btn">learn more</a>
        </div>
      </div>
    </section>















 







      <!--
    /*----------------------------------------*/
  /* 4-icons section -قسم الايقونات
 /*----------------------------------------*/ -->
    <section class="icons-container">
      <div class="icons">
        <img src="images/icon-1.png" alt="" />
        <div class="info">
          <h3>free delivery</h3>
          <span>on all orders</span>
        </div>
      </div>

      <div class="icons">
        <img src="images/icon-2.png" alt="" />
        <div class="info">
          <h3>10 days returns</h3>
          <span>moneyback guarantee</span>
        </div>
      </div>

      <div class="icons">
        <img src="images/icon-3.png" alt="" />
        <div class="info">
          <h3>offer & gifts</h3>
          <span>on all orders</span>
        </div>
      </div>

      <div class="icons">
        <img src="images/icon-4.png" alt="" />
        <div class="info">
          <h3>secure paymens</h3>
          <span>protected by paypal</span>
        </div>
      </div>
    </section>
    <br />




        
     <!--
    /*----------------------------------------*/
  /* 5-collection section قسم المنتجات الجديدة
 /*----------------------------------------*/ -->
  <?php include "includ/collection.php"  ?>


     <!--
    /*----------------------------------------*/
  /* 6-prodcuts section - قسم المنتجات 
 /*----------------------------------------*/ -->
    <section class="products" id="products">
      <h2 class="heading">Special Selection <span> in clothes</span></h2>
      <br /><br />

      <div class="box-container">
        <div class="box">
          <span class="discount">-17%</span>
          <div class="image">
            <img src="images/product/clothes/25.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn" onclick="openNav()">add to cart</a> 

              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>flower pot</h3>
            <div class="price">$12.99 <span>$15.99</span></div>
          </div>
        </div>

        <div class="box">
          <span class="discount">-3%</span>
          <div class="image">
            <img src="images/product/clothes/21.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn" onclick="openNav()">add to cart</a> 

              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>flower pot</h3>
            <div class="price">$12.99 <span>$15.99</span></div>
          </div>
        </div>

        <div class="box">
          <span class="discount">-18%</span>
          <div class="image">
            <img src="images/product/clothes/20.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>flower pot</h3>
            <div class="price">$12.99 <span>$15.99</span></div>
          </div>
        </div>

        <div class="box">
          <span class="discount">-10%</span>
          <div class="image">
            <img src="images/product/clothes/44.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>flower pot</h3>
            <div class="price">$12.99 <span>$15.99</span></div>
          </div>
        </div>
      </div>
    </section>
    <br /><br />
   

    <!--
    /*----------------------------------------*/
  /* 7-products-popular section قسم المنتجات الشائعة
 /*----------------------------------------*/ -->
    <section class="products-popular">
      <h2 class="heading">Popular Of<span> This Year</span></h2>
      <br /><br />

      <div class="box-container">
        <div class="last-products">
          <h1>Clothes</h1>
          <div class="box">
            <img src="images/product/clothes/6.png" alt="" srcset="" />
            <div class="text">
              <p>blue shirt</p>
              <p>$20.00</p>
            </div>
          </div>
          <div class="box">
            <img src="images/product/clothes/5.png" alt="" srcset="" />
            <div class="text">
              <p>blue shirt</p>
              <p>$20.00</p>
            </div>
          </div>
          <div class="box">
            <img src="images/product/clothes/9.png" alt="" srcset="" />
            <div class="text">
              <p>blue shirt</p>
              <p>$20.00</p>
            </div>
          </div>
        </div>

        <div class="last-products">
          <h1>watchs</h1>

          <div class="box">
            <img src="images/product/watchs/11.jpg" alt="" srcset="" />
            <div class="text">
              <p>blue shirt</p>
              <p>$20.00</p>
            </div>
          </div>
          <div class="box">
            <img src="images/product/watchs/2.jpg" alt="" srcset="" />
            <div class="text">
              <p>blue shirt</p>
              <p>$20.00</p>
            </div>
          </div>
          <div class="box">
            <img src="images/product/watchs/3.jpg" alt="" srcset="" />
            <div class="text">
              <p>blue shirt</p>
              <p>$20.00</p>
            </div>
          </div>
        </div>

        <div class="last-products">
          <h1>Electronic</h1>
          <div class="box">
            <img src="images/product/elect/5.jpg" alt="" srcset="" />
            <div class="text">
              <p>blue shirt</p>
              <p>$20.00</p>
            </div>
          </div>
          <div class="box">
            <img src="images/product/elect/3.jpg" alt="" srcset="" />
            <div class="text">
              <p>blue shirt</p>
              <p>$20.00</p>
            </div>
          </div>
          <div class="box">
            <img src="images/product/elect/7.jpg" alt="" srcset="" />
            <div class="text">
              <p>blue shirt</p>
              <p>$20.00</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br /><br />


        <!--
    /*----------------------------------------*/
  /* 8-review section section قسم ارأء العملاء
 /*----------------------------------------*/ -->
    <section class="review" id="review">
      <h1 class="heading">customer's <span>review</span></h1>
      <br />

      <div class="box-container">
        <div class="box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
            asperiores laboriosam praesentium enim maiores? Ad repellat
            voluptates alias facere repudiandae dolor accusamus enim ut odit,
            aliquam nesciunt eaque nulla dignissimos.
          </p>
          <div class="user">
            <img src="images/pic-1.png" alt="" />
            <div class="user-info">
              <h3>john deo</h3>
              <span>happy customer</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
            asperiores laboriosam praesentium enim maiores? Ad repellat
            voluptates alias facere repudiandae dolor accusamus enim ut odit,
            aliquam nesciunt eaque nulla dignissimos.
          </p>
          <div class="user">
            <img src="images/pic-2.png" alt="" />
            <div class="user-info">
              <h3>john deo</h3>
              <span>happy customer</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
            asperiores laboriosam praesentium enim maiores? Ad repellat
            voluptates alias facere repudiandae dolor accusamus enim ut odit,
            aliquam nesciunt eaque nulla dignissimos.
          </p>
          <div class="user">
            <img src="images/pic-3.png" alt="" />
            <div class="user-info">
              <h3>john deo</h3>
              <span>happy customer</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>
      </div>
    </section>
    <br /><br />



         <!--
    /*----------------------------------------*/
  /* 9- Contact section  -قسم اتصل بنا 
 /*----------------------------------------*/ -->
    <section class="contact" id="contact">
      <h1 class="heading"><span> contact </span> us</h1>

      <div class="row">
        <form action="">
          <input type="text" placeholder="name" class="box" />
          <input type="email" placeholder="email" class="box" />
          <input type="number" placeholder="number" class="box" />
          <textarea
            name=""
            class="box"
            placeholder="message"
            id=""
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" value="send message" class="btn" />
        </form>

        <div class="image">
          <img src="images/1.svg" alt="" />
        </div>
      </div>
    </section>



      <!--
    /*----------------------------------------*/
  /* 10- footer section قسم الفوتر او تذيل 
 /*----------------------------------------*/ -->
    <?php include "includ/footer.php"  ?>
