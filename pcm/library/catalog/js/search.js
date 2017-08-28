   $(document).ready(function(){

        $(".third-column-item").click( function () {

          var targID  = $(this).attr("id");
          $('.file-summary').hide();
          $('#' + targID + '-summary').show ();
          $(".selected-3").addClass('non-selected-3').removeClass('selected-3');
          $(this).removeClass('non-selected-3').addClass('selected-3');
          $('.breadcrumbThree').hide();
          $('#' + targID + '-breadcrumbThree').show();

          var elementClasses = $(this).attr('class').split(' ');

         var firstPieces= elementClasses[1].split("_");
         var firstColumn = firstPieces[1];

         $(".selected-1").addClass('non-selected-1').removeClass('selected-1');
         $('#' + firstColumn).removeClass('non-selected-1').addClass('selected-1');
         $('.breadcrumbOne').hide();
         $('#' + firstColumn + '-breadcrumbOne').show();


         var secondPieces= elementClasses[2].split("_");
         var secondColumn = secondPieces[1];

         //console.log(secondColumn);

          $(".second-column-menu").hide();
          $('#' + firstColumn + '-menu').show();

          $(".selected-2").addClass('non-selected-2').removeClass('selected-2');
          $('#' + secondColumn).removeClass('non-selected-2').addClass('selected-2');
          $('.breadcrumbTwo').hide();
          $('#' + secondColumn + '-breadcrumbTwo').show();

        });


     });