
    <div class="container-fluid">
   <!-- Header Section -->
   <div class="row">
    <div class="col-md-12 survey-header">
      <img src="<?php echo base_url().'/assets/img/SurveyIMG/newLogoSurvey.png'?>" alt="Cablelink's 30th Anniversary" class="img-responsive center-block">
    </div>
  </div>

    <!-- Survey Form -->
    <form id="MainForm" action="" method="POST" autocomplete="off">
      <!-- Name Field -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container">
          <label for="fullname" class="genre-label">Name:</label>
          <input type="text" id="fullname"  name="fullname" class="custom-input" data-toggle="popover" placeholder="Enter your full name">
        </div>
      </div>

	  <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container">
          <label for="fullname" class="genre-label">Account No.:</label>
		  <input type="text" id="account_no" data-toggle="popover" name="account_no" class="custom-input" placeholder="Enter your Account Number"><!--onblur="JsAjax('findApplication','path=self;dataID=account_no');"-->
        </div>
      </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3 form-container" style="padding:0px;">
      <label for="" class="genre-label" style="margin:21px; font-size:16px">1. VIEWING HABITS</label>
    </div>
  </div>
  <!-- Favorite Genre -->
	<div class="row">
		<div class="col-md-6 col-md-offset-3 form-container" id="target1">
			<label for="fav_genre" class="genre-label">
          1.1 Among the following genres, which one best describes your regular viewing on Cablelink TV?
			</label>
			<select class="form-control" id="fav_genre" name="fav_genre" onchange="selectGenre(this.value); scrollSelectedGenre();">
			<option value="">Click to Choose Genre</option>
			<option value="MOVIE">Movies</option>
			<option value="GENERAL ENTERTAINMENT">General Entertainment</option>
			<option value="DOCUMENTARIES">Documentaries</option>
			<option value="NEWS">News</option>
			<option value="KIDS">Kids</option>
			<option value="MUSIC">Music</option>
			<option value="SPORTS">Sports</option>
			<option value="LOCAL">Local</option>
			<option value="INTERNATIONAL">International</option>
			<option value="LIFESTYLE">Lifestyle</option>
			<option value="RELIGIOUS">Religious</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3 form-container">
			<!-- Question Label -->
			<label class="genre-label" id="genre_channels_label">
        1.2 What specific channel program do you associate with your go-to genre on Cablelink TV? (Select all that apply.)
			</label>
			
			<!-- Genre Choices -->
			<div class="genre-choices">
			<label id="labelMOVIE" onclick="clickGenre('MOVIE');" class="genre-label-choices" style="margin-top: 5px;">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>MOVIE
			</label>
			<div id="loadChannels1" style="display: none;"  class="genre-group" ></div>
			
			<label id="labelGENERALENTERTAINMENT" onclick="clickGenre('GENERAL ENTERTAINMENT');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>GENERAL ENTERTAINMENT
			</label>
			<div id="loadChannels3" style="display: none;" class="genre-group"></div>
			
			<label id="labelDOCUMENTARIES" onclick="clickGenre('DOCUMENTARIES');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>DOCUMENTARIES
			</label>
			<div id="loadChannels6" style="display: none;" class="genre-group"></div>
			
			<label id="labelNEWS" onclick="clickGenre('NEWS');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>NEWS
			</label>
			<div id="loadChannels4" style="display: none;" class="genre-group"></div>
			
			<label id="labelKIDS" onclick="clickGenre('KIDS');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>KIDS
			</label>
			<div id="loadChannels9" style="display: none;" class="genre-group"></div>
			
			<label id="labelMUSIC" onclick="clickGenre('MUSIC');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>MUSIC
			</label>
			<div id="loadChannels10" style="display: none;" class="genre-group"></div>
			
			<label id="labelSPORTS" onclick="clickGenre('SPORTS');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>SPORTS
			</label>
			<div id="loadChannels7" style="display: none;" class="genre-group"></div>
			
			<label id="labelLOCAL" onclick="clickGenre('LOCAL');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>LOCAL
			</label>
			<div id="loadChannels2" style="display: none;" class="genre-group"></div>
			
			<label id="labelINTERNATIONAL" onclick="clickGenre('INTERNATIONAL');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>INTERNATIONAL
			</label>
			<div id="loadChannels11" style="display: none;" class="genre-group"></div>
			
			<label id="labelLIFESTYLE" onclick="clickGenre('LIFESTYLE');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>LIFESTYLE
			</label>
			<div id="loadChannels5" style="display: none;" class="genre-group"></div>
			
			<label id="labelRELIGIOUS" onclick="clickGenre('RELIGIOUS');" class="genre-label-choices">
				<span class="glyphicon glyphicon-record" aria-hidden="true"></span>RELIGIOUS
			</label>
			<div id="loadChannels8" style="display: none;" class="genre-group"></div>
			</div>
		</div>
	</div>


      
      <!-- Other Genres Watched -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container">
          <label for="other_genres" class="genre-label">
            1.3 On average, how many hours per day do you or your household spend watching Cablelink TV?
          </label>
          <div class="radio-container">
		  	    <label>
              <input type="radio" name="viewing_hours_per_day" value="Less than 1 hour">
              Less than 1 hour
            </label>
          </div>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="viewing_hours_per_day" value="1–2 hours">
              1–2 hours
            </label>
          </div>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="viewing_hours_per_day" value="3–4 hours">
              3–4 hours
            </label>
          </div>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="viewing_hours_per_day" value="5–6 hours">
              5–6 hours
            </label>
          </div>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="viewing_hours_per_day" value="More than 6 hours">
              More than 6 hours
            </label>
          </div>

        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container" style="padding:0px;">
          <label for="" class="genre-label" style="margin:21px; font-size:16px">2. Viewer Demographics</label>
        </div>
      </div>
      <!-- Viewer Age Range -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container">
          <label class="genre-label">
            2.1 What is the age range of primary Cablelink TV viewers in your household? (Select all that apply)
          </label>
          <div class="checkbox-container">
		  	<label>
            <input type="checkbox" name="viewer_age_range[]" value="Generation Alpha">
            Ages 0-12 (Generation Alpha)</label>
          </div>
		  <div class="checkbox-container">
		  	<label>
            <input type="checkbox" name="viewer_age_range[]" value="Gen Z">
            Ages 13-28 (Gen Z)</label>
          </div>
		  <div class="checkbox-container">
		  	<label>
            <input type="checkbox" name="viewer_age_range[]" value="Millennials">
            Ages 29-44 (Millennials)</label>
          </div>
		  <div class="checkbox-container">
		  	<label>
            <input type="checkbox" name="viewer_age_range[]" value="Generation X">
            Ages 45-60 (Generation X)</label>
          </div>
          <div class="checkbox-container">
		  	<label>
            <input type="checkbox" name="viewer_age_range[]" value="Baby Boomers">
          	Ages 61-70 (Baby Boomers)</label>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container" style="padding:0px;">
          <label for="" class="genre-label" style="margin:21px; font-size:16px">3. For Content Preferences</label>
        </div>
      </div>
      <!-- For Content Preferences -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container">
          <label class="genre-label">
            <!-- What is the age range of primary Cablelink TV viewers in your household? (Select all that apply) -->
            3.1 Which of the following types of content would you like to see more of on Cablelink TV?
                (Select all that apply.)
          </label>
          
        <div class="checkbox-container">
		  	  <label>
              <input type="checkbox" name="other_genres_watched[]" value="Local movies and shows">
              Local movies and shows</label>
        </div>
		    <div class="checkbox-container">
		  	  <label>
              <input type="checkbox" name="other_genres_watched[]" value="International TV series">
              International TV series</label>
        </div>
		    <div class="checkbox-container">
		  	  <label>
              <input type="checkbox" name="other_genres_watched[]" value="Tagalized / dubbed foreign content">
              Tagalized / dubbed foreign content</label>
        </div>
		    <div class="checkbox-container">
		  	  <label>
              <input type="checkbox" name="other_genres_watched[]" value="Classic or retro programs">
              Classic or retro programs</label>
        </div>
        <div class="checkbox-container">
		  	  <label>
            <input type="checkbox" name="other_genres_watched[]" value="Reality competitions">
          	Reality competitions</label>
        </div>
        <div class="checkbox-container">
		  	  <label>
            <input type="checkbox" name="other_genres_watched[]" value="Live sports coverage">
          	Live sports coverage</label>
        </div>
        <div class="checkbox-container">
		  	  <label>
            <input type="checkbox" name="other_genres_watched[]" value="K-Dramas / Asian dramas">
          	K-Dramas / Asian dramas</label>
        </div>
        <div class="checkbox-container">
		  	  <label>
            <input type="checkbox" name="other_genres_watched[]" value="Educational/informative content">
          	Educational/informative content</label>
        </div>
        <div class="checkbox-container">
		  	  <label>
            <input type="checkbox" name="other_genres_watched[]" value="Music or concert specials">
          	Music or concert specials</label>
        </div>
        </div>
      </div>



    <div class="row">
      <div class="col-md-6 col-md-offset-3 form-container" style="padding:0px;">
        <label for="" class="genre-label" style="margin:21px; font-size:16px">4. For Satisfaction and Feedback</label>
      </div>
    </div>
    <!-- For Satisfaction and Feedback -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container">

          <label for="ch_variety_satisfaction" class="genre-label">
            <!-- Aside from your usual favorites, what other genres do you also watch? (Select all that apply) -->
            4.1 Are you satisfied with the variety of channels currently available on Cablelink TV?
          </label>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="channel_variety_satisfaction" value="Very satisfied">
              Very satisfied
            </label>
          </div>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="channel_variety_satisfaction" value="Satisfied">
              Satisfied
            </label>
          </div>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="channel_variety_satisfaction" value="Neutral">
              Neutral
            </label>
          </div>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="channel_variety_satisfaction" value="Unsatisfied">
              Unsatisfied
            </label>
          </div>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="channel_variety_satisfaction" value="Very unsatisfied">
              Very unsatisfied
            </label>
          </div>

        </div>
    </div>


      <!-- For Satisfaction and Feedback -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container">
          <label for="viewing_hours" class="genre-label">
            <!-- Aside from your usual favorites, what other genres do you also watch? (Select all that apply) -->
            4.2 Have you ever recommended Cablelink TV to others?
          </label>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="recommended_to_others" value="Yes">
              Yes
            </label>
          </div>

          <div class="radio-container">
		  	    <label>
              <input type="radio" name="recommended_to_others" value="No">
              No
            </label>
          </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container" style="padding:0px;">
          <label for="" class="genre-label" style="margin:21px; font-size:16px">5. For New Channels Awareness & Feedback</label>
        </div>
    </div>
    <!-- For New Channels Awareness & Feedback -->
    <div class="row">
      <div class="col-md-6 col-md-offset-3 form-container">
          <label class="genre-label">
            5.1 Have you watched any programs on the following new channels?
            (Select all that apply.)
          </label>
          
        <div class="checkbox-container">
		  	  <label>
              <input type="checkbox" name="has_watched_new_channels[]" onclick="SatiScale(this.value, 1);"value="Studio Universal">
              Studio Universal</label>
        </div>
		    <div class="checkbox-container">
		  	  <label>
              <input type="checkbox" name="has_watched_new_channels[]" onclick="SatiScale(this.value, 2);" value="TVN Movies Pinoy">
              TVN Movies Pinoy</label>
        </div>
		    <div class="checkbox-container">
		  	  <label>
              <input type="checkbox" name="has_watched_new_channels[]" onclick="SatiScale(this.value, 3);"value="TVN Premier">
              TVN Premier</label>
        </div>
		    <div class="checkbox-container">
		  	  <label>
              <input type="checkbox" name="has_watched_new_channels[]" onclick="SatiScale(this.value, 4);clearOtherCheckboxes(this);"  id="clear" value="I haven’t watched any yet">
              I haven’t watched any yet</label>
        </div>
      </div>
    </div>



    <div class="row" id="scale" style="display:none">
      <div class="col-md-6 col-md-offset-3 form-container" >
          <label class="genre-label">
          5.2 On a scale of 1 to 5, how satisfied are you with the new channels?
            (1 = Not satisfied at all, 5 = Very satisfied)
          </label>
          <div class="al-table">
              <table class="my-table" border="1">
                <thead class="tableheader">
                  <tr>  
                    <td style="width: 288px;" > Channel </td>
                    <td style="width: 80px;" > 1 </td>
                    <td style="width: 80px;" > 2 </td>
                    <td style="width: 80px;" > 3 </td>
                    <td style="width: 80px;" > 4 </td>
                    <td style="width: 80px;" > 5 </td>
                  </tr>
                </thead>
                <tbody  id="Satisfaction_scale">

                </tbody>
              </table>
          </div>
      </div>
    </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container" style="padding:0px;">
          <label for="" class="genre-label" style="margin:21px; font-size:16px">6. Final Thoughts</label>
        </div>
      </div>
      <!-- Program Recommendations -->
      <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container">
          <label for="program_recommendations" class="genre-label">
              6.1 Optional: Do you have any comments or suggestions to improve your Cablelink TV viewing experience?
          </label>
          <input type="text" id="program_recommendations" name="program_recommendations" class="custom-input" 
                 placeholder=""> <!--Enter program recommendations here-->
        </div>
      </div>
      
      <!-- Buttons -->
      <div class="row btn-container">
        <div class="col-md-12" style="margin-bottom:80px;">
          <button type="button" class="btn btn-danger" onclick="$('#MainForm').trigger('reset');">Clear</button>
          <!-- <button type="button" class="btn btn-danger" onclick="window.open('survey_satisfaction.php', '_self')">Clear</button> -->
          <button type="submit" class="btn btn-primary">Submit</button>
          <!-- <button type="button" class="btn btn-success" onclick="window.open('index.php', '_self')">Main Page</button> -->
        </div>
      </div>
    </form>
    
    <!-- Optional End Survey Message -->
    <div id="EndSurveyForm" style="display: none; margin-top: 50px;">
      <div class="alert alert-success text-center">
        <h3>Survey Complete. Thank you!</h3>
        <button class="btn btn-info" onclick="changePage();">Survey Again</button>
      </div>
    </div>
  </div>




</embed>

<!--MODAL WARNING-->
<div id="FailedSubmitModal" class="modal fade" role="dialog" style="padding-top:150px;">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header responsive">
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-remove"></span><span aria-hidden="true"></span></button>
                <!-- <h3 class="modal-title" style="color:white; text-shadow: 2px 2px 4px gray"><strong>Channel Survey</strong></h3> -->
            </div>
            <div class="modal-body">
                <div align="center">
                  <strong><span class="glyphicon glyphicon-warning-sign" aria-hidden="true" style="color:orange;font-size: 28px;"></span><p style="color: orange; letter-spacing: 3px;">SUBMISSION FAILED</p></strong>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<!--END OF MODAL-->






