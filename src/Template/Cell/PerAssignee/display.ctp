<?php
/**
  * @var \App\View\AppView $this
  */

// return debug($oldest_tickets[4]['assignee']);
// //       die;
        // return debug($result);
        // die;
 // onclick="alert('You are clicking on me');"

?>

<div>
	<div align="center" style="width: 40%; float: left; padding: 3%;">
		<div id = "cero" onclick="show_info(document.getElementById('cero').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "one" onclick="show_info(document.getElementById('one').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "dos" onclick="show_info(document.getElementById('dos').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "tres" onclick="show_info(document.getElementById('tres').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "cuatro" onclick="show_info(document.getElementById('cuatro').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "cinco" onclick="show_info(document.getElementById('cinco').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "seis" onclick="show_info(document.getElementById('seis').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "siete" onclick="show_info(document.getElementById('siete').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "ocho" onclick="show_info(document.getElementById('ocho').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "nueve" onclick="show_info(document.getElementById('nueve').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "diez" onclick="show_info(document.getElementById('diez').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "once" onclick="show_info(document.getElementById('once').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "doce" onclick="show_info(document.getElementById('doce').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "trece" onclick="show_info(document.getElementById('trece').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "catorce" onclick="show_info(document.getElementById('catorce').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "quince" onclick="show_info(document.getElementById('quince').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
		<div id = "dieciseis" onclick="show_info(document.getElementById('dieciseis').innerHTML);" style="width: 40%; height: 10%; margin: 1em; cursor: pointer; color: #ffffff; border-style: solid; border-radius: 25px;"></div>
	</div>
	<div style="text-align:center; margin: 4%; width: 50%; float: left; padding: 1% 2% 1% 2%; color: #3ADF00; background-color: #151515; border-style: solid; border-color: black; border-width:10px;">
		<!-- <div id = "image" style="height: 14cm; margin: 1em; padding: 15% 1% 10% 2%">
			<?php echo $this->Html->image('cityascii.png', ['alt' => 'CakePHP']); ?>
		</div> -->
		<div id = "image" style="height: 14cm; display: block; margin-left: auto margin-right:auto;">
			<?php echo $this->Html->image('spock.png', ['alt' => 'CakePHP']); ?>
		</div>
		<div id="name" style="width: 100%; height: 1cm; margin: 1em; color: white;"></div>
		<div id="cardContainer" style=" height: 14cm; overflow-y: auto; width: 100%;"></div>
	</div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

  	var array = <?php echo json_encode($result); ?>;
  	var columns = Object.keys( array ).map( p => Object.assign( array[p], {field:p} ) )
	var cContainer = document.getElementById( 'cardContainer' );
	cContainer.style.display = 'none';

  	function show_info(element)
  	{
  		var e = element;
  		// alert(element);
  			image.style.display = 'none';
  			cContainer.style.display = 'block';
  		var name = document.getElementById( 'name' );
  		var cardContainer= document.getElementById("cardContainer");
  		cardContainer.innerHTML = "";
  		cardContainer.scrollTop = 0;
  		array.forEach(function(product, index) {
  			if (product['name'] == element){
  				name.innerHTML = product['name'];
  				product['data'].forEach(function(producto, indice) {

  					var div_result_priority = document.createElement("div");
  					var div_label_priority = document.createElement("div");
  					div_label_priority.innerHTML = 'Priority:';
  					div_label_priority.style.float = 'left';
  					div_label_priority.style.width = '20%';
  					div_label_priority.id = "priority_label";
  					div_result_priority.innerHTML = (producto['priority']);
  					div_result_priority.style.textAlign ='left';
  					div_result_priority.id = "priority_result";
					cardContainer.appendChild(div_label_priority);
					cardContainer.appendChild(div_result_priority);

  					var div_result_created = document.createElement("div");
  					var div_label_created = document.createElement("div");
  					div_label_created.innerHTML = 'Created:';
  					div_label_created.style.float = 'left';
  					div_label_created.style.width = '20%';
  					div_label_created.id = "created_label";
  					div_result_created.innerHTML = (producto['created']);
  					div_result_created.style.textAlign ='left';
  					div_result_created.id = "created_result";
					cardContainer.appendChild(div_label_created);
					cardContainer.appendChild(div_result_created);

					var div_result_reporter = document.createElement("div");
  					var div_label_reporter = document.createElement("div");
  					div_label_reporter.innerHTML = 'Reporter:';
  					div_label_reporter.style.float = 'left';
  					div_label_reporter.style.width = '20%';
  					div_label_reporter.id = "reporter_label";
  					div_result_reporter.innerHTML = (producto['reporter']);
  					div_result_reporter.style.textAlign ='left';
  					div_result_reporter.id = "reporter_result";
					cardContainer.appendChild(div_label_reporter);
					cardContainer.appendChild(div_result_reporter);

					var div_result_issuenum = document.createElement("div");
  					var div_label_issuenum = document.createElement("div");
  					div_label_issuenum.innerHTML = 'RFS:';
  					div_label_issuenum.style.float = 'left';
  					div_label_issuenum.style.width = '20%';
  					div_label_issuenum.id = "issuenum_label";
  					 div_result_issuenum.innerHTML = "<a target='_blank' href='https://itops.chattanooga.gov/browse/RFS-"+(producto['issuenum'])+"'>"+(producto['issuenum'])+"</a>";
  					// div_result_issuenum.innerHTML = (producto['issuenum']);
  					div_result_issuenum.style.textAlign ='left';
  					div_result_issuenum.id = "issuenum_result";
					cardContainer.appendChild(div_label_issuenum);
					cardContainer.appendChild(div_result_issuenum);

					var div_result_issue_desc = document.createElement("div");
  					var div_label_issue_desc = document.createElement("div");
  					div_label_issue_desc.innerHTML = 'Description:';
  					div_label_issue_desc.style.float = 'left';
  					div_label_issue_desc.style.width = '20%';
  					div_label_issue_desc.id = "issue_desc_label";
  					div_result_issue_desc.innerHTML = (producto['issue_desc']);
  					div_result_issue_desc.style.padding = '0px 12% 5% 20%';
  					div_result_issue_desc.style.textAlign ='left';
  					div_result_issue_desc.id = "issue_desc_result";
					cardContainer.appendChild(div_label_issue_desc);
					cardContainer.appendChild(div_result_issue_desc);
				});
  		// 		// break;
  			};
  			// console.log(product['name']);
		});
  	}

	var cero = document.getElementById( 'cero' );
	cero.innerHTML = array[0]['name'];
	cero.style.backgroundColor = array[0]['color'];
	cero.style.borderColor = array[0]['bordercolor'];

	var one = document.getElementById( 'one' );
	one.innerHTML = array[1]["name"];
	one.style.backgroundColor = array[1]["color"];
	one.style.borderColor = array[1]['bordercolor'];

	var dos = document.getElementById( 'dos' );
	dos.innerHTML = array[2]["name"];
	dos.style.backgroundColor = array[2]["color"];
	dos.style.borderColor = array[2]['bordercolor'];

	var tres = document.getElementById( 'tres' );
	tres.innerHTML = array[3]["name"];
	tres.style.backgroundColor = array[3]["color"];
	tres.style.borderColor = array[3]['bordercolor'];

	var cuatro = document.getElementById( 'cuatro' );
	cuatro.innerHTML = array[4]["name"];
	cuatro.style.backgroundColor = array[4]["color"];
	cuatro.style.borderColor = array[4]['bordercolor'];

	var cinco = document.getElementById( 'cinco' );
	cinco.innerHTML = array[5]["name"];
	cinco.style.backgroundColor = array[5]["color"];
	cinco.style.borderColor = array[5]['bordercolor'];

	var seis = document.getElementById( 'seis' );
	seis.innerHTML = array[6]["name"];
	seis.style.backgroundColor = array[6]["color"];
	seis.style.borderColor = array[6]['bordercolor'];

	var siete = document.getElementById( 'siete' );
	siete.innerHTML = array[7]["name"];
	siete.style.backgroundColor = array[7]["color"];
	siete.style.borderColor = array[7]['bordercolor'];

	var ocho = document.getElementById( 'ocho' );
	ocho.innerHTML = array[8]["name"];
	ocho.style.backgroundColor = array[8]["color"];
	ocho.style.borderColor = array[8]['bordercolor'];

	var nueve = document.getElementById( 'nueve' );
	nueve.innerHTML = array[9]["name"];
	nueve.style.backgroundColor = array[9]["color"];
	nueve.style.borderColor = array[9]['bordercolor'];

	var diez = document.getElementById( 'diez' );
	diez.innerHTML = array[10]["name"];
	diez.style.backgroundColor = array[10]["color"];
	diez.style.borderColor = array[10]['bordercolor'];

	var once = document.getElementById( 'once' );
	once.innerHTML = array[11]["name"];
	once.style.backgroundColor = array[11]["color"];
	once.style.borderColor = array[11]['bordercolor'];

	var doce = document.getElementById( 'doce' );
	doce.innerHTML = array[12]["name"];
	doce.style.backgroundColor = array[12]["color"];
	doce.style.borderColor = array[12]['bordercolor'];

	var trece = document.getElementById( 'trece' );
	trece.innerHTML = array[13]["name"];
	trece.style.backgroundColor = array[13]["color"];
	trece.style.borderColor = array[13]['bordercolor'];

	var catorce = document.getElementById( 'catorce' );
	catorce.innerHTML = array[14]["name"];
	catorce.style.backgroundColor = array[14]["color"];
	catorce.style.borderColor = array[14]['bordercolor'];

	var quince = document.getElementById( 'quince' );
	quince.innerHTML = array[15]["name"];
	quince.style.backgroundColor = array[15]["color"];
	quince.style.borderColor = array[15]['bordercolor'];

	var dieciseis = document.getElementById( 'dieciseis' );
	dieciseis.innerHTML = array[16]["name"];
	dieciseis.style.backgroundColor = array[16]["color"];
	dieciseis.style.borderColor = array[16]['bordercolor'];

  </script>
