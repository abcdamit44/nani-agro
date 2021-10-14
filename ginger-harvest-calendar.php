<?php 
include "include/metatags.php"; 
include "include/header.php"; 
?>

<div class="main-container">
    <div class="about-section-1">
		<div class="container">
			<div class="about-header">
			    <h1>Ginger Harvest Calender</h1>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Ginger Harvest Calender</li>
				  </ol>
				</nav>
				
			</div>	
		</div>	
    </div>
</div>	

<div class="container mt-5 margin-bottom spice_harvest_calender">
    <div class="row justify-content-center">
   
        <table class="table table-bordered w-50">
            <tbody>
				<tr>
					<td class="text-center font-weight-bold m-1 har-cal-bg">Jan <i class="fas fa-check float-right har-cal-color"></td>
					<td class="text-center font-weight-bold m-1 har-cal-bg">Feb <i class="fas fa-check float-right har-cal-color"></i></td>
					<td class="text-center font-weight-bold m-1">Mar <i class="fas fa-times float-right"></i></td>
					<td class="text-center font-weight-bold m-1">Apr <i class="fas fa-times float-right"></i></td>
				</tr>
				<tr>
					<td class="text-center font-weight-bold m-1">May <i class="fas fa-times float-right"></i></td>
					<td class="text-center font-weight-bold m-1">Jun <i class="fas fa-times float-right"></i></td>
					<td class="text-center font-weight-bold m-1">Jul <i class="fas fa-times float-right"></i></td>
					<td class="text-center font-weight-bold m-1">Aug <i class="fas fa-times float-right"></i></td>
				</tr>
				<tr>
					<td class="text-center font-weight-bold m-1">Sep <i class="fas fa-times float-right"></i></td>
					<td class="text-center font-weight-bold m-1">Oct <i class="fas fa-times float-right"></td>
					<td class="text-center font-weight-bold m-1">Nov <i class="fas fa-times float-right"></i></td> <td class="text-center font-weight-bold m-1 har-cal-bg">Dec <i class="fas fa-check float-right har-cal-color"></i></td>
				</tr>
			</tbody>
        </table>
    </div>
</div>


<?php 
include "include/footer.php"; 
?>