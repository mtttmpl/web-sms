<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-title">
        <h2>Inbox</h2>
        <div class="toolbar pull-right">
          <?php $this->view('templates/toolbar'); ?>
        </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 50px;"></th>
            <th>From</th>
            <th>Message</th>
            <th>Time</th>
          </tr>
        </thead>
        <tbody>
            <?php
                if(empty($list)) :
                    echo '<tr><td colspan="4">It looks like you don\'t have any new messages</td></tr>';
                else :
                  foreach($list as $row) :
                      $post_date = strtotime($row['time']);
                      $now = strtotime("now");
                      echo '<tr>';
                        if($row['status'] == 0) :
                           echo '<td><div class="unread"></div></td>';
                        else:
                           echo '<td></td>';
                        endif;
                        echo '<td>'.$row['number_from'].'</td>';
                        echo '<td>'.$row['message'].'</td>';
                        echo '<td>'. timespan($post_date, $now) . ' ago' . '</td>';
                      echo '</tr>';
                  endforeach;
                endif;
            ?>
        </tbody>
      </table>
  </div>
</div>
