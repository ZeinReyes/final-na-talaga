<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="login.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <h1 class="mx-2" style="color: #ffbf00;">Pizza Town</h1>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php" style="color: #f2f2f2;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php" style="color: #f2f2f2;">
                Menu
              </a>
            </li>
            <!-- Button trigger modal -->
            <button type="button" class="btn cart btn-warning m-2" data-bs-toggle="modal" data-bs-target="#cart">
              Cart
            </button>

            <svg data-bs-toggle="modal" data-bs-target="#login" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Modal 1 -->


  


<div class="modal fade " id="cart" tabindex="-1" aria-labelledby="cart" aria-hidden="true">
  <div class="modal-dialog  modal-xl">
    <div class="modal-content">
      <div class="container-cart ">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
              <div class="card-body p-0">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <div class="p-5">
                      <div class="d-flex justify-content-between align-items-center mb-5">
                        <h1 class="fw-bold mb-0 text-black">pizza town</h1>
                        <h6 class="mb-0 text-muted">3 items</h6>
                      </div>
                      <hr class="my-4">
    
                      <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="images/best1.png"
                            class="img-fluid rounded-3" alt="pizza">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <h6 class="text-muted">pizza</h6>
                          <h6 class="text-black mb-0">Sicilian</h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
    
                          <input id="form1" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" />
    
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h6 class="mb-0">€ 44.00</h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                        </div>
                      </div>
    
                      <hr class="my-4">
    
                      <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="images/best2.png"
                            class="img-fluid rounded-3" alt="pizza">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <h6 class="text-muted">pizza</h6>
                          <h6 class="text-black mb-0">Hawaiian</h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
    
                          <input id="form1" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" />
    
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h6 class="mb-0">€ 44.00</h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                        </div>
                      </div>
    
                      <hr class="my-4">
    
                      <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="images/best3.png"
                            class="img-fluid rounded-3" alt="pizza">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <h6 class="text-muted">pizza</h6>
                          <h6 class="text-black mb-0">Margherita</h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
    
                          <input id="form1" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" />
    
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h6 class="mb-0">€ 44.00</h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                        </div>
                      </div>
    
                      <hr class="my-4">
    
                      <div class="pt-5">
                        <h6 class="mb-0"><a href="#!" class="text-body" data-bs-dismiss="modal"><i
                              class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 bg-grey">
                    <div class="p-5">
                      <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                      <hr class="my-4">
    
                      <div class="d-flex justify-content-between mb-4">
                        <h5 class="text-uppercase">items 3</h5>
                        <h5>€ 132.00</h5>
                      </div>
    
                      <h5 class="text-uppercase mb-3">Shipping</h5>
    
                      <div class="mb-4 pb-2">
                        <select class="select">
                          <option value="1">Standard-Delivery- €5.00</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                        </select>
                      </div>
    
                      <h5 class="text-uppercase mb-3">Give code</h5>
    
                      <div class="mb-5">
                        <div class="form-outline">
                          <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplea2">Enter your code</label>
                        </div>
                      </div>
    
                      <hr class="my-4">
    
                      <div class="d-flex justify-content-between mb-5">
                        <h5 class="text-uppercase">Total price</h5>
                        <h5>€ 137.00</h5>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-block btn-lg"  data-bs-dismiss="modal"
                          data-mdb-ripple-color="dark">Register</button>
                        </div>
    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal 2 -->

  
<div class="modal fade " id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog  modal-xl">
    <div class="modal-content">
        <div class="container-cart">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://i.pinimg.com/564x/57/be/f7/57bef75efe25aafe84bb94748b5b3bf3.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; " />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form>
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0">Logo</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
      
                        <div class="form-outline mb-4">
                          <input type="email" id="form2Example17" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">Email address</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example27" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Password</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                        </div>
      
                        <a class="small text-muted" href="#!">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <button type="button" class="btn btn-warning m-2" data-bs-toggle="modal" data-bs-target="#signup">
              Sign up
            </button></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
