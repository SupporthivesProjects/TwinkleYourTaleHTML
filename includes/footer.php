
<footer class="footer">
    <div class="container p-0">
        <div class="col">
            <div class="d-block d-md-block d-lg-none">
                <div class="logo-footer">
                    <img src="img/f-brand.svg"  srcset="img/f-brand.svg" class="img-fluid">
                    <p>
                        Illustrated storybooks written around one child, and kept in their library.
                    </p>
                </div>
            </div>
            <div class="row row-border-one">
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="footer-nav-link">
                        <h5>EXPLORE</h5>
                        <ul>
                            <li>
                                <a href="#">Stories</a>
                            </li>
                            <li>
                                <a href="#">Create a story</a>
                            </li>
                            <li>
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="#">How it works</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="footer-nav-link">
                        <h5>COMPANY</h5>
                        <ul>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Contact us</a>
                            </li>
                            <li>
                                <a href="#">FAQs</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="footer-nav-link">
                        <h5>ACCOUNT</h5>
                        <ul>
                            <li>
                                <a href="#">Log in</a>
                            </li>
                            <li>
                                <a href="#">Sign up</a>
                            </li>
                            <li>
                                <a href="#">Your library</a>
                            </li>
                            <li>
                                <a href="#">Your downloads</a>
                            </li>
                        </ul>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 col-sm-6 col-6 d-flex d-lg-none d-md-flex">
                    <div class="footer-nav-link">
                        <h5>FIND US</h5>
                        <ul>
                            <li>
                                <a href="">Twinkle Your Tale</a>
                            </li>
                            <li>
                                <a href="">123 Somewhere Street</a>
                            </li>
                            <li>
                                <a href="">City, ABC 123</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row row-border-two">
                <div class="col-lg-7 col-sm-12 col-12 col-md-6">
                    <div class="logo-footer d-lg-block d-md-none d-none">
                        <img src="img/f-brand.svg"  srcset="img/f-brand.svg" class="img-fluid">
                        <p>
                            Illustrated storybooks written around one child, and kept in their library.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 col-12 col-md-6">
                    <div class="find-addres-d">
                        <div class="footer-nav-link d-none d-lg-block d-md-none">
                            <h5>FIND US</h5>
                            <ul>
                                <li>
                                    <a href="">Twinkle Your Tale</a>
                                </li>
                                <li>
                                    <a href="">123 Somewhere Street</a>
                                </li>
                                <li>
                                    <a href="">City, ABC 123</a>
                                </li>
                            </ul>
                        </div>
                         <div class="footer-nav-link">
                            <h5>WE ACCEPT</h5>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="img/visa.svg" alt="" class="img-fluid" srcset="img/visa.svg">
                                    </a>
                                    <a href="">
                                        <img src="img/mastercard.svg" alt="" class="img-fluid" srcset="img/mastercard.svg">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row row-border-three">
                    <div class="col-lg-7 col-sm-12 col-12 col-md-6 order-lg-0 order-1 p-0">
                        <p>© 2026 Twinkle Your Tale. All rights reserved.</p>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-12 col-md-6 p-0">
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</footer>
</div>
    <script src="uiframe/js/jquery.min.js"></script>
    <script src="uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="uiframe/js/popper.min.js"></script>
    <script src="uiframe/js/slick.js"></script>
    <script src="uiframe/js/owl.carousel.js"></script>
    <script src="uiframe/js/swiper-bundle.min.js"></script>
    <script src="uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="uiframe/js/aos.js"></script>
    <script src="./uiframe/js/home-js.js"></script>
    <!-- Motion -->
    <script>
      $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $("header").toggleClass("header-is-active");

              let logo = $("#logo");
              if (logo.attr("src") === "./img/m-logo.svg") {
                  logo.attr("src", "./img/c-logo.svg");
              } else {
                  logo.attr("src", "./img/m-logo.svg");
              }
          });
      });
    </script>
    <script>
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
     <script>
        const dropdownBtns = document.querySelectorAll(
            '.dropdown-toggle-cur, .dropdown-toggle-cart'
        );

        function updateOverlay() {
            const anyOpen =
                document.querySelector('.dropdown-menu.show') !== null;

            document.body.classList.toggle('dropdown-open', anyOpen);
        }

        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                setTimeout(updateOverlay, 50);
            });
        });

        document.addEventListener('click', () => {
            setTimeout(updateOverlay, 50);
        });
    </script>

    <script>
      AOS.init();
    </script>
</body>
</html>
  