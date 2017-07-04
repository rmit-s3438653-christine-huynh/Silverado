<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php include_once('head.php');?>

<body id="ticketPage">

<?php include_once('topOfPage.php');?>

  <section>

    <div class ="movies">
      <div class ="align">
        <h1><span class="title">Standard</span></h1>
        <div class="texttwo">
          <h4>Monday-Tuesday(All Day) & Monday-Friday (1pm Only)</h4>
          <div class ="alignPrice">
            <p>Full - $12</p>
            <p>Concession - $10</p>
            <p>Child - $8</p>
          </div>
          <h4>Wednesday-Friday(not 1pm) & Saturday-Sunday(All day)</h4>
          <div class ="alignPrice">
            <p>Full - $18</p>
            <p>Concession - $15</p>
            <p>Child - $12</p>
          </div>
        </div>
      </div>
    </div>

    <div class ="movies">
      <div class ="align">
        <h1><span class="title">First Class</span></h1>
        <div class="texttwo">
          <h4>Monday-Tuesday(All Day) & Monday-Friday (1pm Only)</h4>
          <div class ="alignPrice">
            <p class>Adult - $25</p>
            <p>Child - $20</p>
          </div>       
          <h4>Wednesday-Friday(not 1pm) & Saturday-Sunday(All day)</h4>
          <div class ="alignPrice">
            <p>Adult - $30</p>
            <p>Child - $25</p>
          </div>
        </div>
      </div>
    </div>

    <div class ="movies">
      <div class ="align">
        <h1><span class="title">Beanbag</span></h1>
        <div class="texttwo">
          <h4>Monday-Tuesday(All Day) & Monday-Friday (1pm Only)</h4>
          <div class ="alignPrice">
            <p>Beanbag - $20</p>
          </div>
          <h4>Wednesday-Friday(not 1pm) & Saturday-Sunday(All day)</h4>
          <div class ="alignPrice">
            <p>Beanbag - $30</p>
          </div>
          <p>*Beanbag price allows up to 2 adults OR 1 adult + 1 child OR up to 3 children. One price fits all!</p>
        </div>
      </div>
    </div>

  </section>

  <?php include_once('footer.php');?>

</body>

</html>