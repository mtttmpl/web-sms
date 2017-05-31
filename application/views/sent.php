<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-title">
        <h2>Sent<div class="toolbar pull-right"><?php $this->view('templates/toolbar'); ?></div></h2>
    </div>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 50px;"></th>
            <th>To</th>
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
                    $post_date = strtotime("-4 hours");
                    $now = strtotime("now");
                    echo '<tr>
                      <td></td>
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
