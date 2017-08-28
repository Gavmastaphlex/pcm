<!DOCTYPE html>



<html>



	<head>

        <title>Library Catalog</title>

    <link rel="stylesheet" type="text/css" href="css/formStyles.css" />
		<link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="../../css/nav.css">

     <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="css/IEFormStyles.css" />
    <![endif]-->

    <link rel="stylesheet" href="css/showForm.css" />


    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.innerfade.js"></script>
    <script type="text/javascript" src="js/form-two.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    

		<meta name="description" content="" />

		<meta name="keywords" content="" >

     <meta charset="utf-8" />


   <script type="text/javascript">

   $(document).ready(function(){

     $('#fade').innerfade({
        speed: 'slow',
        timeout: 4000,
        type: 'sequence',
        containerheight: 'auto'
    });

     $('#form-fade').innerfade({
        speed: 'slow',
        timeout: 4000,
        type: 'sequence',
        containerheight: 'auto'
    });


     });


   </script>

 

	</head>

	

	<body>

		<div id="page-container">

          <div>

			<header> 
              <nav> 
                <ul>
                    <a href="../../index1.php" ><img src="../../../images/nav-home.png" class="nav-home" onmouseover="this.src='../../../images/nav-home-over.png'" onmouseout="this.src='../../../images/nav-home.png'"/></a>
                    <a href="../../experience-pcm/" ><img src="../../../images/nav-experience.png" class="nav-experience" onmouseover="this.src='../../../images/nav-experience-over.png'" onmouseout="this.src='../../../images/nav-experience.png'"/></a>
                    <a href="../../teach-pcm/" ><img src="../../../images/nav-teach.png" class="nav-teach" onmouseover="this.src='../../../images/nav-teach-over.png'" onmouseout="this.src='../../../images/nav-teach.png'"/></a>
                    <a href="../../library/" ><img src="../../../images/nav-resources-over.png" class="nav-library"/></a>
                    <a href="../../store/products/book1/" ><img src="../../../images/nav-shop.png" class="nav-shop" onmouseover="this.src='../../../images/nav-shop-over.png'" onmouseout="this.src='../../../images/nav-shop.png'"/></a>
                    <a href="../../contact/" ><img src="../../../images/nav-contact.png" class="nav-contact" onmouseover="this.src='../../../images/nav-contact-over.png'" onmouseout="this.src='../../../images/nav-contact.png'"/></a>
                    <img src="../../../images/dot_orange.png" class="nav-dot-orange" id="dot-margin"/>
                    <img src="../../../images/dot_brown.png" class="nav-dot-brown" id="dot-margin"/>
                    <img src="../../../images/dot_purple.png" class="nav-dot-purple" id="dot-margin"/>
                    <img src="../../../images/dot_red.png" class="nav-dot-red" id="dot-margin"/>
                    <img src="../../../images/dot_yellow.png" class="nav-dot-yellow" id="dot-margin"/>
                    <img src="../../../images/dot_blue.png" class="nav-dot-blue" id="dot-margin"/>
                </ul>
              </nav>
            </header>

          </div>

          <div class="content">
          
            <img src="images/library-catalog-background.png" alt=""/>
            <img src="images/line-divider.png" alt="" id="tv-line-left"/>
            <img src="images/line-divider.png" alt="" id="tv-line-middle"/>
            <img src="images/line-divider.png" alt="" id="tv-line-right"/>
            

            <!-- Here is where the folder structure starts, here is a link to the site i used the plug in from http://www.dynamicdrive.com/dynamicindex1/navigate1.htm -->         
      
            

        </div> 

            <div id="fade">
              <img src="images/pcm-logos/Pcm_Blue_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Brown_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Orange_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Purple_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Red_Catalogue.png" alt="Blue PCM Logo" />
              <img src="images/pcm-logos/Pcm_Yellow_Catalogue.png" alt="Blue PCM Logo" />
            </div>

        <a onclick="history.go(-1)"><img src="images/submit-document-form/close-button.png" id="catalogue-close-button" /></a>

        <div id="documentSubmitFormContainer">

          

          <div id="documentSubmitForm">

            <!-- onsubmit="dosomething();dosomethingelse();onemorething();" -->

            <form id="document-submit-form" method="post" action="index.php" enctype="multipart/form-data">

                <h1>PCM Library</h1>

                <div id="form-fade">
                  <img src="images/pcm-logos/Pcm_Blue_Catalogue.png" alt="Blue PCM Logo" /> 
                  <img src="images/pcm-logos/Pcm_Brown_Catalogue.png" alt="Blue PCM Logo" />
                  <img src="images/pcm-logos/Pcm_Orange_Catalogue.png" alt="Blue PCM Logo" />
                  <img src="images/pcm-logos/Pcm_Purple_Catalogue.png" alt="Blue PCM Logo" />
                  <img src="images/pcm-logos/Pcm_Red_Catalogue.png" alt="Blue PCM Logo" />
                  <img src="images/pcm-logos/Pcm_Yellow_Catalogue.png" alt="Blue PCM Logo" />
                </div>

                <div class="clearDiv"></div>


                <div id="lineOne" class="seperateLine">

                <div class="leftLabels">
                <p>Your name<span>*</span></p>
                </div>

                <div class="nameInputContainer">
                <!-- First -->
                  <div class="nameInput">
                    <label for="firstName">First</label>
                    <input type="text" name="firstName" id="firstNameInput" value="" required  /> 
                  </div>

                  <!-- Last -->
                  <div class="nameInput">
                  <label for="lastName">Last</label>
                  <input type="text" name="lastName" id="lastNameInput" value=""   required   />
                  </div>

                </div>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineTwo" class="seperateLine">


                <div class="leftLabels">
                <p>Email<span>*</span></p>
                </div>
                <!-- Email -->
                <input type="email" name="email" id="emailInput" class="longInputBox" value=""  required    />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineThree" class="seperateLine">

                <div class="leftLabels">
                <p>Contact ph</p>
                </div>
                <!-- Conact Ph -->
                <input type="text" name="phone" id="phoneInput" class="longInputBox" value="" />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

          <div id="preview-form-fields">

                <div id="lineFour" class="seperateLine">    

                <div class="leftLabels">
                <p>Company details<br />
                (if applicable)</p>
                </div>  

                
                <!-- Company Name -->
                <label for="companyName">Name</label>
                <input type="text" name="companyName" class="longInputBox" id="companyNameInput" value="" />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineFive" class="seperateLine">

                <div class="halfInputContainer">
                <!-- First -->
                  <div id="companyWebsiteInputBox">

                <!-- Company Website -->
                <label for="companyWebsite">Website</label>
                <input type="text" name="companyWebsite" id="companyWebsiteInput" value="" />

                </div>

                <div id="companyEmailInputBox">

                <!-- Company Email -->
                <label for="companyEmail">Company Email</label>
                <input type="text" name="companyEmail" id="companyEmailInput" value="" />

                </div>

                </div>

                <div class="clearDiv"></div>

                </div>



                <!-- ////////////////////////////////////////// -->

                <div id="lineTwenty" class="seperateLine">

                <div class="leftLabels">
                <p>Attach company logo here<span>*</span></p>
                </div>

                <!-- Attach company logo here -->
                <input type="file" name="logoFile" id="logoFileSubmit" class="fileSubmitButton"  required   />

                <div class="clearDiv"></div>

                </div>


                <!-- ////////////////////////////////////////// -->

                <div id="lineSix" class="seperateLine">

                <div class="leftLabels">  
                <p>Document Title<span>*</span></p>
                </div>
                <!-- Document Title -->
                <input type="text" name="documentTitle" class="longInputBox" id="documentTitleInput" value=""   required   />
                
                <div class="clearDiv"></div>

                <span id="documentTitleError" class="errorMessage"></span>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineSeven" class="seperateLine">
                <div class="leftLabels">
                <p>Document Subtitle</p>
                </div>
                <!-- Document Subtitle -->
                <input type="text" name="documentSubtitle" class="longInputBox" id="documentSubtitleInput" value=""   />

                <div class="clearDiv"></div>

                <span id="documentSubtitleError" class="errorMessage"></span>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineEight" class="seperateLine">

                <div class="leftLabels">
                <p>Please select how<br />
                many Authors<span>*</span></p>
                </div>
                <!-- Authors -->
                <select name="authorNumber" id="authorNumber">
                  <option value="One">One</option>
                  <option value="Two">Two</option>
                  <option value="Three">Three</option>
                  <option value="Four">Four</option>
                  <option value="Five">Five</option>
                  <option value="Six">Six</option>
                </select>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineNine" class="seperateLine">

                <div class="leftLabels">
                <p>Author's Name(s)<span>*</span></p>
                </div>
                <!-- Authors Name -->

                <!-- To be dynamically added depending on how many authors are selected -->

                <div class="authorsNameInputBoxes" id="OneAuthorContainer">
                  <input type="text" name="authorsNameOne" id="authorsNameOneInput" value="" class="authorsNameInput"  required  />
                  <input type="text" name="authorsNameTwo" id="authorsNameTwoInput" value="" class="authorsNameInput"   />
                  <input type="text" name="authorsNameThree" id="authorsNameThreeInput" value="" class="authorsNameInput"      />
                  <input type="text" name="authorsNameFour" id="authorsNameFourInput" value="" class="authorsNameInput"      />
                  <input type="text" name="authorsNameFive" id="authorsNameFiveInput" value="" class="authorsNameInput"    />
                  <input type="text" name="authorsNameSix" id="authorsNameSixInput" value="" class="authorsNameInput"    />
                </div> 

                <div class="clearDiv"></div>

                <span id="documentAuthorError" class="errorMessage"></span>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->


                <div id="lineTen" class="seperateLine">

                <div class="leftLabels">
                <p>Are you the Author?</p>
                </div>
                <!-- Are you the Author -->
                <select name="isAuthor" id="isAuthor">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>

                <div id="hasPermissionContainer">
                <label for="hasPermission"><p>Do you have permission <br /> to submit this document?</p></label>
                </div>
                <!-- Have permission?-->
                <select name="hasPermission" id="hasPermission">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineEleven" class="seperateLine">

                <div class="leftLabels">
                <p>Author Credentials,<br />
                Title, Qualifications</p>
                </div>
                <!-- Author credentials-->
                <input type="text" name="authorCredentials" id="authorCredentialsInput" value="" class="longInputBox" />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineTwelve" class="seperateLine">

                <div class="leftLabels">
                <p>Date First Published</p>
                </div>
                <!-- Date First published -->
                <input type="date" name="datePublished" id="datePublishedInput" value="" />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="preview-line">

                <div class="leftLabels">
                <p>Preview your cover</p>
                </div>
                <!-- Attach document here -->

            
                <a href="preview.php" id="documentPreviewSubmit" rel="0" class="fileSubmitButton" value="Preview"></a>

                <div class="clearDiv"></div>

                </div>

          </div> <!-- End of the fields that are included in the Preview Document Function -->


                      <!-- ////////////////////////////////////////// -->

                <div id="lineFourteen" class="seperateLine">  

                <div class="leftLabels">
                <p>Library Category<span>*</span></p>
                </div>
                <!-- Library Category-->
                <select name="libraryCategory" id="libraryCategory"  required >
                  <option value="">Choose a Category</option>
                  <option value="testimonials">Testimonials</option>
                  <option value="what-is-pcm">What is PCM?</option>
                  <option value="pcm-in-action">PCM in action</option>
                  <option value="where-is-pcm-used">Where is PCM used?</option>
                  <option value="other">Other</option>
                </select>

                <!-- Sub Category-->
                <!-- The options that will be accessible will depend on the main category the user chooses-->

                <div class="library-sub-category" id="testimonials-subcategory">
                <label for="testimonialsSubcategory">Sub category</label>
                <select class="sub-category" name="testimonials-subcategory" id="testimonialsSubcategory">
                  <option value="">Choose a Sub category</option>
                  <option value="training-outcomes-evaluation">Training Outcomes Evaluation</option>
                  <option value="written">Written</option>
                  <option value="video">Video</option>
                </select>
                </div>

                <div class="library-sub-category" id="what-is-pcm-subcategory">
                  <label for="whatIsPCMSubcategory">Sub category</label>
                <select class="sub-category" name="what-is-pcm-subcategory" id="whatIsPCMSubcategory">
                  <option value="">Choose a Sub category</option>
                  <option value="academia">Academia</option>
                  <option value="articles">Articles</option>
                  <option value="background">Background</option>
                  <option value="dr-taibi-kahler">Dr Taibi Kahler</option>
                  <option value="general-information">General Information</option>
                  <option value="type-explanation">Type Explanation</option>
                  <option value="validation">Validation</option>
                </select>
                </div>

                <div class="library-sub-category" id="pcm-in-action-subcategory">
                  <label for="researchPublicationSubcategory">Sub category</label>
                <select class="sub-category" name="pcm-in-action-subcategory" id="researchPublicationSubcategory">
                  <option value="">Choose a Sub category</option>
                  <option value="advantage-of-pcm">Advantage of PCM</option>
                  <option value="building-teams">Building Teams</option>
                  <option value="culture-and-change">Culture &amp; Change</option>
                  <option value="difficult-interactions">Difficult Interactions</option>
                  <option value="management-and-leadership">Management &amp; Leadership</option>
                  <option value="self-management">Self Management</option>
                </select>
                </div>

                <div class="library-sub-category" id="where-is-pcm-used-subcategory">
                  <label for="whereIsPCMUsedSubcategory">Sub category</label>
                <select class="sub-category" name="where-is-pcm-used-subcategory" id="whereIsPCMUsedSubcategory">
                  <option value="">Choose a Sub category</option>
                  <option value="education">Education</option>
                  <option value="medicine">Medicine</option>
                  <option value="kahler-organisations-worldwide">Kahler Organisations Worldwide</option>
                  <option value="management">Management</option>
                  <option value="personal-relationships">Personal Relationships</option>
                </select> 
                </div>
            

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="other-subcategory" class="seperateLine other-sub-category"> 

                <div class="leftLabels">
                <p>If you selected 'other'<br />
                for 'library category',<br />
                please write a short<br />
                description here<span>*</span></p>
                </div>
                <!--Write Description-->
                <textarea   rows="4" cols="40" name="other-subcategory" id="documentDescriptionTextarea" class="textareaBox sub-category"  ></textarea>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineSixteen" class="seperateLine"> 

                <div class="leftLabels">
                <p>Document Excerpt<span>*</span><br />
                (40 words max)</p>
                </div>
                <!-- Document Excerpt -->
                <textarea   rows="4" cols="40" name="documentExcerpt" id="documentExcerptTextarea" class="textareaBox"   required  ></textarea>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineSeventeen" class="seperateLine"> 

                <div class="leftLabels">
                <p>Document format<span>*</span><br />
                (video, written, audio)</p>
                </div>
                <!-- Document format-->
                <select name="documentFormat" id="documentFormat"  required  >
                  <option value="">Choose a Format</option>
                  <option value="Video">Video</option>
                  <option value="Written">Written</option>
                  <option value="Audio">Audio</option>
                </select>

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineEighteen" class="seperateLine">

                <div class="leftLabels">
                <p>Attach document here<span>*</span></p>
                </div>
                <!-- Attach document here -->
                <input type="file" name="documentFile" id="documentFileSubmit" class="fileSubmitButton"  />

                <div class="clearDiv"></div>

                </div>

                <!-- ////////////////////////////////////////// -->

                <div id="lineNineteen" class="seperateLine">

                <div class="leftLabels">
                <p>Keywords/phrases<span>*</span><br />
                These are the words<br />
                library users will 'search'<br />
                to find your document</p>
                </div>
                <!-- Keywords / phrases -->
                <textarea rows="4" cols="40" name="documentKeywords" id="documentKeywordsTextarea" class="textareaBox"   required    ></textarea>

                <div class="clearDiv"></div>

                </div>


                <!-- ////////////////////////////////////////// -->

                


                <div id="lineTwentyOne" class="seperateLine">

                <div class="leftLabels">
                <p>Submit for approval<span>*</span></p>
                </div>

                <input type="submit" name="documentSubmit" id="documentSubmitBtn" value="submit" />

                <div class="clearDiv"></div>

                </div>

          </form>

          <div class="clearDiv"></div>

        </div>

        <div class="clearDiv"></div>

    </div>


<!--////////////////////////////////////////////////////////////////////////-->

    <form method="post" action="search.php" id="searchDocumentToolbar">


        <select name="searchOption">
          <option value="Title">Title</option>
          <option value="Author">Author</option>
          <option value="Content">Content</option>
        </select>

  <input type="text" name="search" id="searchInput" value="" required />


  <input type="submit" name="searchSubmit" id="searchSubmit" value="Search" />

  <div class="clearDiv"></div>

  </form>

          <div class="clearDiv"></div>

        </div>

        <div class="clearDiv"></div>

    </div>



<!--////////////////////////////////////////////////////////////////////////-->

 
	</body>



</html>