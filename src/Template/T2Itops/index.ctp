<br /><br /><br /><br />

<div style="width: 105%; margin: auto">

    <div class="col-md-9" style="width: 100%; height: auto%; padding: 3%; background-color: #F2FFFE;">

                <div class="col-md-9" style="width: 45%; height: 350px; float: left; padding: 10px 15px 10px 10px;">
                    <?= $this->cell('LineChart'); ?>
                </div>
                
                <div class="col-md-9" style="width: 55%; height: 350px; float: right; padding: 10px 50px 10px; margin-bottom: 10px;">
                    <?= $this->cell('OldestTicket',[$names]) ?>
                </div>
    </div>    



    <div class="col-md-9" style="width: 100%; padding: 5%;">
                <div class="col-md-9" style="width: 50%; height: auto; float: left; padding: 10px 5px 10px; margin: -50px; border-style: solid; border-color: blue;">
                    <?= $this->cell('InfoAssignee', [$names]); ?>
                </div>

                <div class="col-md-9" style="width: 50%; height: auto; float: right; padding: 10px 5px 10px; margin: -50px;">
                    <?= $this->cell('DeptPie', [$depts]); ?>
                </div>
                
    
    </div>


    <div class="col-md-9" style="width: 100%; background-color: #F2FFFE">

                <!-- <div class="col-md-9" style="height: auto; border-style: solid; border-color: blue;"> -->
                    <?= $this->cell('PerAssignee',[$names]); ?>
                <!-- </div> -->
                
    </div>  
</div>