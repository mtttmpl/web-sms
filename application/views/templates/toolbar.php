<div class="btn-group">
    <?php
        if(isset($page) && $page == 'compose') :
             echo '<a class="btn btn-default" href="javascript:window.history.back();"><i class="glyphicon glyphicon-remove"></i></a>';
        else :
            echo '<a class="btn btn-default" href="'.base_url().'compose/message"><i class="glyphicon glyphicon-edit"></i></a>';
        endif;
    ?>
</div>
