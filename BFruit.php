<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>Exporter</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"
    />
    <!-- css -->
    <link
      rel="stylesheet"
      href="vendor/bootstrap-4.2.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <!-- js -->
    <script src="vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script>
    <script>
      svg4everybody();
    </script>
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome-5.6.1/css/all.min.css" />
    <!-- font - stroyka -->
    <link rel="stylesheet" href="fonts/stroyka/stroyka.css" />
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-97489509-6");
    </script>
  </head>
  <body>
    <!-- quickview-modal -->
    <div
      id="quickview-modal"
      class="modal fade"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
      </div>
    </div>
    <!-- quickview-modal / end --><!-- mobilemenu -->
    <div class="mobilemenu">
      <div class="mobilemenu__backdrop"></div>
      <div class="mobilemenu__body">
        <div class="mobilemenu__header">
          <div class="mobilemenu__title">Menu</div>
          <button type="button" class="mobilemenu__close">
            <svg width="20px" height="20px">
              <use xlink:href="images/sprite.svg#cross-20"></use>
            </svg>
          </button>
        </div>
        <div class="mobilemenu__content">
          <ul
            class="mobile-links mobile-links--level--0"
            data-collapse
            data-collapse-opened-class="mobile-links__item--open"
          >
            <li class="mobile-links__item" data-collapse-item>
              <div class="mobile-links__item-title">
                <a href="index.php" class="mobile-links__item-link">Home</a>
                <button
                  class="mobile-links__item-toggle"
                  type="button"
                  data-collapse-trigger
                >
                  <svg
                    class="mobile-links__item-arrow"
                    width="12px"
                    height="7px"
                  >
                    <use
                      xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                    ></use>
                  </svg>
                </button>
              </div>
              <div class="mobile-links__item-sub-links" data-collapse-content>
                <ul class="mobile-links mobile-links--level--1">
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="index.php" class="mobile-links__item-link"
                        >Home 1</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="index-2.php" class="mobile-links__item-link"
                        >Home 2</a
                      >
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mobile-links__item" data-collapse-item>
              <div class="mobile-links__item-title">
                <a href="#" class="mobile-links__item-link">Categories</a>
                <button
                  class="mobile-links__item-toggle"
                  type="button"
                  data-collapse-trigger
                >
                  <svg
                    class="mobile-links__item-arrow"
                    width="12px"
                    height="7px"
                  >
                    <use
                      xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                    ></use>
                  </svg>
                </button>
              </div>
              <div class="mobile-links__item-sub-links" data-collapse-content>
                <ul class="mobile-links mobile-links--level--1">
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link"
                        >Power Tools</a
                      >
                      <button
                        class="mobile-links__item-toggle"
                        type="button"
                        data-collapse-trigger
                      >
                        <svg
                          class="mobile-links__item-arrow"
                          width="12px"
                          height="7px"
                        >
                          <use
                            xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                          ></use>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="mobile-links__item-sub-links"
                      data-collapse-content
                    >
                      <ul class="mobile-links mobile-links--level--2">
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Engravers</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Wrenches</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Wall Chaser</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Pneumatic Tools</a
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link"
                        >Machine Tools</a
                      >
                      <button
                        class="mobile-links__item-toggle"
                        type="button"
                        data-collapse-trigger
                      >
                        <svg
                          class="mobile-links__item-arrow"
                          width="12px"
                          height="7px"
                        >
                          <use
                            xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                          ></use>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="mobile-links__item-sub-links"
                      data-collapse-content
                    >
                      <ul class="mobile-links mobile-links--level--2">
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Thread Cutting</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Chip Blowers</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Sharpening Machines</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Pipe Cutters</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Slotting machines</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"
                              >Lathes</a
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mobile-links__item" data-collapse-item>
              <div class="mobile-links__item-title">
                <a
                  href="shop-grid-3-columns-sidebar.php"
                  class="mobile-links__item-link"
                  >Shop</a
                >
                <button
                  class="mobile-links__item-toggle"
                  type="button"
                  data-collapse-trigger
                >
                  <svg
                    class="mobile-links__item-arrow"
                    width="12px"
                    height="7px"
                  >
                    <use
                      xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                    ></use>
                  </svg>
                </button>
              </div>
              <div class="mobile-links__item-sub-links" data-collapse-content>
                <ul class="mobile-links mobile-links--level--1">
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a
                        href="shop-grid-3-columns-sidebar.php"
                        class="mobile-links__item-link"
                        >Shop Grid</a
                      >
                      <button
                        class="mobile-links__item-toggle"
                        type="button"
                        data-collapse-trigger
                      >
                        <svg
                          class="mobile-links__item-arrow"
                          width="12px"
                          height="7px"
                        >
                          <use
                            xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                          ></use>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="mobile-links__item-sub-links"
                      data-collapse-content
                    >
                      <ul class="mobile-links mobile-links--level--2">
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a
                              href="shop-grid-3-columns-sidebar.php"
                              class="mobile-links__item-link"
                              >3 Columns Sidebar</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a
                              href="shop-grid-4-columns-full.php"
                              class="mobile-links__item-link"
                              >4 Columns Full</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a
                              href="shop-grid-5-columns-full.php"
                              class="mobile-links__item-link"
                              >5 Columns Full</a
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="shop-list.php" class="mobile-links__item-link"
                        >Shop List</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a
                        href="shop-right-sidebar.php"
                        class="mobile-links__item-link"
                        >Shop Right Sidebar</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="product.php" class="mobile-links__item-link"
                        >Product</a
                      >
                      <button
                        class="mobile-links__item-toggle"
                        type="button"
                        data-collapse-trigger
                      >
                        <svg
                          class="mobile-links__item-arrow"
                          width="12px"
                          height="7px"
                        >
                          <use
                            xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                          ></use>
                        </svg>
                      </button>
                    </div>
                    <div
                      class="mobile-links__item-sub-links"
                      data-collapse-content
                    >
                      <ul class="mobile-links mobile-links--level--2">
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a
                              href="product.php"
                              class="mobile-links__item-link"
                              >Product</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a
                              href="product-alt.php"
                              class="mobile-links__item-link"
                              >Product Alt</a
                            >
                          </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item>
                          <div class="mobile-links__item-title">
                            <a
                              href="product-sidebar.php"
                              class="mobile-links__item-link"
                              >Product Sidebar</a
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="cart.php" class="mobile-links__item-link"
                        >Cart</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="checkout.php" class="mobile-links__item-link"
                        >Checkout</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="wishlist.php" class="mobile-links__item-link"
                        >Wishlist</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="compare.php" class="mobile-links__item-link"
                        >Compare</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="account.php" class="mobile-links__item-link"
                        >My Account</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="track-order.php" class="mobile-links__item-link"
                        >Track Order</a
                      >
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mobile-links__item" data-collapse-item>
              <div class="mobile-links__item-title">
                <a href="blog-classic.php" class="mobile-links__item-link"
                  >Blog</a
                >
                <button
                  class="mobile-links__item-toggle"
                  type="button"
                  data-collapse-trigger
                >
                  <svg
                    class="mobile-links__item-arrow"
                    width="12px"
                    height="7px"
                  >
                    <use
                      xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                    ></use>
                  </svg>
                </button>
              </div>
              <div class="mobile-links__item-sub-links" data-collapse-content>
                <ul class="mobile-links mobile-links--level--1">
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a
                        href="blog-classic.php"
                        class="mobile-links__item-link"
                        >Blog Classic</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="blog-grid.php" class="mobile-links__item-link"
                        >Blog Grid</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="blog-list.php" class="mobile-links__item-link"
                        >Blog List</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a
                        href="blog-left-sidebar.php"
                        class="mobile-links__item-link"
                        >Blog Left Sidebar</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="post.php" class="mobile-links__item-link"
                        >Post Page</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a
                        href="post-without-sidebar.php"
                        class="mobile-links__item-link"
                        >Post Without Sidebar</a
                      >
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mobile-links__item" data-collapse-item>
              <div class="mobile-links__item-title">
                <a href="#" class="mobile-links__item-link">Pages</a>
                <button
                  class="mobile-links__item-toggle"
                  type="button"
                  data-collapse-trigger
                >
                  <svg
                    class="mobile-links__item-arrow"
                    width="12px"
                    height="7px"
                  >
                    <use
                      xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                    ></use>
                  </svg>
                </button>
              </div>
              <div class="mobile-links__item-sub-links" data-collapse-content>
                <ul class="mobile-links mobile-links--level--1">
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="about-us.php" class="mobile-links__item-link"
                        >About Us</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="contact-us.php" class="mobile-links__item-link"
                        >Contact Us</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a
                        href="contact-us-alt.php"
                        class="mobile-links__item-link"
                        >Contact Us Alt</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="404.php" class="mobile-links__item-link">404</a>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a
                        href="terms-and-conditions.php"
                        class="mobile-links__item-link"
                        >Terms And Conditions</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="faq.php" class="mobile-links__item-link">FAQ</a>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="components.php" class="mobile-links__item-link"
                        >Components</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="typography.php" class="mobile-links__item-link"
                        >Typography</a
                      >
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mobile-links__item" data-collapse-item>
              <div class="mobile-links__item-title">
                <a data-collapse-trigger class="mobile-links__item-link"
                  >Currency</a
                >
                <button
                  class="mobile-links__item-toggle"
                  type="button"
                  data-collapse-trigger
                >
                  <svg
                    class="mobile-links__item-arrow"
                    width="12px"
                    height="7px"
                  >
                    <use
                      xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                    ></use>
                  </svg>
                </button>
              </div>
              <div class="mobile-links__item-sub-links" data-collapse-content>
                <ul class="mobile-links mobile-links--level--1">
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link">??? Euro</a>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link"
                        >?? Pound Sterling</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link"
                        >$ US Dollar</a
                      >
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link"
                        >??? Russian Ruble</a
                      >
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mobile-links__item" data-collapse-item>
              <div class="mobile-links__item-title">
                <a data-collapse-trigger class="mobile-links__item-link"
                  >Language</a
                >
                <button
                  class="mobile-links__item-toggle"
                  type="button"
                  data-collapse-trigger
                >
                  <svg
                    class="mobile-links__item-arrow"
                    width="12px"
                    height="7px"
                  >
                    <use
                      xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                    ></use>
                  </svg>
                </button>
              </div>
              <div class="mobile-links__item-sub-links" data-collapse-content>
                <ul class="mobile-links mobile-links--level--1">
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link">English</a>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link">French</a>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link">German</a>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link">Russian</a>
                    </div>
                  </li>
                  <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                      <a href="#" class="mobile-links__item-link">Italian</a>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- mobilemenu / end --><!-- site -->
    <div class="site">
      <!-- mobile site__header -->
      <header class="site__header d-lg-none">
        <div class="mobile-header mobile-header--sticky mobile-header--stuck">
          <div class="mobile-header__panel">
            <div class="container">
              <div class="mobile-header__body">
                <button class="mobile-header__menu-button">
                  <svg width="18px" height="14px">
                    <use xlink:href="images/sprite.svg#menu-18x14"></use>
                  </svg>
                </button>
                <a class="mobile-header__logo" href="index.php"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="120px"
                    height="20px"
                  >
                    <path
                      d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z"
                    ></path></svg
                ></a>
                <div class="mobile-header__search">
                  <form class="mobile-header__search-form" action="#">
                    <input
                      class="mobile-header__search-input"
                      name="search"
                      placeholder="Search over 10,000 products"
                      aria-label="Site search"
                      type="text"
                      autocomplete="off"
                    />
                    <button
                      class="mobile-header__search-button mobile-header__search-button--submit"
                      type="submit"
                    >
                      <svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#search-20"></use>
                      </svg>
                    </button>
                    <button
                      class="mobile-header__search-button mobile-header__search-button--close"
                      type="button"
                    >
                      <svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#cross-20"></use>
                      </svg>
                    </button>
                    <div class="mobile-header__search-body"></div>
                  </form>
                </div>
                <div class="mobile-header__indicators">
                  <div
                    class="indicator indicator--mobile-search indicator--mobile d-sm-none"
                  >
                    <button class="indicator__button">
                      <span class="indicator__area"
                        ><svg width="20px" height="20px">
                          <use
                            xlink:href="images/sprite.svg#search-20"
                          ></use></svg
                      ></span>
                    </button>
                  </div>
                  <div class="indicator indicator--mobile d-sm-flex d-none">
                    <a href="wishlist.php" class="indicator__button"
                      ><span class="indicator__area"
                        ><svg width="20px" height="20px">
                          <use xlink:href="images/sprite.svg#heart-20"></use>
                        </svg>
                        <span class="indicator__value">0</span></span
                      ></a
                    >
                  </div>
                  <div class="indicator indicator--mobile">
                    <a href="cart.php" class="indicator__button"
                      ><span class="indicator__area"
                        ><svg width="20px" height="20px">
                          <use xlink:href="images/sprite.svg#cart-20"></use>
                        </svg>
                        <span class="indicator__value">3</span></span
                      ></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- mobile site__header / end --><!-- desktop site__header -->
      <header class="site__header d-lg-block d-none">
        <div class="site-header">
          <!-- .topbar -->
          <div class="site-header__topbar topbar">
            <div class="topbar__container container">
              <div class="topbar__row">
                <div class="topbar__item topbar__item--link">
                  <a class="topbar-link" href="about-us.php">About Us</a>
                </div>
                <div class="topbar__item topbar__item--link">
                  <a class="topbar-link" href="contact-us.php">Contact Us</a>
                </div>
                <div class="topbar__item topbar__item--link">
                  <a class="topbar-link" href="#">Store Location</a>
                </div>
                <div class="topbar__item topbar__item--link">
                  <a class="topbar-link" href="track-order.php">Track Order</a>
                </div>
                <div class="topbar__spring"></div>
                <div class="topbar__item">
                  <div class="topbar-dropdown">
                    <button class="topbar-dropdown__btn" type="button">
                      My Account
                      <svg width="7px" height="5px">
                        <use
                          xlink:href="images/sprite.svg#arrow-rounded-down-7x5"
                        ></use>
                      </svg>
                    </button>
                    <div class="topbar-dropdown__body">
                      <!-- .menu -->
                      <ul class="menu menu--layout--topbar">
                        <li><a href="account.php">Login</a></li>
                        <li><a href="account.php">Register</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Addresses</a></li>
                      </ul>
                      <!-- .menu / end -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .topbar / end -->
          <div class="site-header__middle container">
            <div class="site-header__logo">
              <a href="index.php"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="196px"
                  height="26px"
                >
                  <path
                    d="M194.797,18 L184,18 C184,18.552 183.552,19 183,19 L182,19 C181.448,19 181,18.552 181,18 L181,16 L178.377,16 C177.708,16 177.119,15.556 176.935,14.912 L173.246,2 L168,2 L168,4 L168.500,4 C169.328,4 170,4.672 170,5.500 L170,24.500 C170,25.328 169.328,26 168.500,26 L165.500,26 C164.672,26 164,25.328 164,24.500 L164,5.500 C164,4.672 164.672,4 165.500,4 L166,4 L166,1.500 C166,0.672 166.672,0 167.500,0 L173.622,0 C174.292,0 174.881,0.444 175.065,1.088 L178.754,14 L181,14 L181,13 C181,12.448 181.448,12 182,12 L183,12 C183.552,12 184,12.448 184,13 L194.797,13 C195.461,13 196,13.539 196,14.203 L196,16.797 C196,17.461 195.461,18 194.797,18 ZM156.783,26 L154.483,26 C153.767,26 153.129,25.552 152.884,24.878 L150.437,18.135 C150.407,18.054 150.331,18 150.245,18 L142.768,18 C142.682,18 142.606,18.054 142.576,18.135 L140.129,24.878 C139.884,25.552 139.245,26 138.530,26 L136.230,26 C135.395,26 134.815,25.169 135.100,24.383 L143.445,1.122 C143.690,0.448 144.328,0 145.044,0 L147.969,0 C148.685,0 149.323,0.448 149.568,1.122 L157.913,24.383 C158.198,25.169 157.618,26 156.783,26 ZM148.472,12.725 L146.698,7.848 C146.633,7.668 146.380,7.668 146.315,7.848 L144.541,12.725 C144.492,12.859 144.591,13 144.733,13 L148.280,13 C148.422,13 148.521,12.859 148.472,12.725 ZM130.493,26 L128.090,26 C127.555,26 127.060,25.714 126.792,25.250 L122.610,18 L120.003,22.520 L120.003,24.500 C120.003,25.328 119.333,26 118.505,26 L116.507,26 C115.680,26 115.009,25.328 115.009,24.500 L115.009,1.500 C115.009,0.672 115.680,0 116.507,0 L118.505,0 C119.333,0 120.003,0.672 120.003,1.500 L120.003,12.520 L126.792,0.750 C127.060,0.286 127.555,0 128.090,0 L130.493,0 C131.646,0 132.367,1.250 131.791,2.250 L125.487,13 L131.791,23.750 C132.367,24.750 131.646,26 130.493,26 ZM103.987,15.775 L103.987,24.500 C103.987,25.328 103.315,26 102.486,26 L100.485,26 C99.656,26 98.984,25.328 98.984,24.500 L98.984,15.775 L98.594,15.100 L91.180,2.250 C90.610,1.250 91.330,0 92.481,0 L94.792,0 C95.322,0 95.823,0.290 96.093,0.750 L101.486,10.090 L106.879,0.750 C107.149,0.290 107.649,0 108.179,0 L110.491,0 C111.641,0 112.362,1.250 111.791,2.250 L103.987,15.775 ZM79,26 C71.821,26 66,20.179 66,13 C66,5.820 71.821,-0.001 79,-0.001 C86.180,-0.001 92.001,5.820 92.001,13 C92.001,20.179 86.180,26 79,26 ZM79,5 C74.582,5 71,8.582 71,13 C71,17.418 74.582,21 79,21 C83.418,21 87,17.418 87,13 C87,8.582 83.418,5 79,5 ZM62.793,23.750 C63.362,24.750 62.643,26 61.494,26 L59.186,26 C58.656,26 58.157,25.710 57.887,25.250 L53.711,18 L49.005,18 L49.005,24.500 C49.005,25.330 48.335,26 47.506,26 L45.508,26 C44.679,26 44.009,25.330 44.009,24.500 L44.009,1.500 C44.009,0.670 44.679,0 45.508,0 L54,0 C58.966,0 62.992,4.030 62.992,9 C62.992,12.240 61.274,15.090 58.706,16.670 L62.793,23.750 ZM54,5 L50.004,5 C49.454,5 49.005,5.450 49.005,6 L49.005,12 C49.005,12.550 49.454,13 50.004,13 L54,13 C56.208,13 57.997,11.210 57.997,9 C57.997,6.790 56.208,5 54,5 ZM39.500,5 L33,5 L33,24.500 C33,25.328 32.328,26 31.500,26 L29.500,26 C28.672,26 28,25.328 28,24.500 L28,5 L21.500,5 C20.672,5 20,4.328 20,3.500 L20,1.500 C20,0.672 20.672,0 21.500,0 L39.500,0 C40.328,0 41,0.672 41,1.500 L41,3.500 C41,4.328 40.328,5 39.500,5 ZM16.487,8 L14.181,8 C13.565,8 13.040,7.611 12.790,7.048 C12.261,5.856 10.765,5 9,5 C6.793,5 5.005,6.340 5.005,8 C5.005,8.940 5.575,9.780 6.483,10.320 C6.706,10.455 6.948,10.574 7.206,10.673 C8.059,11 8.412,12.020 7.955,12.812 L6.948,14.558 C6.573,15.208 5.768,15.499 5.080,15.201 C3.872,14.679 2.815,13.924 1.989,13 C0.751,11.630 0.012,9.890 0.012,8 C0.012,3.580 4.037,0 9,0 C13.254,0 17.017,2.629 17.950,6.163 C18.196,7.095 17.450,8 16.487,8 ZM1.513,18 L3.820,18 C4.435,18 4.960,18.389 5.210,18.952 C5.739,20.144 7.236,21 9,21 C11.207,21 12.995,19.660 12.995,18 C12.995,17.060 12.426,16.220 11.517,15.680 C11.294,15.544 11.052,15.426 10.794,15.327 C9.941,14.999 9.588,13.980 10.045,13.188 L11.053,11.442 C11.427,10.792 12.233,10.501 12.920,10.799 C14.128,11.320 15.185,12.075 16.011,13 C17.249,14.370 17.988,16.110 17.988,18 C17.988,22.420 13.964,26 9,26 C4.747,26 0.983,23.371 0.050,19.837 C-0.196,18.905 0.550,18 1.513,18 Z"
                  ></path></svg
              ></a>
            </div>
            <div class="site-header__search">
              <div class="search">
                <form class="search__form" action="#">
                  <input
                    class="search__input"
                    name="search"
                    placeholder="Search over 10,000 products"
                    aria-label="Site search"
                    type="text"
                    autocomplete="off"
                  />
                  <button class="search__button" type="submit">
                    <svg width="20px" height="20px">
                      <use xlink:href="images/sprite.svg#search-20"></use>
                    </svg>
                  </button>
                  <div class="search__border"></div>
                </form>
              </div>
            </div>
            <div class="site-header__phone">
              <div class="site-header__phone-title">Customer Service</div>
              <div class="site-header__phone-number">+94 34 228 3030</div>
            </div>
          </div>
          <div class="site-header__nav-panel">
            <div class="nav-panel">
              <div class="nav-panel__container container">
                <div class="nav-panel__row">
                  <div class="nav-panel__departments">
                   <!-- .departments -->
                   <div class="departments" data-departments-fixed-by="">
                    <div class="departments__body">
                      <div class="departments__links-wrapper">
                        <ul class="departments__links">
                          <li class="departments__item">
                            <a href="SFruit.php"
                              >Fruits Nuts & Vegitable
                              <svg
                                class="departments__link-arrow"
                                width="6px"
                                height="9px"
                              >
                                <use
                                  xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                ></use></svg
                            ></a>
                            <div
                              class="departments__megamenu departments__megamenu--lg"
                            >
                              <!-- .megamenu -->
                              <div
                                class="megamenu megamenu--departments"
                                style="
                                  background-image: url('images/megamenu/megamenu-1.jpg');
                                "
                              >
                                <div class="row">
                                  <div class="col-4">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Fruits</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Mango</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Banana</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Orange</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Papaya</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Watermelon</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Avocado</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Grapes</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Vegitable</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Carrot</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Cabbage</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Leek</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Pumpkin</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Tomato</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Mushroom</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Eggplant</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-4">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Nuts</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Peanut</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Cowpea</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Green gram</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Buck-wheat</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Hazelnut</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Walnut</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- .megamenu / end -->
                            </div>
                          </li>
                          <li class="departments__item">
                            <a href="SSpice.php"
                              >Spices & Essential Oils
                              <svg
                                class="departments__link-arrow"
                                width="6px"
                                height="9px"
                              >
                                <use
                                  xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                ></use></svg
                            ></a>
                            <div
                              class="departments__megamenu departments__megamenu--nl"
                            >
                              <!-- .megamenu -->
                              <div
                                class="megamenu megamenu--departments"
                                style="
                                  background-image: url('images/megamenu/megamenu-2.jpg');
                                "
                              >
                                <div class="row">
                                  <div class="col-6">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Spices</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Cinnamon</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Pepper</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Pandam Leaves</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Cloves</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Cardamom</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Chilli</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Essential Oils</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Ginger Oil</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Clove Oil</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Cinnamon Oil</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Black Pepper Oil</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- .megamenu / end -->
                            </div>
                          </li>
                          <li class="departments__item">
                            <a href="SFood.php"
                              >Food Feed & Beverages
                              <svg
                                class="departments__link-arrow"
                                width="6px"
                                height="9px"
                              >
                                <use
                                  xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                ></use></svg
                            ></a>
                            <div
                              class="departments__megamenu departments__megamenu--nl"
                            >
                              <!-- .megamenu -->
                              <div
                                class="megamenu megamenu--departments"
                                style="
                                  background-image: url('images/megamenu/megamenu-3.jpg');
                                "
                              >
                                <div class="row">
                                  <div class="col-6">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Food</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Biscuts</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Noodles</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Souce</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Fresh Milk</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Soya Meat</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Salt</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Feed</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Soya Bean Meal</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Poonac</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Maize</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Feed Oil</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-6">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Beverages</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Tea</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Soft Drink</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Food Drink</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Fruit Drink</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- .megamenu / end -->
                            </div>
                          </li>
                          <li class="departments__item">
                            <a href="SApperal.php"
                              >Apperal & Textile
                              <svg
                                class="departments__link-arrow"
                                width="6px"
                                height="9px"
                              >
                                <use
                                  xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                ></use></svg
                            ></a>
                            <div
                              class="departments__megamenu departments__megamenu--nl"
                            >
                              <!-- .megamenu -->
                              <div
                                class="megamenu megamenu--departments"
                                style="
                                  background-image: url('images/megamenu/megamenu-4.jpg');
                                "
                              >
                                <div class="row">
                                  <div class="col-6">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Infant</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Casual T-Shirts</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Casual Short</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Printed Dress</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Baby Shoes</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Baby hats</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Baby Panty</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Men</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">T-Shirts</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Shirts</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Pants</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Shorts</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-6">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Women</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Tops</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Skirts</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Blouses</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Frocks</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Party Wear</a>
                                          </li>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- .megamenu / end -->
                            </div>
                          </li>
                          <li class="departments__item">
                            <a href="SGems.php"
                              >Gems Diamond & Jewellery

                              <svg
                                class="departments__link-arrow"
                                width="6px"
                                height="9px"
                              >
                                <use
                                  xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                ></use></svg
                            ></a>
                            <div
                              class="departments__megamenu departments__megamenu--nl"
                            >
                              <!-- .megamenu -->
                              <div
                                class="megamenu megamenu--departments"
                                style="
                                  background-image: url('images/megamenu/megamenu-5.jpg');
                                "
                              >
                                <div class="row">
                                  <div class="col-6">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Gems</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Ruby</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Garnet</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Sapphire</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Aquamarine</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Cymophane</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Alexandrite</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Diamond</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">1 Carat</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">0.75 Carat</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">0.5 Carat</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">0.25 Carat</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">0.1 Carat</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-6">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Jewellery</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Rings</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Bangles</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Earrings</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Chains</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- .megamenu / end -->
                            </div>
                          </li>
                          <li class="departments__item">
                            <a href="SCoconut.php"
                              >Coconut & Coconut Based Product
                              <svg
                                class="departments__link-arrow"
                                width="6px"
                                height="9px"
                              >
                                <use
                                  xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                ></use></svg
                            ></a>
                            <div
                              class="departments__megamenu departments__megamenu--sm"
                            >
                              <!-- .megamenu -->
                              <div class="megamenu megamenu--departments">
                                <div class="row">
                                  <div class="col-12">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Coconut</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Coconut</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">King Coconut</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Coconut Milk Powder</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Coconut Milk</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Coconut Water</a>
                                          </li>
                                        </ul>
                                      </li>
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Other Product</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Coconut butter</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Coconut Flour</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Coconut Sugar</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Vinegar</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- .megamenu / end -->
                            </div>
                          </li>
                          <li class="departments__item">
                            <a href="SHand.php"
                              >HandCraft
                              <svg
                                class="departments__link-arrow"
                                width="6px"
                                height="9px"
                              >
                                <use
                                  xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                ></use></svg
                            ></a>
                            <div
                              class="departments__megamenu departments__megamenu--sm"
                            >
                              <!-- .megamenu -->
                              <div class="megamenu megamenu--departments">
                                <div class="row">
                                  <div class="col-12">
                                    <ul
                                      class="megamenu__links megamenu__links--level--0"
                                    >
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Wood</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Wood Carving Designs</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Wood Based Toys</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Arts & Crafts</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Coconut Wood Items</a>
                                          </li>                         
                                        </ul>
                                      </li>
                                      <li
                                        class="megamenu__item megamenu__item--with-submenu"
                                      >
                                        <a href="#">Other</a>
                                        <ul
                                          class="megamenu__links megamenu__links--level--1"
                                        >
                                          <li class="megamenu__item">
                                            <a href="#">Masks</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Batik</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Lacquer Work</a>
                                          </li>
                                          <li class="megamenu__item">
                                            <a href="#">Beeralu Lace</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- .megamenu / end -->
                            </div>
                          </li>
                          <li
                            class="departments__item departments__item--menu"
                          >
                            <a href="SOther.php"
                              >Other
                              <svg
                                class="departments__link-arrow"
                                width="6px"
                                height="9px"
                              >
                                <use
                                  xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                ></use></svg
                            ></a>
                            <div class="departments__menu">
                              <!-- .menu -->
                              <ul class="menu menu--layout--classic">
                                <li><a href="#">Ruber & Rubber Based Products</a></li>
                                <li><a href="#">Ayurwedic & Herbaal Products</a></li>
                                <li><a href="#">Chemicals & Plastic Products</a></li>
                                <li><a href="#">Flowers & Foliage</a></li>
                                <li><a href="#">Electric & Electric Products</a></li>
                                <li><a href="#">Leather Products</a></li>
                                <li><a href="#">Organic products</a></li>
                              </ul>
                              <!-- .menu / end -->
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <button class="departments__button">
                      <svg
                        class="departments__button-icon"
                        width="18px"
                        height="14px"
                      >
                        <use xlink:href="images/sprite.svg#menu-18x14"></use>
                      </svg>
                      Shop By Category
                      <svg
                        class="departments__button-arrow"
                        width="9px"
                        height="6px"
                      >
                        <use
                          xlink:href="images/sprite.svg#arrow-rounded-down-9x6"
                        ></use>
                      </svg>
                    </button>
                  </div>
                  <!-- .departments / end -->
                  </div>
                  <!-- .nav-links -->
                  <div class="nav-panel__nav-links nav-links">
                    <ul class="nav-links__list">
                      <li class="nav-links__item nav-links__item--with-submenu">
                        <a href="index.php"><span>Home </span></a>
                        <div class="nav-links__menu"></div>
                      </li>

                      <li class="nav-links__item nav-links__item--with-submenu">
                        <a href="#"
                          ><span
                            >Seller
                            <svg
                              class="nav-links__arrow"
                              width="9px"
                              height="6px"
                            >
                              <use
                                xlink:href="images/sprite.svg#arrow-rounded-down-9x6"
                              ></use></svg></span
                        ></a>
                        <div class="nav-links__menu">
                          <!-- .menu -->
                          <ul class="menu menu--layout--classic">
                            <li>
                              <a href="SFruit.php"
                                >Fruits Nuts & Vegitable</a
                              >
                            </li>
                            <li>
                              <a href="SSpice.php"
                                >Spices & Essential Oils</a
                              >
                            </li>
                            <li>
                              <a href="SFood.php"
                                >Food Feed & Beverages</a
                              >
                            </li>
                            <li>
                              <a href="SApperal.php"
                                >Apperal & Textile</a
                              >
                            </li>
                            <li>
                              <a href="SGems.php"> Gems Diamond & Jewellery</a>
                            </li>
                            <li>
                              <a href="SCoconut.php"
                                >Coconut & Coconut Based Product</a
                              >
                            </li>
                            <li><a href="SHand.php">HandCraft</a></li>
                            <li><a href="SOther.php">Other</a></li>
                          </ul>
                          <!-- .menu / end -->
                        </div>
                      </li>
                      <li class="nav-links__item nav-links__item--with-submenu">
                        <a href="#"
                          ><span
                            >Buyer
                            <svg
                              class="nav-links__arrow"
                              width="9px"
                              height="6px"
                            >
                              <use
                                xlink:href="images/sprite.svg#arrow-rounded-down-9x6"
                              ></use></svg></span
                        ></a>
                        <div class="nav-links__menu">
                          <!-- .menu -->
                          <ul class="menu menu--layout--classic">
                            <li>
                              <a href="BFruit.php"
                                >Fruits Nuts & Vegitable</a
                              >
                            </li>
                            <li>
                              <a href="BSpice.php"
                                >Spices & Essential Oils</a
                              >
                            </li>
                            <li>
                              <a href="BFood.php"
                                >Food Feed & Beverages</a
                              >
                            </li>
                           
                            <li>
                              <a href="BApperal.php"
                                >Apperal & Textile</a
                              >
                            </li>
                            <li>
                              <a href="BGems.php"> Gems Diamond & Jewellery</a>
                            </li>
                            <li>
                              <a href="BCoconut.php"
                                >Coconut & Coconut Based Product</a
                              >
                            </li>
                            <li><a href="BHand.php">HandCraft</a></li>
                            <li><a href="BOther.php">Other</a></li>
                          </ul>
                          <!-- .menu / end -->
                        </div>
                      </li>
                      <li class="nav-links__item nav-links__item--with-submenu">
                        <a href="#"
                          ><span
                            >Service
                            <svg
                              class="nav-links__arrow"
                              width="9px"
                              height="6px"
                            >
                              <use
                                xlink:href="images/sprite.svg#arrow-rounded-down-9x6"
                              ></use></svg></span
                        ></a>
                        <div class="nav-links__menu">
                          <!-- .menu -->
                          <ul class="menu menu--layout--classic">
                            <li><a href="consult.php">Consultant</a></li>
                            <li><a href="ship.php">Shipping</a></li>
                            <li>
                              <a href="pack.php">Packing</a>
                            </li>
                          </ul>
                          <!-- .menu / end -->
                        </div>
                      </li>
                      <li class="nav-links__item">
                        <a href="contact-us.php"><span>Contact Us</span></a>
                      </li>
                      <li class="nav-links__item">
                        <a href="About-us.php"><span>About Us</span></a>
                      </li>
                    </ul>
                  </div>
                 
                  <!-- .nav-links / end -->
                 <!-- .post button -->

                 <div class="nav-panel__indicators">
                  
                  <a href="Buyer-post.php" class="indicator__button"
                    ><button >
                     <b>+</b> Add Post
                       </button></a>                    
              </div>
                <!-- .post button /end-->
                </div>
          </div>
        </div>
      </div>
    </div>
      </header>
       <!-- desktop site__header / end --><!-- site__body -->
       <div class="site__body">
        <div class="page-header">
          <div class="page-header__container container">
            <div class="page-header__breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                      <use
                        xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                      ></use>
                    </svg>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#">Fruits Nuts & Vegitable</a>
                    
                  </li>
                 
                </ol>
              </nav>
            </div>
          </div>
        </div>
      <!-- desktop site__header / end --><!-- site__body -->
      <div class="site__body">
        <div class="container">
          <div class="shop-layout shop-layout--sidebar--start">
            <div class="shop-layout__sidebar">
              <div class="block block-sidebar">
                <div class="block-sidebar__item">
                  <div
                    class="widget-filters widget"
                    data-collapse
                    data-collapse-opened-class="filter--opened"
                  >
                    <h4 class="widget__title">Fruits Nuts & Vegitable</h4>
                    <div class="widget-filters__list">
                      <div class="widget-filters__item">
                        <div class="filter filter--opened" data-collapse-item>
                          <button
                            type="button"
                            class="filter__title"
                            data-collapse-trigger
                          >
                            Fruits
                            <svg
                              class="filter__arrow"
                              width="12px"
                              height="7px"
                            >
                              <use
                                xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                              ></use>
                            </svg>
                          </button>
                          <div class="filter__body" data-collapse-content>
                            <div class="filter__container">
                              <div class="filter-categories">
                                <ul class="filter-categories__list">
                                 
                                  
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  > <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Mango</a>
                                  
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  > <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Banana</a>
                                   
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  > <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Orange</a>
                                   
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  > <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Papaya</a>
                                    
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >
                                   <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Watermelon</a>
                                    
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >
                                  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Avacado</a>
                                   
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Grapes</a>
                                   
                                  </li>
                                 
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="filter filter--opened" data-collapse-item>
                          <button
                            type="button"
                            class="filter__title"
                            data-collapse-trigger
                          >
                            Vegitable
                            <svg
                              class="filter__arrow"
                              width="12px"
                              height="7px"
                            >
                              <use
                                xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                              ></use>
                            </svg>
                          </button>
                          <div class="filter__body" data-collapse-content>
                            <div class="filter__container">
                              <div class="filter-categories">
                                <ul class="filter-categories__list">
                                 
                                  
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Carrot</a>
                                  
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Cabbage</a>
                                   
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Leek</a>
                                   
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Pumpkin</a>
                                    
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Tomato</a>
                                    
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Mushroom</a>
                                   
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Eggplant</a>
                                   
                                  </li>
                                 
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="filter filter--opened" data-collapse-item>
                          <button
                            type="button"
                            class="filter__title"
                            data-collapse-trigger
                          >
                            Nuts
                            <svg
                              class="filter__arrow"
                              width="12px"
                              height="7px"
                            >
                              <use
                                xlink:href="images/sprite.svg#arrow-rounded-down-12x7"
                              ></use>
                            </svg>
                          </button>
                          <div class="filter__body" data-collapse-content>
                            <div class="filter__container">
                              <div class="filter-categories">
                                <ul class="filter-categories__list">
                                 
                                  
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >
                                  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Peanut</a>
                                  
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Cowpea</a>
                                   
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Green gram</a>
                                   
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Buck-wheat</a>
                                    
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Hazelnut</a>
                                    
                                  </li>
                                  <li
                                    class="filter-categories__item filter-categories__item--child"
                                  >  <svg
                                  class="filter-categories__arrow"
                                  width="6px"
                                  height="9px"
                                >
                                  <use
                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"
                                  ></use>
                                </svg>
                                    <a href="#">Walnut</a>
                                   
                                  </li>
                               
                              </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-sidebar__item d-none d-lg-block">
                  <div class="widget-products widget">
                    <h4 class="widget__title">Latest Products</h4>
                    <div class="widget-products__list">
                      <div class="widget-products__item">
                        <div class="widget-products__image">
                          <a href="product.php"
                            ><img src="images/products/product-16.jpg" alt=""
                          /></a>
                        </div>
                        <div class="widget-products__info">
                          <div class="widget-products__name">
                            <a href="product.php"
                              >Fresh mango</a
                            >
                          </div>
                          <div class="widget-products__prices">$749.00</div>
                        </div>
                      </div>
                      <div class="widget-products__item">
                        <div class="widget-products__image">
                          <a href="product.php"
                            ><img src="images/products/product-2.jpg" alt=""
                          /></a>
                        </div>
                        <div class="widget-products__info">
                          <div class="widget-products__name">
                            <a href="product.php"
                              >Cashew Nuts</a
                            >
                          </div>
                          <div class="widget-products__prices">$1,019.00</div>
                        </div>
                      </div>
                      <div class="widget-products__item">
                        <div class="widget-products__image">
                          <a href="product.php"
                            ><img src="images/products/product-3.jpg" alt=""
                          /></a>
                        </div>
                        <div class="widget-products__info">
                          <div class="widget-products__name">
                            <a href="product.php"
                              >Cucumber</a
                            >
                          </div>
                          <div class="widget-products__prices">$850.00</div>
                        </div>
                      </div>
                      <div class="widget-products__item">
                        <div class="widget-products__image">
                          <a href="product.php"
                            ><img src="images/products/product-4.jpg" alt=""
                          /></a>
                        </div>
                        <div class="widget-products__info">
                          <div class="widget-products__name">
                            <a href="product.php"
                              >Java Apple</a
                            >
                          </div>
                          <div class="widget-products__prices">
                            <span class="widget-products__new-price"
                              >$949.00</span
                            >
                            <span class="widget-products__old-price"
                              >$1189.00</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="widget-products__item">
                        <div class="widget-products__image">
                          <a href="product.php"
                            ><img src="images/products/product-5.jpg" alt=""
                          /></a>
                        </div>
                        <div class="widget-products__info">
                          <div class="widget-products__name">
                            <a href="product.php"
                              >Pineapple</a
                            >
                          </div>
                          <div class="widget-products__prices">$1,700.00</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="shop-layout__content">
              <div class="block">
                <div class="products-view">
                  <div class="products-view__options">
                    <div class="view-options">
                      <div class="view-options__layout">
                        <div class="layout-switcher">
                          <div class="layout-switcher__list">

                            <a href="SFruit.php">
                            <button
                              type="button"
                              class="layout-switcher__button"
                            >
                           
                             SELLER
                            </button></a>
                            <button
                              data-layout="list"
                              data-with-features="false"
                              title="List"
                              type="button"
                              class="layout-switcher__button--active"
                            >
                              BUYER
                            </button>
                          </div>
                        </div>
                      </div>
                     
                    <div class="view-options__divider"></div>
                     
                    </div>
                  </div>
                  <div
                    class="products-view__list products-list"
                    data-layout="list"
                    data-with-features="false"
                   >
                    <div class="products-list__body">
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Cavendish Banana </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: United Arab Emirates</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty:10 carton/1 month</h6>
                            <p>Please quote for the following wholesale product requirement - Product Name: Cavendish Banana Packaging Terms : 13 Kg. Box Quantity Required : 3 Forty-Foot Container Shipping Terms : CIF Sea Cargo & Sea Freight Destination Port : Jebel Ali Dubai, United Arab Emirates Payment Terms : To be discussed with suppliers Looking for suppliers from : Philippines, Thailand, Cambodia Contact : Annie</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Fresh Carrots </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: Indonesia</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty: 100 carton/1 month</h6>
                            <p>Buyer is interested to receive quotations for the following RFQ - Product Name: Clean Fresh Carrots Quantity Required : 100 Metric Ton/Metric Tons Shipping Terms : CNF Destination Port : Busan/Incheon, South Korea (Republic Of Korea) Payment Terms : L/C Looking for suppliers from : Worldwide Contact : Harry Kim</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Grape Skins & Seeds </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: Oman</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty: 50 carton/1 month</h6>
                            <p>Please quote for the following wholesale product requirement - Product Name: Grape Skins And Seeds Quantity Required : MOQ Shipping Terms : CIF Destination Port : Georgia Payment Terms : To be discussed with suppliers Looking for suppliers from : Worldwide Contact : Luka Babiri</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Fresh Cabbage </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: Ankara, Turkey</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty: 20 carton/1 month</h6>
                            <p>The buyer would like to receive quotations for - Product Name: Fresh Cabbage Quantity Required : 100 Ton/Tons(sample) Shipping Terms : CIF Destination Port : Ukraine Payment Terms : To be discussed with suppliers Looking for suppliers from : Europe Contact : Yana Bieliavska</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Cashew Nuts </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: Australia</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty: 10 carton/1 month</h6>
                            <p>Please quote for the following wholesale product requirement - Product Name: Cashew Nuts Specifications : WS320 Packaging Terms : 10kg In Tin Packing Container Load Quantity Required : 1 Twenty-Foot Container Shipping Terms : CIF Destination Port : United Kingdom Payment Terms : L/C Or T/T Looking for suppliers from : Worldwide Contact : Navtej S Mudher</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Cavendish Banana </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: United Arab Emirates</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty:10 carton/1 month</h6>
                            <p>Please quote for the following wholesale product requirement - Product Name: Cavendish Banana Packaging Terms : 13 Kg. Box Quantity Required : 3 Forty-Foot Container Shipping Terms : CIF Sea Cargo & Sea Freight Destination Port : Jebel Ali Dubai, United Arab Emirates Payment Terms : To be discussed with suppliers Looking for suppliers from : Philippines, Thailand, Cambodia Contact : Annie</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Fresh Carrots </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: Indonesia</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty: 100 carton/1 month</h6>
                            <p>Buyer is interested to receive quotations for the following RFQ - Product Name: Clean Fresh Carrots Quantity Required : 100 Metric Ton/Metric Tons Shipping Terms : CNF Destination Port : Busan/Incheon, South Korea (Republic Of Korea) Payment Terms : L/C Looking for suppliers from : Worldwide Contact : Harry Kim</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Grape Skins & Seeds </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: Oman</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty: 50 carton/1 month</h6>
                            <p>Please quote for the following wholesale product requirement - Product Name: Grape Skins And Seeds Quantity Required : MOQ Shipping Terms : CIF Destination Port : Georgia Payment Terms : To be discussed with suppliers Looking for suppliers from : Worldwide Contact : Luka Babiri</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Fresh Cabbage </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: Ankara, Turkey</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty: 20 carton/1 month</h6>
                            <p>The buyer would like to receive quotations for - Product Name: Fresh Cabbage Quantity Required : 100 Ton/Tons(sample) Shipping Terms : CIF Destination Port : Ukraine Payment Terms : To be discussed with suppliers Looking for suppliers from : Europe Contact : Yana Bieliavska</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="products-list__item">
                        <div class="product-card">
                          <button class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                              <use
                                xlink:href="images/sprite.svg#quickview-16"
                              ></use>
                            </svg>
                            <span class="fake-svg-icon"></span>
                          </button>
                          <div class="product-card__badges-list">
                            
                          </div>
                          
                          <div class="product-card__info">
                            <div class="product-card__name">
                              <a href="product.php"
                                ><h3><span style="color:red;">Wanted:</span> Cashew Nuts </h3>

                                </a>
                              
                            </div>
                            
                          
                            <h6>Country: Australia</h6>
                           
                            <h6>Payment Method: FOB</h6>
                            <h6>Qty: 10 carton/1 month</h6>
                            <p>Please quote for the following wholesale product requirement - Product Name: Cashew Nuts Specifications : WS320 Packaging Terms : 10kg In Tin Packing Container Load Quantity Required : 1 Twenty-Foot Container Shipping Terms : CIF Destination Port : United Kingdom Payment Terms : L/C Or T/T Looking for suppliers from : Worldwide Contact : Navtej S Mudher</p>
                          </div>

                          
                          <div class="product-card__actions">
                            
                            
                            <div class="product-card__buttons">
                          
                                 <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                            Send Quotation</a>
                              </button>
                              <button
                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                type="button"
                              ><a href="quotation.php" class="indicator__button">
                           Contact Buyer</a>
                              </button>
                           
                                                          
                                
                                
                              </button>
                              
                                
                                <span
                                  class="fake-svg-icon fake-svg-icon--compare-16"
                                ></span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                  <div class="products-view__pagination">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a
                          class="page-link page-link--with-arrow"
                          href="#"
                          aria-label="Previous"
                          ><svg
                            class="page-link__arrow page-link__arrow--left"
                            aria-hidden="true"
                            width="8px"
                            height="13px"
                          >
                            <use
                              xlink:href="images/sprite.svg#arrow-rounded-left-8x13"
                            ></use></svg
                        ></a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#"
                          >2 <span class="sr-only">(current)</span></a
                        >
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a
                          class="page-link page-link--with-arrow"
                          href="#"
                          aria-label="Next"
                          ><svg
                            class="page-link__arrow page-link__arrow--right"
                            aria-hidden="true"
                            width="8px"
                            height="13px"
                          >
                            <use
                              xlink:href="images/sprite.svg#arrow-rounded-right-8x13"
                            ></use></svg
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- site__body / end --><!-- site__footer -->
       <footer class="site__footer">
        <div class="site-footer">
          <div class="container">
            <div class="site-footer__widgets">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="site-footer__widget footer-contacts">
                    <h5 class="footer-contacts__title">Contact Us</h5>
                    
                    <ul class="footer-contacts__contacts">
                      <li>
                        <i
                          class="footer-contacts__icon fas fa-globe-americas"
                        ></i>
                        No.120,Colombo 06, Srilanka
                      </li>
                      <li>
                        <i class="footer-contacts__icon far fa-envelope"></i>
                        Exporter@gmail.com
                      </li>
                      <li>
                        <i class="footer-contacts__icon fas fa-mobile-alt"></i>
                        +94 34 228 3030
                      </li>
                     
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                  <div class="site-footer__widget footer-links">
                    <h5 class="footer-links__title">Information</h5>
                    <ul class="footer-links__list">
                      <li class="footer-links__item">
                        <a href="#" class="footer-links__link">About Us</a>
                      </li>
                      
                      <li class="footer-links__item">
                        <a href="#" class="footer-links__link"
                          >Privacy Policy</a
                        >
                      
                      <li class="footer-links__item">
                        <a href="#" class="footer-links__link">Contact Us</a>
                      </li>
                      
                      <li class="footer-links__item">
                        <a href="#" class="footer-links__link">Terms & Condition</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                  <div class="site-footer__widget footer-links">
                    <h5 class="footer-links__title">My Account</h5>
                    <ul class="footer-links__list">
                      <li class="footer-links__item">
                        <a href="#" class="footer-links__link"
                          >Store Location</a
                        >
                      </li>
                      <li class="footer-links__item">
                        <a href="#" class="footer-links__link">Order History</a>
                      </li>
                      <li class="footer-links__item">
                        <a href="#" class="footer-links__link">Wish List</a>
                      </li>
                      
                      <li class="footer-links__item">
                        <a href="#" class="footer-links__link">Specials</a>
                      </li>
                     
                     
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                  <div class="site-footer__widget footer-newsletter">
                    <h5 class="footer-newsletter__title">Follow Us</h5>
                    
                    <div
                      class="footer-newsletter__text footer-newsletter__text--social"
                    >
                      Follow us on social networks
                    </div>
                    <ul class="footer-newsletter__social-links">
                      <li
                        class="footer-newsletter__social-link footer-newsletter__social-link--facebook"
                      >
                        <a
                          href="https://themeforest.net/user/kos9"
                          target="_blank"
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                      </li>
                      <li
                        class="footer-newsletter__social-link footer-newsletter__social-link--twitter"
                      >
                        <a
                          href="https://themeforest.net/user/kos9"
                          target="_blank"
                          ><i class="fab fa-twitter"></i
                        ></a>
                      </li>
                      <li
                        class="footer-newsletter__social-link footer-newsletter__social-link--youtube"
                      >
                        <a
                          href="https://themeforest.net/user/kos9"
                          target="_blank"
                          ><i class="fab fa-youtube"></i
                        ></a>
                      </li>
                      <li
                        class="footer-newsletter__social-link footer-newsletter__social-link--instagram"
                      >
                        <a
                          href="https://themeforest.net/user/kos9"
                          target="_blank"
                          ><i class="fab fa-instagram"></i
                        ></a>
                      </li>
                      <li
                        class="footer-newsletter__social-link footer-newsletter__social-link--rss"
                      >
                        <a
                          href="https://themeforest.net/user/kos9"
                          target="_blank"
                          ><i class="fas fa-rss"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-footer__bottom">
              <div class="site-footer__copyright">
                <a target="_blank" href="#"
                  >Exporter.com</a
                >
              </div>
              <div class="site-footer__payments">
                <img src="images/payments.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- site__footer / end -->
    </div>
    <!-- site / end -->
  </body>
</html>
