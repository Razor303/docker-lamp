<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<body>
  <div data-role="page" data-url="main-page" data-theme="b">
      <div data-role="header" data-position="fixed" data-theme="b">
          <h1>Job Lists</h1>
          <a href="#left-panel" data-icon="carat-r" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-nodisc-icon">Open left panel</a>
          <a href="#right-panel" data-icon="carat-l" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-nodisc-icon">Open right panel</a>
      </div><!-- /header -->

      <div role="main" class="ui-content">
        <ul data-role="listview" data-dialog="true" data-inset="true" data-icon="false">
          <li><a href="">No Messages</a></li>
        </ul>
        <ul id="patinentFlow_ul" data-role="listview" data-inset="true" data-icon="false">
          <li data-role="list-divider" id="patinentFlow"><span class="ui-li-count">0</span>Patient Flow</li>

            <li data-role="list-divider" id="collectDeliverTake">Collect/Deliver/Take<span class="ui-li-count">0</span></li>

            <li data-role="list-divider">Other<span class="ui-li-count">0</span></li>

        </ul>

      </div><!-- /content -->
      <div data-role="footer">

      </div>
      <div data-role="panel" id="left-panel" data-theme="b">
          <div data-role="header" data-theme="b">
              <h1>Compleated Jobs</h1>
          </div>

      </div><!-- /panel-messages -->

      <div data-role="panel" id="right-panel" data-display="push" data-position="right" data-theme="a">
        <div data-role="header" data-theme="a">
          <h1>Settings</h1>
        </div>

      </div><!-- /panel-Tools -->

  </div>

  <div data-dialog="true" id="job-page">
    <div data-role="header" data-theme="b">
        <h1>Patient Transfer</h1>
    </div><!--job-page header-->

    <div role="main" class="ui-content">
      <ul data-role="listview" data-inset="true" data-icon="false">
        <li><a href=""><h1>Patient Info: <strong>Joe Bloggs</strong></h1></a></li>
          <li><a href="#job-page">
          <label><strong>From: </strong><strong>HDU Cub G</strong></label>
          <label><strong>To: </strong></label>
          <label><strong>Transport: </strong></label>
          <label><strong>Infection Risk: </strong></label>
          <label><strong>Notes:</strong><h4>What a dick head!!</h4></label>
          <p class="ui-li-aside"><strong>Breach:</strong>14:32</p>
          </a></li>
      </ul>

    </div><!--job-page content-->
      <button class="ui-btn ui-corner-all" id="start">Start</button>
      <button class="ui-btn ui-corner-all" id="fin">Finished</button>
      <a href="" class="ui-btn ui-corner-all" id="cancel">Cancel</a>
      <a href="" class="ui-btn ui-corner-all" id="add-comment">Comment</a>
      <a href="" class="ui-btn ui-corner-all" id="delayed">Delayed</a>
  </div><!-- job-page-->

<script src="http://localhost/PDP/App2/js/fetch_data_job_list_mobile.js"></script>

  <script>

  $( document ).on( "pagecreate", "#demo-page", function() {
      $( document ).on( "swipeleft swiperight", "#demo-page", function( e ) {
          // We check if there is no open panel on the page because otherwise
          // a swipe to close the left panel would also open the right panel (and v.v.).
          // We do this by checking the data that the framework stores on the page element (panel: open).
          if ( $( ".ui-page-active" ).jqmData( "panel" ) !== "open" ) {
              if ( e.type === "swipeleft" ) {
                  $( "#right-panel" ).panel( "open" );
              } else if ( e.type === "swiperight" ) {
                  $( "#left-panel" ).panel( "open" );
              }
          }
      });
  });

  </script>



</body>
