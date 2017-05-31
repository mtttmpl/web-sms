<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-title">
        <h2>Compose Message</h2>
        <div class="toolbar pull-right">
            <?php
                $toolbar_data['page'] = 'compose'
            ?>
          <?php $this->view('templates/toolbar', $toolbar_data); ?>
        </div>
    </div>
    <?php
        $form_attributes = array('class' => 'form-horizontal');
        echo form_open('compose/send', $form_attributes);
    ?>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">To</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Number" name="to">
            </div>
        </div>
        <div class="form-group">
            <label for="inputMessage" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
            <textarea class="form-control" id="inputMessage" placeholder="Message" name="message"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </form>
</div>
