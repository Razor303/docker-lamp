<form id="admin-location-form">
  <table id="location-form-table">
    <tbody>
      <tr><h2>Setup Loctions</h2></tr>
      <tr>
        <th></th>
        <th></th>
        <th>
          <select id="location-form-table-type">
            <option>Please Select</option>
            <option>Cub</option>
            <option>Bay</option>
            <option>Room</option>
          </select>
        </th>
      </tr>
      <tr>
        <th><label>Department</label></th>
        <th><label>Sub Department</label></th>
        <th><span></spsn></th>
      </tr>
      <tr>
        <td><input type="text" class="location-input" /></td>
        <td><input type="text" class="location-input" /></td>
        <td><input type="text" class="location-input" /></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="text" class="location-input-sub-1"  /></td>
      </tr>
    </tbody>
  </table>
  <table id="action-form-table">
    <tbody>
      <tr><h2>Setup Actions</h2></tr>
      <tr>
        <th></th>
        <th></th>
        <th>
          <select id="location-form-table-type">
            <option>Please Select</option>
            <option>Cub</option>
            <option>Bay</option>
            <option>Room</option>
          </select>
        </th>
      </tr>
      <tr>
        <th><label>Department</label></th>
        <th><label>Sub Department</label></th>
        <th><span></spsn></th>
      </tr>
      <tr>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
        <td><input type="text" /></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="text" /></td>
      </tr>
    </tbody>
  </table>
</form>
<table>
  <tbody>
    <tr>
      <th>
        Accident And Emergancy
      </th>
    </tr>
    <tr>
      <td>
        YAS
      </td>
    </tr>
  </tbody>
</table>


<script>
  $(function() {
    var $val_1 = "";
    var $val_2 = "";
    var row = "";

    $('.location-input-sub-1').on('change', function() {


      $val_1 = $('#quantity').val();
      $val_2 = $('#location-form-table-type').val();


      row = $('<tr><td></td><td></td><td><input type="text" class="location-input-sub-1"  /></td></tr>'); //create row
      $('#location-form-table').append(row);



    });
  });
</script>
