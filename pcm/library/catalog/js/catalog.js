   $(document).ready(function(){

        $("#first-column li").click( function () {

          var targID  = $(this).attr("id");
          $(".second-column-menu").hide();
          $(".third-column-menu").hide();
          $('.file-summary').hide();
          $('#' + targID + '-menu').show();
          $(".displayClass").removeClass('displayClass');
          $(".selected-1").addClass('non-selected-1').removeClass('selected-1');
          $(".selected-2").addClass('non-selected-2').removeClass('selected-2');
          $(".selected-3").addClass('non-selected-3').removeClass('selected-3');
      		$(this).removeClass('non-selected-1').addClass('selected-1');
          $('.breadcrumbOne').hide();
          $('.breadcrumbTwo').hide();
          $('.breadcrumbThree').hide();
          $('#' + targID + '-breadcrumbOne').show();

        });

        $(".second-column-item").click( function () {

          var targID  = $(this).attr("id");
          $(".third-column-menu").hide();
          $('.file-summary').hide();
          $('#' + targID + '-menu').show ();
          $(".selected-2").addClass('non-selected-2').removeClass('selected-2');
          $(".selected-3").addClass('non-selected-3').removeClass('selected-3');
          $(this).removeClass('non-selected-2').addClass('selected-2');
          $('.breadcrumbTwo').hide();
          $('.breadcrumbThree').hide();
          $('#' + targID + '-breadcrumbTwo').show();

        });

        $(".third-column-item").click( function () {

          var targID  = $(this).attr("id");
          $('.file-summary').hide();
          $('#' + targID + '-summary').show ();
          $(".selected-3").addClass('non-selected-3').removeClass('selected-3');
          $(this).removeClass('non-selected-3').addClass('selected-3');
          $('.breadcrumbThree').hide();
          $('#' + targID + '-breadcrumbThree').show();
        });

     });