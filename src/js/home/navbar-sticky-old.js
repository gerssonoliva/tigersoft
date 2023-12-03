
    /* navbar-fixed */
    /**
     * [data-navbar="navbar-fixed"]: required
     * [data-media="PROPERTY"] :  [md-up, sm-up OR number ]  : optionan
     */
    (function (document) {

      var navbar = document.querySelector("[data-navbar=\"sticky\"]");

      if (navbar) {

        // var sticky = navbar.offsetTop;



        function stickyScroll() {

          let _navbar_ = navbar.querySelector('.navbar');
          let nav_clientHeight = _navbar_.clientHeight; // height navbar
          // let parent_nav =  navbar.parentNode; // Returns the Document node
          // console.log(nav_clientHeight);

          pageOffSet = window.pageYOffset;
          var sticky = navbar.offsetTop + (nav_clientHeight * 2.5);

          console.log(pageOffSet, sticky, nav_clientHeight);

          // if (window.pageYOffset > sticky) {
          if (pageOffSet > sticky) {

            var is_sticky = navbar.classList.contains('sticky');

            // only sticky
            if (!is_sticky) {
              navbar.classList.add("sticky");
              // parent_nav.style.marginTop  = nav_clientHeight+"px"
              // document.body.style.paddingTop  = nav_clientHeight+"px";
            }

          } else {
            navbar.classList.remove("sticky");
            // parent_nav.style.marginTop  = "0" ;
            // document.body.style.paddingTop  = 0;

          }
        }

        window.onscroll = function () {
          stickyScroll()
        };

        stickyScroll();

      }


    })(document);
