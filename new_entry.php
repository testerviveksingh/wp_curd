<?php
if(isset($_REQUEST['entryid']) && $_REQUEST['entryid']!='') {
  global $wpdb;
  $data = $wpdb->get_row( "SELECT * FROM `wp_crud` WHERE id = '".$_REQUEST['entryid']."'" );
?>
  <div class="wrap wqmain_body">
    <h3 class="wqpage_heading">Edit Data</h3>
    <div class="wqform_body">
      <form name="update_form" id="update_form">
        <input type="hidden" name="wqentryid" id="wqentryid" value="<?=$_REQUEST['entryid']?>" />
        <div class="wqlabel">Name</div>
        <div class="wqfield">
          <input type="text" class="wqtextfield" name="wqname" id="wqname" placeholder="Enter Your Name" value="<?=$data->name?>" />
        </div>
        <div id="wqname_message" class="wqmessage"></div>

        <div>&nbsp;</div>

        <div class="wqlabel">Address</div>
        <div class="wqfield">
          <textarea name="wqaddress" class="wqtextfield" id="wqaddress" placeholder="Enter Your Address"><?=$data->address?></textarea>
        </div>
        <div id="wqaddress_message" class="wqmessage"></div>

        <div>&nbsp;</div>

        <div><input type="submit" class="wqsubmit_button" id="wqedit" value="Edit" /></div>
        <div>&nbsp;</div>
        <div class="wqsubmit_message"></div>

      </form>
    </div>
  </div>
<?php
} else {
?>
<div class="wrap wqmain_body">
  <h3 class="wqpage_heading">New Data</h3>
  <div class="wqform_body">
    <form name="entry_form" id="entry_form">

      <div class="wqlabel">Name</div>
      <div class="wqfield">
        <input type="text" class="wqtextfield" name="wqname" id="wqname" placeholder="Enter Your Name" value="" />
      </div>
      <div id="wqname_message" class="wqmessage"></div>

      <div>&nbsp;</div>

      <div class="wqlabel">Address</div>
      <div class="wqfield">
        <textarea name="wqaddress" class="wqtextfield" id="wqadress" placeholder="Enter Your Address"></textarea>
      </div>
      <div id="wqaddress_message" class="wqmessage"></div>

      <div>&nbsp;</div>

      <div><input type="submit" class="wqsubmit_button" id="wqadd" value="Add" /></div>
      <div>&nbsp;</div>
      <div class="wqsubmit_message"></div>

    </form>
  </div>
</div>
<?php } ?>
