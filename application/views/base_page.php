
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Console</a></li>
    <li><a href="#tabs-2">Admin</a></li>
    <li><a href="#tabs-3">Rotas & Leave</a></li>
    <li><a href="#tabs-4">Reporting</a></li>
  </ul>
  <div id="tabs-1">
    <div class="expander">
  <a href="javascript:void(0)" class="expander-trigger expander-hidden">Tool & Search fillters</a>
  <div class="expander-content">
    <div class="search-bar">
      <form role="search" id="base-user">
        <input type="search" placeholder="Enter Search">
        <button type="submit" class="base-button">
          User
        </button>
      </form>
      <form role="search" base-location>
        <input type="search" placeholder="Enter Search">
        <button type="submit" class="base-button">
          Location
        </button>
      </form>
      <form role="search" id="base-action">
        <input type="search" placeholder="Enter Search">
        <button type="submit" class="base-button">
          Action
        </button>
      </form>
</div>
  </div>
</div>
<div id="operations_table_container">
<div class="column">

</div>
</div>
  </div>
  <div id="tabs-2">
    <ul class="accordion">
      <li>
        <a href="javascript:void(0)" class="js-accordion-trigger">Users</a>
        <ul class="submenu">
          <li>
            <?php
            include 'includes/admin-add-user.php';
            ?>
          </li>
          <li>
            <?php
            include 'includes/admin-output-user.php';
            ?>
          </li>
        </ul>
      </li>
    <li>

    <li>
      <a href="javascript:void(0)" class="js-accordion-trigger">Setup Actions/Locations/Etc</a>
      <ul class="submenu">
        <li>

        </li>
        <li>

        </li>
      </ul>
    </li>
  </ul>
</div>
  <div id="tabs-3">
    <?php
    include 'includes/admin-rotas&leave.php';
    ?>
  </div>
  <div id="tabs-4">


  </div>

</div>


</body>

<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
</script>

<script>
  $(document).ready(function() {
    $('.expander-trigger').click(function(){
      $(this).toggleClass("expander-hidden");
    });
  });
</script>

<script>
$('.js-accordion-trigger').bind('click', function(e){
  jQuery(this).parent().find('.submenu').slideToggle('fast');  // apply the toggle to the ul
  jQuery(this).parent().toggleClass('is-expanded');
  e.preventDefault();
});
</script>

<script>
  $(function() {
    $('#calendar').fullCalendar({
      resourceAreaWidth: 230,
      defaultDate: moment(),
      editable: true,
      theme: true,
      aspectRatio: 3.5,
      scrollTime: '06:00',
      header: {
        left: 'promptResource today prev,next',
        center: 'title',
        right: 'timelineDay,timelineThreeDays,agendaWeek,month'
      },
      customButtons: {
        promptResource: {
          text: '+ ',
          click: function() {
            var title = prompt('Room name');
            if (title) {
              $('#calendar').fullCalendar(
                'addResource',
                { title: title },
                true // scroll to the new resource?
              );
            }
          }
        }
      },
      defaultView: 'timelineDay',
      views: {
        timelineThreeDays: {
          type: 'timeline',
          duration: { days: 3 }
        }
      },
      resourceLabelText: 'Zones',
      resources: [
        { id: 'a', title: 'zone 1' },
        { id: 'b', title: 'zone 2', eventColor: 'green' },
        { id: 'c', title: 'zone 3', eventColor: 'orange' },
        { id: 'd', title: 'zone 4', children: [
          { id: 'd1', title: 'Teams 1' },
          { id: 'd2', title: 'Teams 2' }
        ] },
        { id: 'e', title: 'zone 5' },
        { id: 'f', title: 'zone 6', eventColor: 'red' },

      ],
      events: [
        { id: '1', resourceId: 'b', start: '2016-06-29T06:00:00', end: '2016-06-29T14:00:00', title: 'Justin' },
        { id: '2', resourceId: 'b', start: '2016-06-29T06:30:00', end: '2016-06-29T14:30:00', title: 'Ken' },
        { id: '3', resourceId: 'c', start: '2016-06-29T14:00:00', end: '2016-06-29T22:00:00', title: 'Neil' },
        { id: '4', resourceId: 'd1', start: '2016-06-29T14:30:00', end: '2016-06-29T22:30:00', title: 'Glen' },
        { id: '5', resourceId: 'f', start: '2016-06-29', end: '2016-07-07', title: 'Azz Sick Leave ' }
      ]
    });

  });

  // readjust sizing after font load
  $(window).on('load', function() {
    $('#calendar').fullCalendar('render');
  });
</script>

<script src="<? base_url() ?>js/fetch_data_job_list_base.js" type="text/javascript"></script>
