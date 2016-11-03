<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<body>

  <div data-role="page" data-url="main-page" data-theme="a">
    <div data-role="header" data-position="fixed" data-theme="b">
      <h1>PortersDesk.io Login</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
          <label for="select-native-site">Site:</label>
          <select name="select-native-site" id="select-native-site">
              <option value="NULL">Please Select</option>
              <option value="bri">BRI</option>
              <option value="slh">SLH</option>
          </select>
        <label for="username" class="select">Username:</label>
        <input type="text" id="username" value="" autocomplete="off"/>
        <label for="password" class="select">Password:</label>
        <input type="password" id="password" value="" autocomplete="off" />
    </div>
        <button class="btn-" >submit</button>
    </div><!-- /content -->
    <div id="login-img-container">
      <img src="" alt="" />
    </div>
  </div><!--page-->

</body>
