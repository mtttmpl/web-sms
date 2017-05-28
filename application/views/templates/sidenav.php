<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li <?php if($selected == 'inbox') { echo ' class="active"'; } ?>><a href="<?php echo base_url(); ?>">Inbox</a></li>
        <li <?php if($selected == 'sent') { echo ' class="active"'; } ?>><a href="<?php echo base_url(); ?>sent">Sent</a></li>
        <li <?php if($selected == 'archive') { echo ' class="active"'; } ?>><a href="#">Archive</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li <?php if($selected == 'contacts') { echo ' class="active"'; } ?>><a href="#">Contacts</a></li>
    </ul>
</div>
