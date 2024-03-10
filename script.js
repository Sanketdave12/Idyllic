document.addEventListener("DOMContentLoaded", function () {
  // variable declaration
  let checkPopup = document.cookie.split("=")[1]; // get the value from the saved cookie

  // Flag for site overview popup
  // if it will find cookie value then it will not run
  if (!checkPopup) {
    setTimeout(function () {
      $(".homepage").addClass("overflow-hidden");
      $(".homepage .popup").removeClass("d-none");
    }, 2000);
    // popup will show up after 2 seconds
  }

  // Homepage Slider
  const slider = function () {
    // variable initialization
    let curSlide = 0;
    const maxSlide = $(".slider").length; //get the total number of slides

    // this function will help us to move the slide
    const goToSlide = function (slide) {
      $(".slider").each((i, s) => {
        $(s).css("transform", `translateX(${100 * (i - slide)}%)`);
      });
    };

    // Next slide
    const nextSlide = function () {
      if (curSlide === maxSlide - 1) {
        curSlide = 0;
      } else {
        curSlide++;
      }
      goToSlide(curSlide);
    };

    // Prev slide
    const prevSlide = function () {
      if (curSlide === 0) {
        curSlide = maxSlide - 1;
      } else {
        curSlide--;
      }
      goToSlide(curSlide);
    };
    const init = function () {
      goToSlide(0);
    };
    init(); //initialization

    // click events on next/prev buttons to make slider work,
    $(".nextbtn").click(nextSlide);
    $(".prevbtn").click(prevSlide);

    // you can move the slider by arrow as well
    $(document).keydown(function (e) {
      if (e.key === "ArrowLeft") prevSlide();
      e.key === "ArrowRight" && nextSlide();
    });
  };
  slider();



  //Popup
  // on the click on More details button the popup will show up
  $(".pdp").on("click", function () {
    // add classes to make popup function
    $("body").addClass("overflow-hidden");
    $(".popup").removeClass("d-none");

    // grab data from the clicked button's Card
    let title = $(this).siblings(".title").text().trim();
    let cat = $(this).siblings(".category").text().trim();
    let imgSrc = $(this).closest(".bottom").siblings("img").attr("src");
    let desc =
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempore minus soluta consequuntur odit harum consectetur placeat voluptatum adipisci exercitationem temporibus, impedit pariatur, iure aliquam quia repudiandae, similique eaque molestiae iste eum officia fuga ad. Pariatur eos alias provident reprehenderit, temporibus fugiat quos, sint in aut unde consectetur veniam delectus!";

    //Put the data into popup
    $(".poptitle").text(title);
    $(".popcat").text(cat);
    $(".description").text(desc);
    $(".popupImg").attr("src", imgSrc);
  });

  // this function will close the popup
  const closePopup = () => {
    $(".popup").addClass("d-none");
    $("body").removeClass("overflow-hidden");
  };

  // this function will set the coolie which will expire after 1 hour
  const setCookie = () => {
    document.cookie = "closed=true; max-age=3600 ";
  };

  // to close the popup
  $(".close").on("click", function () {
    closePopup();
    setCookie();
  });

 
});
// your_existing_script.js

// ... your existing code ...



