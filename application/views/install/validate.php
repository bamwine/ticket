

<div class="install-step-group">
    <div class="col-md-2 col-lg-2 col-sm-2 col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
        <div class="circle circle1 active">
            1
        </div>   
        <div class="step-line "></div> 
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle2">
            2
        </div>
        <div class="step-line "></div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3">
            3
        </div>
        <div class="step-line "></div>
    </div>
	
	<div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3">
            4
        </div>
        <div class="step-line "></div>
    </div>
	<div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle3">
            5
        </div>
        <div class="step-line "></div>
    </div>
	
    <div class="col-md-2 col-lg-2 col-sm-2">
        <div class="circle circle4">
            6
        </div>
        Finish
    </div>
    <div class="clear"></div>
</div>

														
<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('select a Flight');?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

 <form action="<?php echo base_url()?>install/validate/confirm" method="post">

<table id="example23" class="display nowrap" cellspacing="0" width="100%">
									<thead>
									<tr>

									<th><?php echo get_phrase('FLIGHT NUMBER');?></th>

									<th><?php echo get_phrase('ORIGIN / DESTINATION');?></th>
									<th><?php echo get_phrase('TICKET PRICE');?></th>
									<th><?php echo get_phrase('DEPARTURE / ARRIVAL DATE');?></th>
									<th><?php echo get_phrase('DEPARTURE / ARRIVAL TIME');?></th>

									<th><?php echo get_phrase('Choose');?></th>
									</tr>
									</thead>

									<tbody>
									<?php 
									$flightschedule	= $flightschedule;
									foreach($flightschedule as $row):?>
									<tr>


									<td><?php echo $row['flight_no']?></td>

									<td>
									<?php
									echo  '<button type="button" class="btn btn-success btn-circle btn-xs" >O</button> &nbsp;&nbsp;<div class="label label-success">' . get_phrase($row['from_city']) . '</div> <br>';
									echo '<button type="button" class="btn btn-danger btn-circle btn-xs" >D</button> &nbsp;&nbsp;<div class="label label-danger">' . get_phrase($row['to_city']) . '</div>';
									?>
									</td>
									<td>
									<?php
									echo  '<button type="button" class="btn btn-success btn-circle btn-xs" >ECO</button> &nbsp;&nbsp;<div class="label label-success">' . get_phrase($row['price_economy']) . '</div> <br>';
									echo '<button type="button" class="btn btn-danger btn-circle btn-xs" >BUS</button> &nbsp;&nbsp;<div class="label label-danger">' . get_phrase($row['price_business']) . '</div>';
									?>
									</td>                
									<td>
									<?php
									echo  '<button type="button" class="btn btn-info btn-circle btn-xs" ><i class="fa fa-plane"></i></button> &nbsp;&nbsp;<div class="label label-info">' . get_phrase($row['departure_date']) . '</div> <br>';
									echo '<button type="button" class="btn btn-danger btn-circle btn-xs" ><i class="fa fa-plane-arrive"></i></button> &nbsp;&nbsp;<div class="label label-danger">' . get_phrase($row['arrival_date']) . '</div>';
									?>
									</td>
									<td>
									<?php
									echo  '<button type="button" class="btn btn-info btn-circle btn-xs" ><i class="fa fa-plane"></i></button> &nbsp;&nbsp;<div class="label label-info">' . get_phrase($row['departure_time']) . '</div> <br>';
									echo '<button type="button" class="btn btn-danger btn-circle btn-xs" ><i class="fa fa-plane-arrive"></i></button> &nbsp;&nbsp;<div class="label label-danger">' . get_phrase($row['arrival_time']) . '</div>';
									?>
									</td>                



									<td>
									<div class="form-group">
									<input type="radio" class="check form-control" id="select_flight" value="<?php echo $row['flight_no']?>" name="select_flight" data-radio="iradio_flat-red" onclick="return get_calc_value()">
									<label for="select_flight">Book</label>
									</div>   
									</td>
									</tr>
									<?php endforeach;?>
									</tbody>
									</table>



<div class="row">
	<div class="form-group col-md-8 col-md-offset-2 text-right">
		<button class="btn btn-green btn-sm btn-icon icon-left"><i class="fa fa-user"></i>Next</button>
	</div>
</div>					

</form>

</div>
</div>
</div>
</div>
</div>
														
