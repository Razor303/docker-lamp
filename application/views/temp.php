<div data-role="page">

</div>

<ul class="accordion">
  <li>
    <a href="javascript:void(0)" class="js-accordion-trigger">Accordion Item</a>
    <ul class="submenu">
      <li>
        <a href="javascript:void(0)">Sub Item 1</a>
      </li>
      <li>
        <a href="javascript:void(0)">Sub Item 2</a>
      </li>
    </ul>
  </li>
  <li>
    <a href="javascript:void(0)" class="js-accordion-trigger">Another Item</a>
    <ul class="submenu">
      <li>
        <a href="javascript:void(0)">Sub Item 1</a>
      </li>
      <li>
        <a href="javascript:void(0)">Sub Item 2</a>
      </li>
    </ul>
  </li>
</ul>




<div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header ui-widget-header ui-corner-all"><span class="ui-icon ui-icon-plusthick portlet-toggle"></span>';
        '<label class="cub">From: <span></span> Cub: <span>'.$jobs[$i]['from_location']. '</span></label><label class="PatientsName">Patients Name: <span>'. $jobs[$i]['patient_name'].'</span></label><label class="breachTime">Breach Time: <span>'. $jobs[$i]['breach_time'].'</span></label></div>
          <div class="portlet-content">
          <table>
            <tr>
              <td>
                <label>Requested By:</label><span>'. $jobs[$i]['requested_by'].'</span>
              </td>
              <td>
                <label>RAE:</label><span>'. $jobs[$i]['rae'].'</span>
              </td>
              <td>
                <label>To:</label><span>'. $jobs[$i]['to_location'].'</span>
              </td>
            </tr>
            <tr>
              <td>
                <label>Action:</label><span>'. $jobs[$i]['action'].'</span>
              </td>
              <td>
                <label>Transport:</label><span>'. $jobs[$i]['transport'].'</span>
              </td>
              <td>
                <label>Infection Risk:</label><span>'. $jobs[$i]['infection_risk'].'</span>
              </td>
            </tr>
            <tr>
              <td>
                <label>Current Location: </label><span></span>
              </td>
              <td>
                <button>Quick Request</button>
              </td>
            </tr>
            <tr>
              <td>
                <label>Notes: </label><span>'. $jobs[$i]['notes'].'</span>
              </td>
            </tr>
          </table>
          <img src="qrcode.php?text={hello mucker G}&size=150&padding=2" class="qrCode" alt="QRCode"/>
          </div>';
</div>';

<ul>
  <li><a href="#ed" class="uiTabs">ED</a></li>
  <li><a href="#ed_x-ray" class="uiTabs">ED X-Ray</a></li>
  <li><a href="#main_x-ray" class="uiTabs">Main X-Ray</a></li>
  <li><a href="#ct_mri" class="uiTabs">CT / MRI</a></li>
  <li><a href="#gastro" class="uiTabs">Gastro</a></li>
  <li><a href="#AMU" class="uiTabs">AMU</a></li>
  <li><a href="#ward_2" class="uiTabs">ward 2</a></li>

</ul>
  <div id="ed">
    <div class="subtabs">
      <ul>
        <li><a href="requestform/tab_content" class="uiTabs">AAA</a></li>
        <li><a href="#Assesment" class="uiTabs">Assesment</a></li>
          <button id="EMERGANCY">EMERGANCY</buton>
      </ul>
      <div id="aaa">

      </div>
      <div id="Assesment">
        <?php include 'includes/ED_subdepartments.php'; ?>
      </div>
    </div>
  </div><!--tab-1-->
<div id="ed_x-ray">
  <div class="subtabs">
    <ul>
      <li><a href="#MW" class="uiTabs">Main Waiting</a></li>
      <li><a href="#R1" class="uiTabs">Room 1</a></li>
        <button id="EMERGANCY">EMERGANCY</buton>
    </ul>
    <div id="MW">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
    <div id="R1">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
  </div>
</div><!--tab-2-->
<div id="main_x-ray">
  <div class="subtabs">
    <ul>
      <li><a href="#MW" class="uiTabs">Main Waiting</a></li>
      <li><a href="#R1" class="uiTabs">Room 1</a></li>
        <button id="EMERGANCY">EMERGANCY</buton>
    </ul>
    <div id="MW">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
    <div id="R1">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
  </div>
</div>
<div id="ct_mri">
  <div class="subtabs">
    <ul>
      <li><a href="#MW" class="uiTabs">Main Waiting</a></li>
      <li><a href="#R1" class="uiTabs">Room 1</a></li>
        <button id="EMERGANCY">EMERGANCY</buton>
    </ul>
    <div id="MW">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
    <div id="R1">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
  </div>
</div>
<div id="gastro">
  <div class="subtabs">
    <ul>
      <li><a href="#MW" class="uiTabs">Main Waiting</a></li>
      <li><a href="#R1" class="uiTabs">Room 1</a></li>
        <button id="EMERGANCY">EMERGANCY</buton>
    </ul>
    <div id="MW">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
    <div id="R1">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
  </div>
</div>
<div id="AMU">
  <div class="subtabs">
    <ul>
      <li><a href="#W1B1" class="uiTabs">Bay 1 Ward 1</a></li>
      <li><a href="#W1B2" class="uiTabs">Bay 2 Ward 1</a></li>
        <button id="EMERGANCY">EMERGANCY</buton>
    </ul>
    <div id="W1B1">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
    <div id="W1B2">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
  </div>
</div>
<div id="ward_2">
  <div class="subtabs">
    <ul>
      <li><a href="#B1" class="uiTabs">Bay 1</a></li>
      <li><a href="#B2" class="uiTabs">Bay 2</a></li>
        <button id="EMERGANCY">EMERGANCY</buton>
    </ul>
    <div id="B1">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
    <div id="B2">
      <?php include 'includes/ED_subdepartments.php'; ?>
    </div>
  </div>
</div>


<script>
$(function(){
      $( ".column" ).sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all"
      });
      $( ".portlet-toggle" ).on( "click", function() {
        var icon = $( this );
        icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
        icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
    });


    });
    </script>
