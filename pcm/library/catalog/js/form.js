
     $(document).ready(function(){

      function getIEVersion(){
    var agent = navigator.userAgent;
    var reg = /MSIE\s?(\d+)(?:\.(\d+))?/i;
    var matches = agent.match(reg);
    if (matches != null) {
        return { major: matches[1], minor: matches[2] };
    }
    return { major: "-1", minor: "-1" };
    }

    var ie_version =  getIEVersion();
    var is_ie10 = ie_version.major == 10;

    if (is_ie10) {
      
      $('#documentFormat').css({
        margin: '7px 0 0 78px'  
      });

      $('#lineFour label').css({
        margin: '0 0 0 67px'
      });

      $('.nameInput input').css({
        margin: '4px 0 0'
      });

      $('#companyWebsiteInputBox label').css({
        margin: '0 5px 0 10px'
      });

      $('#companyEmailInputBox').css({
        margin: '0 0 0 10px'
      });

      $('.nameInputContainer').css({
        margin: '0 -5px 0 0'
      });

      $('#logoFileSubmit').css({
        margin: '0 0 0 49px',
        width: '240px',
        height: '20px',
        'background-image': 'none',
        'background-color': 'white'
      });

      $('#documentFileSubmit').css({
        margin: '0 0 0 72px',
        width: '240px',
        height: '20px',
        'background-image': 'none',
        'background-color': 'white'
      });

      $('#authorNumber').css({
        margin: '9px 0 0 106px'
      });

      $('#isAuthor').css({
        margin: '2px 0 0 90px'
      });

      $('#datePublishedInput').css({
        height: '20px',
        margin: '0 0 0 90px'
      });

      $('#documentPreviewSubmit').css({
        margin: '0 0 0 94px'
      });

      $('#libraryCategory').css({
        margin: '0 0 0 101px'
      });

      $('#lineFourteen label').css({
        margin: '0 6px 0 38px'
      });

      $('#documentSubmitBtn').css({
        margin: '0 0 40px 82px',
        border: 'none!important'
      });

    }



          $('#documentExcerptTextarea').keyup(function () {
            var wordArray = this.value.split(/[\s\.\?]+/); //Split based on regular expression for spaces
            var maxWords = 40; //max number of words
            var total_words = wordArray.length; //current total of words
            var newString = "";
            //Roll back the textarea value with the words that it had previously before the maximum was reached
            if (total_words > maxWords+1) {
                 for (var i = 0; i < maxWords; i++) {
                    newString += wordArray[i] + " ";
                }
                this.value = newString;
                alert('You\'ve reached forty words.');
            }

        });

    $("#isAuthor").change (function () {

      var targID  = $(this).val ();

        if(targID == 'No'){
          $('#hasPermissionContainer').show();
          $('#hasPermission').show();

        }

        if(targID == 'Yes') {
          $('#hasPermissionContainer').hide();
          $('#hasPermission').hide();
        }

      });

    $("#hasPermission").change (function () {
        alert('You may only submit a document if you are the author or have permission.');
        $("#hasPermission").val(1);
      });


    $("body").click(function(){
      $("#submissionpopup-close-button").hide();
      $("#submission-popup").hide();
    });


   $("#documentPreviewSubmit").click(function(event) {

              var title = $('#documentTitleInput');
              var subTitle = $('#documentSubtitleInput');
              var authorOne = $('#authorsNameOneInput');
              var authorTwo = $('#authorsNameTwoInput');
              var authorThree = $('#authorsNameThreeInput');
              var authorFour = $('#authorsNameFourInput');
              var authorFive = $('#authorsNameFiveInput');
              var authorSix = $('#authorsNameSixInput');


              $('.errorMessage').html('');

                      if(title.val() == ""){
                        
                        $('#documentTitleError').append('Please enter the document title');
                        title.focus();
                          
                          return false;
                      } else if (authorOne.val() == "") {
                         $('#documentAuthorError').append('Please enter the authors name');
                          authorOne.focus();
                          
                          return false;
                      } else if (authorTwo.is(":visible") && authorTwo.val() == "") {

                           $('#documentAuthorError').append('Please enter the authors name');
                            authorTwo.focus();
                            return false;

                      } else if (authorThree.is(":visible") && authorThree.val() == "") {

                           $('#documentAuthorError').append('Please enter the authors name');
                            authorThree.focus();
                            return false;
                        
                      } else if (authorFour.is(":visible") && authorFour.val() == "") {

                           $('#documentAuthorError').append('Please enter the authors name');
                            authorFour.focus();
                            return false;
                        
                      } else if (authorFive.is(":visible") && authorFive.val() == "") {

                           $('#documentAuthorError').append('Please enter the authors name');
                            authorFive.focus();
                            return false;
                      
                      } else if (authorSix.is(":visible") && authorSix.val() == "") {

                           $('#documentAuthorError').append('Please enter the authors name');
                            authorSix.focus();
                            return false;

                      } else {

                        event.preventDefault();

                        var $title = escape($('#documentTitleInput').val());
                        var $subTitle = escape($('#documentSubtitleInput').val());
                        var $authorOne = escape($('#authorsNameOneInput').val());
                        var $authorTwo = escape($('#authorsNameTwoInput').val());
                        var $authorThree = escape($('#authorsNameThreeInput').val());
                        var $authorFour = escape($('#authorsNameFourInput').val());
                        var $authorFive = escape($('#authorsNameFiveInput').val());
                        var $authorSix = escape($('#authorsNameSixInput').val());
                        var $companyName = escape($('#companyNameInput').val());
                        var $companyWebsite = escape($('#companyWebsiteInput').val());
                        var $companyEmail = escape($('#companyEmailInput').val());

                        /*var $name = $("#name_input_id").val();
                         var $location = $("#location_input_id").val();

                         $.ajax({
                           type: "POST",
                           url: "some.php",
                           data: { name: $name, location: $location }
                        }).done(function( msg ) {
                             alert( "Data Saved: " + msg );
                        });*/


                        var url = "preview.php?documentTitle=" + $title + "&documentSubtitle=" + $subTitle + "&authorsNameOne=" + $authorOne + "&authorsNameTwo=" + $authorTwo + "&authorsNameThree=" + $authorThree + "&authorsNameFour=" + $authorFour + "&authorsNameFive=" + $authorFive + "&authorsNameSix=" + $authorSix + "&companyName=" + $companyName + "&companyEmail=" + $companyEmail + "&companyWebsite=" + $companyWebsite;
                        var windowName = "popUp";//$(this).attr("name");
                        var windowSize = "width=495,height=680";
     
                        window.open(url, windowName, windowSize);
                          
                      }
           });


      $("#libraryCategory").change ( function () {
        var targID  = $(this).val ();
        $(".library-sub-category").hide();
        $(".other-sub-category").hide();
        $('#' + targID + '-subcategory').show ();
        $(".sub-category").removeAttr("required");
        $(".sub-category").filter(':visible').attr('required', 'true');
      } )




      $("#authorNumber").change ( function () {

        var targID  = $(this).val ();
        $(".authorsNameInput").removeAttr("required");
        var $authors = $('#OneAuthorContainer').children();

        
          if (targID == 'One') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
          }

          if (targID == 'Two') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
          }

          if (targID == 'Three') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
            $('#authorsNameThreeInput').show ();
          }

          if (targID == 'Four') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
            $('#authorsNameThreeInput').show ();
            $('#authorsNameFourInput').show ();
          }

          if (targID == 'Five') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
            $('#authorsNameThreeInput').show ();
            $('#authorsNameFourInput').show ();
            $('#authorsNameFiveInput').show ();
          }

          if (targID == 'Six') {
            $(".authorsNameInput").hide();
            $('#authorsNameOneInput').show ();
            $('#authorsNameTwoInput').show ();
            $('#authorsNameThreeInput').show ();
            $('#authorsNameFourInput').show ();
            $('#authorsNameFiveInput').show ();
            $('#authorsNameSixInput').show ();
          }

          $authors.filter(':visible').attr('required', 'true');
          
      } )

     
     $("#here-button").click(function(){       
     
       $('#documentSubmitFormContainer').show();
       $('#form-close-button').show();

       $('#catalogue-close-button').hide();
       
       $('#searchDocumentToolbar').hide();
       $('#submitDocumentToolbar').hide();

        $(".selected-1").removeClass('selected-1');
        $(".selected-2").removeClass('selected-2');
        $(".selected-3").removeClass('selected-3');
        $(".displayClass").removeClass('displayClass');

        $(".second-column-menu").hide();
        $(".third-column-menu").hide();
        $('.file-summary').hide();
        
        $('.breadcrumbOne').hide();
        $('.breadcrumbTwo').hide();
        $('.breadcrumbThree').hide();


     });

     $("#form-close-button").click(function(){       
     
       $('#documentSubmitFormContainer').hide();
       $('#form-close-button').hide();
       $('#searchDocumentToolbar').show();
       $('#submitDocumentToolbar').show();
       $('#catalogue-close-button').show();

     });
   
     


     });
 