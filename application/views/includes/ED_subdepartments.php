<div class="left-screen-split">
  <?php echo form_open('Requestform/jobs', 'id="mannual-request" class="mannual-request-form"'); ?>
    <div id="messages"></div>
    <table>
      <tbody>
        <tr>
          <?php
            include 'requestForm-action.php';
          ?>
          <td class="control-group"></td>
        </tr>
        <tr>
          <?php
            include 'from.php';
          ?>
          <td class="control-group"></td>
        </tr>
        <tr>
            <?php
            include 'to.php';
            ?>
          <td class="control-group"></td>
        </tr>
        <tr>
            <?php
            include 'transport.php';
            ?>
          <td class="control-group"></td>
        </tr>
        <tr>
            <?php
            include 'rae.php';
            ?>
          <td class="control-group"></td>
        </tr>
        <tr>
            <?php
            include 'patientName.php';
            ?>
          <td class="control-group"></td>
        </tr>
        <tr>
            <?php
            include 'infectionRisk.php';
            ?>
          <td class="control-group"></td>
        </tr>
        <tr>
            <?php
            include 'notes.php';
            ?>
        </tr>
        <tr>
          <?php
            include 'breach.php';
          ?>
          <td class="control-group"></td>
        </tr>
        <tr>
            <?php
              include 'requestedBy.php';
            ?>
            <td class="control-group"></td>
        </tr>
        <tr>
          <td></td>
          <td><button id="submit">Submit</button>
            <button id="clear">Clear</button></td>
          <td></td>
        </tr>
    </tbody>
  </table>
<?php echo form_close(); ?>
</div><!--left-screen-split-->

<div class="right-screen-split">
<h3 class="job-list-title">Sortable Job List</h3>
  <?php
    include 'portlet.php';
  ?>
</div><!--right-screen-split-->
