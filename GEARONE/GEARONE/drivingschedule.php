
<?php
  if (strpos($courseoffer, '5 Hours') !== false) { 
?>
    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd1" class="shootdate form-control" value="<?php echo $appd1; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt1" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown1=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown1=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown1=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown1=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown1=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown1=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown1=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown1=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown1=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown1=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown1=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown1=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown1=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr1; ?></span>
        <span><?php echo $appointyyErr1; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd2" class="shootdate form-control" value="<?php echo $appd2; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt2" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr2; ?></span>
        <span><?php echo $appointyyErr2; ?></span>
      </div>               
    </div>
<?php
  }
    if (strpos($courseoffer, '7 Hours') !== false) { 
?> 
    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd1" class="shootdate form-control" value="<?php echo $appd1; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt1" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown1=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown1=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown1=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown1=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown1=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown1=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown1=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown1=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown1=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown1=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown1=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown1=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown1=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr1; ?></span>
        <span><?php echo $appointyyErr1; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd2" class="shootdate form-control" value="<?php echo $appd2; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt2" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown2=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown2=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown2=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown2=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown2=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown2=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown2=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown2=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown2=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown2=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown2=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown2=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown2=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr2; ?></span>
        <span><?php echo $appointyyErr2; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd3" class="shootdate form-control" value="<?php echo $appd3; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt3" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown3=='07:00 AM') echo 'selected="selected"'; ?>>07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown3=='08:00 AM') echo 'selected="selected"'; ?>>08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown3=='09:00 AM') echo 'selected="selected"'; ?>>09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown3=='10:00 AM') echo 'selected="selected"'; ?>>10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown3=='11:00 AM') echo 'selected="selected"'; ?>>11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown3=='12:00 PM') echo 'selected="selected"'; ?>>12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown3=='01:00 PM') echo 'selected="selected"'; ?>>01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown3=='02:00 PM') echo 'selected="selected"'; ?>>02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown3=='03:00 PM') echo 'selected="selected"'; ?>>03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown3=='04:00 PM') echo 'selected="selected"'; ?>>04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown3=='05:00 PM') echo 'selected="selected"'; ?>>05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown3=='06:00 PM') echo 'selected="selected"'; ?>>06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown3=='07:00 PM') echo 'selected="selected"'; ?>>07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr3; ?></span>
        <span><?php echo $appointyyErr3; ?></span>
      </div>               
    </div>
<?php
  }
    if (strpos($courseoffer, '10 Hours') !== false) { 
?>
    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd1" class="shootdate form-control" value="<?php echo $appd1; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt1" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown1=='07:00 AM') echo 'selected="selected"'; ?> 0>07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown1=='08:00 AM') echo 'selected="selected"'; ?> 0>08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown1=='09:00 AM') echo 'selected="selected"'; ?> 0>09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown1=='10:00 AM') echo 'selected="selected"'; ?> 0>10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown1=='11:00 AM') echo 'selected="selected"'; ?> 0>11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown1=='12:00 PM') echo 'selected="selected"'; ?> 0>12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown1=='01:00 PM') echo 'selected="selected"'; ?> 0>01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown1=='02:00 PM') echo 'selected="selected"'; ?> 0>02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown1=='03:00 PM') echo 'selected="selected"'; ?> 0>03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown1=='04:00 PM') echo 'selected="selected"'; ?> 0>04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown1=='05:00 PM') echo 'selected="selected"'; ?> 0>05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown1=='06:00 PM') echo 'selected="selected"'; ?> 0>06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown1=='07:00 PM') echo 'selected="selected"'; ?> 0>07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr1; ?></span>
        <span><?php echo $appointyyErr1; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd2" class="shootdate form-control" value="<?php echo $appd2; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt2" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown2=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown2=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown2=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown2=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown2=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown2=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown2=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown2=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown2=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown2=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown2=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown2=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown2=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr2; ?></span>
        <span><?php echo $appointyyErr2; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd3" class="shootdate form-control" value="<?php echo $appd3; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt3" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown3=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown3=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown3=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown3=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown3=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown3=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown3=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown3=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown3=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown3=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown3=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown3=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown3=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr3; ?></span>
        <span><?php echo $appointyyErr3; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd4" class="shootdate form-control" value="<?php echo $appd4; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt4" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown4=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown4=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown4=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown4=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown4=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown4=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown4=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown4=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown4=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown4=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown4=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown4=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown4=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr4; ?></span>
        <span><?php echo $appointyyErr4; ?></span>
      </div>               
    </div>
<?php
  }
    if (strpos($courseoffer, '15 Hours') !== false) { 
?>
<!--     <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd1" class="shootdate form-control" value="<?php echo $appd1; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt1" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown1=='07:00 AM') echo 'selected="selected"'; ?> 0>07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown1=='08:00 AM') echo 'selected="selected"'; ?> 0>08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown1=='09:00 AM') echo 'selected="selected"'; ?> 0>09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown1=='10:00 AM') echo 'selected="selected"'; ?> 0>10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown1=='11:00 AM') echo 'selected="selected"'; ?> 0>11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown1=='12:00 PM') echo 'selected="selected"'; ?> 0>12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown1=='01:00 PM') echo 'selected="selected"'; ?> 0>01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown1=='02:00 PM') echo 'selected="selected"'; ?> 0>02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown1=='03:00 PM') echo 'selected="selected"'; ?> 0>03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown1=='04:00 PM') echo 'selected="selected"'; ?> 0>04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown1=='05:00 PM') echo 'selected="selected"'; ?> 0>05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown1=='06:00 PM') echo 'selected="selected"'; ?> 0>06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown1=='07:00 PM') echo 'selected="selected"'; ?> 0>07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr1; ?></span>
        <span><?php echo $appointyyErr1; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd2" class="shootdate form-control" value="<?php echo $appd2; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt2" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown2=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown2=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown2=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown2=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown2=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown2=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown2=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown2=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown2=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown2=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown2=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown2=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown2=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr2; ?></span>
        <span><?php echo $appointyyErr2; ?></span>
      </div>               
    </div> -->

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd3" class="shootdate form-control" value="<?php echo $appd3; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt3" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown3=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown3=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown3=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown3=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown3=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown3=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown3=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown3=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown3=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown3=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown3=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown3=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown3=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr3; ?></span>
        <span><?php echo $appointyyErr3; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd4" class="shootdate form-control" value="<?php echo $appd4; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt4" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown4=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown4=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown4=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown4=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown4=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown4=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown4=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown4=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown4=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown4=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown4=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown4=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown4=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr4; ?></span>
        <span><?php echo $appointyyErr4; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd5" class="shootdate form-control" value="<?php echo $appd5; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt5" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown5=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown5=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown5=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown5=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown5=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown5=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown5=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown5=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown5=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown5=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown5=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown5=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown5=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr5; ?></span>
        <span><?php echo $appointyyErr5; ?></span>
      </div>               
    </div>
<?php
  }
    if (strpos($courseoffer, '20 Hours') !== false) { 
?>
    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd1" class="shootdate form-control" value="<?php echo $appd1; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt1" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown1=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown1=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown1=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown1=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown1=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown1=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown1=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown1=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown1=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown1=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown1=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown1=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown1=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr1; ?></span>
        <span><?php echo $appointyyErr1; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd2" class="shootdate form-control" value="<?php echo $appd2; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt2" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown2=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown2=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown2=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown2=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown2=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown2=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown2=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown2=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown2=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown2=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown2=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown2=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown2=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr2; ?></span>
        <span><?php echo $appointyyErr2; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd3" class="shootdate form-control" value="<?php echo $appd3; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt3" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown3=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown3=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown3=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown3=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown3=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown3=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown3=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown3=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown3=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown3=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown3=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown3=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown3=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr3; ?></span>
        <span><?php echo $appointyyErr3; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd4" class="shootdate form-control" value="<?php echo $appd4; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt4" class="form-control" required="required">
          <option value="07:00 AM"<?php if ($apptdropdown4=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM"<?php if ($apptdropdown4=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM"<?php if ($apptdropdown4=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM"<?php if ($apptdropdown4=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM"<?php if ($apptdropdown4=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM"<?php if ($apptdropdown4=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM"<?php if ($apptdropdown4=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM"<?php if ($apptdropdown4=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM"<?php if ($apptdropdown4=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM"<?php if ($apptdropdown4=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM"<?php if ($apptdropdown4=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM"<?php if ($apptdropdown4=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM"<?php if ($apptdropdown4=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr4; ?></span>
        <span><?php echo $appointyyErr4; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd5" class="shootdate form-control" value="<?php echo $appd5; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt5" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown5=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown5=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown5=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown5=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown5=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown5=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown5=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown5=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown5=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown5=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown5=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown5=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown5=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr5; ?></span>
        <span><?php echo $appointyyErr5; ?></span>
      </div>               
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label><b>Date For Appointment:</b></label>
        <input type="text" name="appd6" class="shootdate form-control" value="<?php echo $appd6; ?>" required autocomplete="off">
      </div>
      <div class="col-md-6">
        <label><b>Time For Appointment:</b></label>
        <select name="appt6" class="form-control" required="required">
          <option value="07:00 AM" <?php if ($apptdropdown6=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
          <option value="08:00 AM" <?php if ($apptdropdown6=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
          <option value="09:00 AM" <?php if ($apptdropdown6=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
          <option value="10:00 AM" <?php if ($apptdropdown6=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
          <option value="11:00 AM" <?php if ($apptdropdown6=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
          <option value="12:00 PM" <?php if ($apptdropdown6=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
          <option value="01:00 PM" <?php if ($apptdropdown6=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
          <option value="02:00 PM" <?php if ($apptdropdown6=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
          <option value="03:00 PM" <?php if ($apptdropdown6=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
          <option value="04:00 PM" <?php if ($apptdropdown6=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
          <option value="05:00 PM" <?php if ($apptdropdown6=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
          <option value="06:00 PM" <?php if ($apptdropdown6=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
          <option value="07:00 PM" <?php if ($apptdropdown6=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
        </select>
      </div>
      <div class="col-md-12 text-danger">
        <span><?php echo $appointyErr6; ?></span>
        <span><?php echo $appointyyErr6; ?></span>
      </div>               
    </div>
<?php
  }
    if (strpos($courseoffer, '8 Hours') !== false) { 
?>
      <div class="row mt-3">
        <div class="col-md-6">
          <label><b>Date For Appointment:</b></label>
          <input type="text" name="appd1" class="shootdate form-control" value="<?php echo $appd1; ?>" required autocomplete="off">
        </div>
        <div class="col-md-6">
          <label><b>Time For Appointment:</b></label>
          <select name="appt1" class="form-control" required="required">
            <option value="07:00 AM" <?php if ($apptdropdown1=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
            <option value="08:00 AM" <?php if ($apptdropdown1=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
            <option value="09:00 AM" <?php if ($apptdropdown1=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
            <option value="10:00 AM" <?php if ($apptdropdown1=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
            <option value="11:00 AM" <?php if ($apptdropdown1=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
            <option value="12:00 PM" <?php if ($apptdropdown1=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
            <option value="01:00 PM" <?php if ($apptdropdown1=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
            <option value="02:00 PM" <?php if ($apptdropdown1=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
            <option value="03:00 PM" <?php if ($apptdropdown1=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
            <option value="04:00 PM" <?php if ($apptdropdown1=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
            <option value="05:00 PM" <?php if ($apptdropdown1=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
            <option value="06:00 PM" <?php if ($apptdropdown1=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
            <option value="07:00 PM" <?php if ($apptdropdown1=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
          </select>
        </div>
        <div class="col-md-12 text-danger">
          <span><?php echo $appointyErr1; ?></span>
          <span><?php echo $appointyyErr1; ?></span>
        </div>               
      </div>

      <div class="row mt-3">
        <div class="col-md-6">
          <label><b>Date For Appointment:</b></label>
          <input type="text" name="appd2" class="shootdate form-control" value="<?php echo $appd2; ?>" required autocomplete="off">
        </div>
        <div class="col-md-6">
          <label><b>Time For Appointment:</b></label>
          <select name="appt2" class="form-control" required="required">
            <option value="07:00 AM" <?php if ($apptdropdown2=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
            <option value="08:00 AM" <?php if ($apptdropdown2=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
            <option value="09:00 AM" <?php if ($apptdropdown2=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
            <option value="10:00 AM" <?php if ($apptdropdown2=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
            <option value="11:00 AM" <?php if ($apptdropdown2=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
            <option value="12:00 PM" <?php if ($apptdropdown2=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
            <option value="01:00 PM" <?php if ($apptdropdown2=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
            <option value="02:00 PM" <?php if ($apptdropdown2=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
            <option value="03:00 PM" <?php if ($apptdropdown2=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
            <option value="04:00 PM" <?php if ($apptdropdown2=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
            <option value="05:00 PM" <?php if ($apptdropdown2=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
            <option value="06:00 PM" <?php if ($apptdropdown2=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
            <option value="07:00 PM" <?php if ($apptdropdown2=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
          </select>
        </div>
        <div class="col-md-12 text-danger">
          <span><?php echo $appointyErr2; ?></span>
          <span><?php echo $appointyyErr2; ?></span>
        </div>               
      </div>

      <div class="row mt-3">
        <div class="col-md-6">
          <label><b>Date For Appointment:</b></label>
          <input type="text" name="appd3" class="shootdate form-control" value="<?php echo $appd3; ?>" required autocomplete="off">
        </div>
        <div class="col-md-6">
          <label><b>Time For Appointment:</b></label>
          <select name="appt3" class="form-control" required="required">
            <option value="07:00 AM" <?php if ($apptdropdown3=='07:00 AM') echo 'selected="selected"'; ?> >07:00 AM</option>
            <option value="08:00 AM" <?php if ($apptdropdown3=='08:00 AM') echo 'selected="selected"'; ?> >08:00 AM</option>
            <option value="09:00 AM" <?php if ($apptdropdown3=='09:00 AM') echo 'selected="selected"'; ?> >09:00 AM</option>
            <option value="10:00 AM" <?php if ($apptdropdown3=='10:00 AM') echo 'selected="selected"'; ?> >10:00 AM</option>
            <option value="11:00 AM" <?php if ($apptdropdown3=='11:00 AM') echo 'selected="selected"'; ?> >11:00 AM</option>
            <option value="12:00 PM" <?php if ($apptdropdown3=='12:00 PM') echo 'selected="selected"'; ?> >12:00 PM</option>
            <option value="01:00 PM" <?php if ($apptdropdown3=='01:00 PM') echo 'selected="selected"'; ?> >01:00 PM</option>
            <option value="02:00 PM" <?php if ($apptdropdown3=='02:00 PM') echo 'selected="selected"'; ?> >02:00 PM</option>
            <option value="03:00 PM" <?php if ($apptdropdown3=='03:00 PM') echo 'selected="selected"'; ?> >03:00 PM</option>
            <option value="04:00 PM" <?php if ($apptdropdown3=='04:00 PM') echo 'selected="selected"'; ?> >04:00 PM</option>
            <option value="05:00 PM" <?php if ($apptdropdown3=='05:00 PM') echo 'selected="selected"'; ?> >05:00 PM</option>
            <option value="06:00 PM" <?php if ($apptdropdown3=='06:00 PM') echo 'selected="selected"'; ?> >06:00 PM</option>
            <option value="07:00 PM" <?php if ($apptdropdown3=='07:00 PM') echo 'selected="selected"'; ?> >07:00 PM</option>
          </select>
        </div>
        <div class="col-md-12 text-danger">
          <span><?php echo $appointyErr3; ?></span>
          <span><?php echo $appointyyErr3; ?></span>
        </div>               
      </div>
<?php
  }
?>      