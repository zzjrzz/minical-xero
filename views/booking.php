<div class="app-page-title">
	<div class="page-title-wrapper">
		<div class="page-title-heading">
			<div class="page-title-icon">
				<i class="pe-7s-diskette text-success"></i>
			</div>
			<div><?php echo l('minical-extension-boilerplate/booking list'); ?>

		</div>
	</div>
</div>
</div>

<div class="main-card card">
    <div class="card-body">
        <!-- Required for opening booking dialog while viewing [Show all...] pages -->
        <div id="booking_dialog"></div>
        <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th class="text-center"><?php echo l('minical-extension-boilerplate/booking_id', true);?></th>

                <th class="text-center"><?php echo l('minical-extension-boilerplate/room_number', true);?></th>

                <th class="text-center"><?php echo l('minical-extension-boilerplate/check_in_date', true);?></th>

                <th class="text-center"><?php echo l('minical-extension-boilerplate/check_out_date', true);?></th>

                <th class="text-center"><?php echo l('minical-extension-boilerplate/customer_name', true);?></th>

            </tr>
            <?php 
				if (isset($bookings) && $bookings):
				foreach ($bookings as $booking) : 
				if (isset($booking['booking_id'])):
			?>
           	<tr class='booking' >
                <td class="text-center"><?php echo $booking['booking_id']; ?></td>
                <td class="text-center"><?php echo $booking['room_name'] ? $booking['room_name'] : 'Not Assigned'; ?>
                </td>
                <td class="text-center"><?php echo $booking['check_in_date']; ?></td>
                <td class="text-center"><?php echo $booking['check_out_date']; ?></td>
                <td class="text-center"><?php echo $booking['customer_name']; ?></td>
            </tr>
            <?php 
			endif;
			endforeach;
			else: ?>
            <tr class='booking' data-booking-id=''>
                <td></td>
                <td></td>
                <td class="text-center">
                    <h3><?php echo l('minical-extension-boilerplate/no_bookings_found', true);?></h3>
                </td>
                <td></td>
                <td></td>
            </tr>


            <?php 
		endif;
	?>
        </table>
        </div>
    </div>
</div>