</div>


  <!-- Modal 3 -->

  <div class="modal fade " id="signup" tabindex="-1" aria-labelledby="signup" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
      <div class="modal-content">
        <div class="container-signup">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="card-signup">
              <div class="card text-black">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
      
                      <form class="mx-1 mx-md-4">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" class="form-control" />
                            <label class="form-label" for="form3Example1c">Your Name</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" class="form-control" />
                            <label class="form-label" for="form3Example3c">Your Email</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4c" class="form-control" />
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4cd" class="form-control" />
                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                          </div>
                        </div>
      
                        <div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                          </label>
                        </div>
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="button" class="btn btn-primary btn-lg">Register</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="https://i.pinimg.com/236x/a5/d7/3d/a5d73d50c53cd495307761c4f8046dbf.jpg"
                        class="img-fluid" alt="Sample image" style="width: 100vw;">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <main>
    <div class="home-container">
      <section class="container1 d-flex">
        <div id="container1-text">
          <h1><span style="color: #ffbf00;">
            Savor each slice</span>, pizza delights with flavorful and blissful moments.
          </h1>
          <p>Savoring the delectable slices of perfectly melted cheese and flavorful toppings, pizza enthusiasts indulge in the timeless joy that comes from relishing every bite of the meticulously crafted, oven-baked masterpiece.</p>
          <button>Ordernow</button>
        </div>
        <div id="container1-image">
          <img src="css/images/pizza-container1.png" alt="">
        </div>
      </section>
      <section class="circular-slider overlay" id="myCarousel">
        <div class="container">
          <div class="text">
            <h1>Sicilian</h1>
            <p>Sicilian pizza, an artisanal masterpiece, boasts a thick, airy crust, layered with rich tomato sauce, melted cheese, and savory toppings, creating a hearty and satisfying culinary experience steeped in tradition.</p>
          </div>
          <div class="text">
            <h1>Hawaiian</h1>
            <p>
              Hawaiian pizza, a tropical paradise on dough, harmonizes smoky ham, sweet pineapple, and melted cheese, crafting a delightful, unforgettable culinary escape.</p>
          </div>
          <div class="text">
            <h1>Margherita</h1>
            <p>
              Margherita pizza, a culinary marvel, enchants with simplicity—lush tomatoes, fresh mozzarella, fragrant basil—an exquisite harmony, inviting a symphony of flavors.</p>
          </div>
          <div class="slider">
            <div class="indicator"></div>
            <div class="menu" id="bestSellers">
              <div class="item">
                <span class="pro">Sicilian</span>
              </div>
              <div class="item">
                <span class="pro">Hawaiian</span>
              </div>
              <div class="item">
                <span class="pro">Margherita</span>
              </div>
            </div>
            <div class="img"></div>
          </div>
        </div>
        <svg class="top-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#ffbf00" fill-opacity="1"
            d="M0,224L11.4,208C22.9,192,46,160,69,122.7C91.4,85,114,43,137,64C160,85,183,171,206,202.7C228.6,235,251,213,274,208C297.1,203,320,213,343,224C365.7,235,389,245,411,218.7C434.3,192,457,128,480,117.3C502.9,107,526,149,549,165.3C571.4,181,594,171,617,186.7C640,203,663,245,686,272C708.6,299,731,309,754,298.7C777.1,288,800,256,823,245.3C845.7,235,869,245,891,256C914.3,267,937,277,960,261.3C982.9,245,1006,203,1029,202.7C1051.4,203,1074,245,1097,234.7C1120,224,1143,160,1166,154.7C1188.6,149,1211,203,1234,197.3C1257.1,192,1280,128,1303,133.3C1325.7,139,1349,213,1371,234.7C1394.3,256,1417,224,1429,208L1440,192L1440,320L1428.6,320C1417.1,320,1394,320,1371,320C1348.6,320,1326,320,1303,320C1280,320,1257,320,1234,320C1211.4,320,1189,320,1166,320C1142.9,320,1120,320,1097,320C1074.3,320,1051,320,1029,320C1005.7,320,983,320,960,320C937.1,320,914,320,891,320C868.6,320,846,320,823,320C800,320,777,320,754,320C731.4,320,709,320,686,320C662.9,320,640,320,617,320C594.3,320,571,320,549,320C525.7,320,503,320,480,320C457.1,320,434,320,411,320C388.6,320,366,320,343,320C320,320,297,320,274,320C251.4,320,229,320,206,320C182.9,320,160,320,137,320C114.3,320,91,320,69,320C45.7,320,23,320,11,320L0,320Z">
          </path>
        </svg>
        <section class="container3">
          <div id="container3" class="container3 my-5">
            <div class="dining-cards d-flex justify-content-around">
              <div class="dine-in dining-card rounded">
                <svg class="my-3" xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z" />
                </svg>
                <h1>Dine-in</h1>
                <p class="my-2">
                  Indulge in mouthwatering pizzas crafted with the finest ingredients, from classic Margherita to sizzling BBQ; every bite is a flavor explosion! Join us for a dine-in experience and savor the perfect blend of tradition and taste.</p>
              </div>
              <div class="deliver dining-card rounded">
                <svg class="my-3" xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                </svg>
                <h1>Delivery</h1>
                <p class="my-2">Experience the convenience of our swift delivery service, ensuring your favorite pizzas reach you hot and fresh, pronto! Order now and relish the deliciousness from the comfort of your home..</p>
              </div>
              <div class="pick-up dining-card rounded">
                <svg class="my-3" xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
                </svg>
                <h1>Pick-up</h1>
                <p class="my-2">Enjoy the convenience of our quick pick-up service, allowing you to grab your favorite pizzas without any wait; pizza perfection, ready when you are! Place your order now and experience the ease of delicious pick-up.</p>
              </div>
            </div>
            <svg class="bottom-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="#ffbf00" fill-opacity="1"
                d="M0,160L8.6,133.3C17.1,107,34,53,51,64C68.6,75,86,149,103,170.7C120,192,137,160,154,138.7C171.4,117,189,107,206,101.3C222.9,96,240,96,257,90.7C274.3,85,291,75,309,112C325.7,149,343,235,360,256C377.1,277,394,235,411,213.3C428.6,192,446,192,463,208C480,224,497,256,514,261.3C531.4,267,549,245,566,213.3C582.9,181,600,139,617,144C634.3,149,651,203,669,218.7C685.7,235,703,213,720,186.7C737.1,160,754,128,771,122.7C788.6,117,806,139,823,144C840,149,857,139,874,138.7C891.4,139,909,149,926,160C942.9,171,960,181,977,165.3C994.3,149,1011,107,1029,96C1045.7,85,1063,107,1080,117.3C1097.1,128,1114,128,1131,154.7C1148.6,181,1166,235,1183,256C1200,277,1217,267,1234,245.3C1251.4,224,1269,192,1286,186.7C1302.9,181,1320,203,1337,181.3C1354.3,160,1371,96,1389,69.3C1405.7,43,1423,53,1431,58.7L1440,64L1440,0L1431.4,0C1422.9,0,1406,0,1389,0C1371.4,0,1354,0,1337,0C1320,0,1303,0,1286,0C1268.6,0,1251,0,1234,0C1217.1,0,1200,0,1183,0C1165.7,0,1149,0,1131,0C1114.3,0,1097,0,1080,0C1062.9,0,1046,0,1029,0C1011.4,0,994,0,977,0C960,0,943,0,926,0C908.6,0,891,0,874,0C857.1,0,840,0,823,0C805.7,0,789,0,771,0C754.3,0,737,0,720,0C702.9,0,686,0,669,0C651.4,0,634,0,617,0C600,0,583,0,566,0C548.6,0,531,0,514,0C497.1,0,480,0,463,0C445.7,0,429,0,411,0C394.3,0,377,0,360,0C342.9,0,326,0,309,0C291.4,0,274,0,257,0C240,0,223,0,206,0C188.6,0,171,0,154,0C137.1,0,120,0,103,0C85.7,0,69,0,51,0C34.3,0,17,0,9,0L0,0Z">
              </path>
            </svg>
          </div>
        </section>
        <div class="contact-container d-flex">
          <div id="main-box" class="main-box mx-auto">
            <div class="box1">
              <h1>Contact Us</h1>
              <p>Message us at this number anytime. We welcome your inquiries and are here to assist you at your
                convenience.</p>
              <span>+01234567890</span>
            </div>
            <div class="box2">
              <form action="">
                <div class="user-box">
                  <input type="text" name="" required="">
                  <label>Full Name</label>
                </div>
                <div class="user-box">
                  <input type="email" name="" required="">
                  <label>Email</label>
                </div>
                <div class="user-box">
                  <input type="text" name="" required="">
                  <label>Message</label>
                </div>
                <center>
                  <button class="form-btn">Send --></button>
                </center>
              </form>
            </div>
          </div>

        </div>
    </div>
  </main>
  <footer class="d-flex">
    <div class="resto-info mx-5 py-4 px-5">
      <h1 class="py-4">Pizza Town</h1>
      <div class="location d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
          viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path
            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
        </svg>
        <p class="mx-4">Barangay Saksakin
          Swerte Makailag Street
    Quezon City </p>
      </div>
      <div class="email d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
          viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path
            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
        </svg>
        <p class="mx-4">info@pizzatownfake.com</p>
      </div>
      <div class="number d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
          viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path
            d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
        </svg>
        <p class="mx-4"> (555) 123-4567</p>
      </div>
    </div>
    <div class="social-links mx-5 py-4">
      <h1 class="py-4 px-5">Socials</h1>
      <div class="socials mx-5">
        <div class="facebook d-flex">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em"
            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
          </svg>
          <p class="mx-4">Pizza town</p>
        </div>
        <div class="instagram d-flex">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em"
            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
          </svg>
          <p class="mx-4">@Pizza_town</p>
        </div>
        <div class="tiktok d-flex">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em"
            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
          </svg>
          <p class="mx-4">Pizza Town</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 mb-md-0 py-5">
      <h1 class="mb-4">Opening hours</h5>
        <table class="open-hours table text-center">
          <tbody>
            <tr>
              <td>Mon - Thu:</td>
              <td>8am - 9pm</td>
            </tr>
            <tr>
              <td>Fri - Sat:</td>
              <td>8am - 1am</td>
            </tr>
            <tr>
              <td>Sunday:</td>
              <td>9am - 10pm</td>
            </tr>
          </tbody>
        </table>
    </div>
    </div>
  </footer>
  <script src="index.js"></script>
  <script src="additional.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
