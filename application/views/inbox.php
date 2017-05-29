<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-title">
        <h2>Inbox</h2><div class="toolbar pull-right"><?php $this->view('templates/toolbar'); ?></div>
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
                // output looped table to show UI sample
                $limit = 25;
                $count = 1;
                while($limit > $count) :
                    $post_date = strtotime("-2 hours");
                    $now = strtotime("now");
                    echo '<tr>
                      <td><div class="unread"></div></td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>'. timespan($post_date, $now) . ' ago' . '</td>
                    </tr>';
                    $count++;
                endwhile;
            ?>
        </tbody>
      </table>
  </div>
</div>
