<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li <?php if($selected == 'inbox') { echo ' class="active"'; } ?>><a href="<?php echo base_url(); ?>folders/inbox">Inbox</a></li>
        <li <?php if($selected == 'sent') { echo ' class="active"'; } ?>><a href="<?php echo base_url(); ?>folders/sent">Sent</a></li>
        <li <?php if($selected == 'archive') { echo ' class="active"'; } ?>><a href="#">Archive</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li <?php if($selected == 'contacts') { echo ' class="active"'; } ?>><a href="#">Contacts</a></li>
    </ul>
</div>
<div class="visible-xs-block col-xs-12 mobile-nav-container">
    <ul class="nav nav-pills">
        <li <?php if($selected == 'inbox') { echo ' class="active"'; } ?>><a href="<?php echo base_url(); ?>folders/inbox">Inbox</a></li>
        <li <?php if($selected == 'sent') { echo ' class="active"'; } ?>><a href="<?php echo base_url(); ?>folders/sent">Sent</a></li>
        <li <?php if($selected == 'archive') { echo ' class="active"'; } ?>><a href="#">Archive</a></li>
        <li <?php if($selected == 'contacts') { echo ' class="active"'; } ?>><a href="#">Contacts</a></li>
    </ul>
</div>
