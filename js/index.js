(function() {

        $('.resume-image').click(function() {
          $(".resume-details").hide();
          $(".resume-image").removeClass('resume-image-open');
          $(".resume-name").removeClass('resume-name-open');
          $(this).addClass('resume-image-open');
          $("#"+$(this).attr('title')).addClass('resume-name-open');
          $("#resume-"+$(this).attr('title')).fadeToggle();
        })

        $('.resume-name').click(function() {
          $(".resume-details").hide();
          $(".resume-image").removeClass('resume-image-open');
          $(".resume-name").removeClass('resume-name-open');
          $(this).addClass('resume-name-open');
          $("#"+$(this).attr('id')+"-image").addClass('resume-image-open');
          $("#resume-"+$(this).attr('id')).fadeToggle();
        })

        $('.accordion h3').click(function() {
          if($(this).children().attr("class")=="fas fa-angle-double-right"){
            $('.accordion h3').children().attr("class","fas fa-angle-double-right");
            $(this).children().attr("class","fas fa-angle-double-down");
          } else {
            $('.accordion h3').children().attr("class","fas fa-angle-double-right");
            $(this).children().attr("class","fas fa-angle-double-right");
          }
        })

      })();


      //FEATURED HOVER
$(document).ready(function(){
      $(".linkfeat").hover(
        function () {
            $(".textfeat").show(500);
        },
        function () {
            $(".textfeat").hide(500);
        }
    );
});