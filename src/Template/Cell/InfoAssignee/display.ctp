<?php
/**
  * @var \App\View\AppView $this
  */

// return debug($result);
//       die;
?>


<a>Devops:</a>

  <select id = "selassig">
   </select>


 <script>
	var arrayinfo = <?php echo json_encode($result); ?>;
	var columns = Object.keys( arrayinfo ).map( p => Object.assign( arrayinfo[p], {field:p} ) )
	var container = document.getElementById( 'selassig' );
	// arrayinfo.forEach(function(product, index) {
	// 	opt.value = arrayinfo[product]
	// });


	for(element in arrayinfo)
	{
		
	   var opt = document.createElement("option");
	   opt.value= arrayinfo[element];
	   opt.text=arrayinfo[element];
	   container.appendChild(opt);
	   






	}
  </script>

