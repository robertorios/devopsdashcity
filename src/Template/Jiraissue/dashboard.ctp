<div class="container">
    <br /><br /><br /><br />
    <!-- overall row -->
    <div class="row">

        <!-- issues column -->
        <div class="col-md-3">
            <?= $this->cell('TaskList'); ?>
        </div> <!-- issues column -->

          <!-- buttons -->
        <div class="col-md-9">
            <?= $this->cell('MagicButtons'); ?>

            <br /><br />

            <!-- sub row -->
            <div class="row">

                <!-- main area -->
                <div class="col-md-8">
                    <?= $this->cell('MainInfo',[$issueKey]); ?>

                </div><!-- main area -->

                <!-- mystery area -->
                <div class="col-md-4">
                    <?= $this->cell('CommColumn'); ?>
                </div><!-- mystery area -->

            </div> <!-- sub row -->

            <div class="well">
                <?= $this->cell('Ticker'); ?>
            </div>
        </div> <!-- buttons -->

    </div> <!-- overall row -->
</div>
