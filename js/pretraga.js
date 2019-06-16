$(document).ready(()=>{
	//JSON objekat koji cemo da saljemo na server da trazi u bazi
	var podaci = {
		ime: "",
		procenat: "",
		godina: "",
		proizv: "",
		drzavaTocenja: ""
	};
	
	function pretrazi(poslao, vrednost){
		podaci[poslao] = vrednost;
		$.ajax({
			url: "js/pretrazi.php",
			method: "POST",
			data: podaci,
			success: function(response){
				if(response == "nista") return;
				$("#rezlista").empty();
				var res = $.parseJSON(response);
				for(i = 0; i<res.length; i++){
					var pivo = res[i];
					var htmlString = "<li><div class=\"kockapiva\">";
					
						htmlString += "<div class=\"pivoSlika\">";
							htmlString += "<img src=\"" + pivo["urlSlike"] + "\" class=\"slicica\" alt=\"Slika nije dostupna\">";
							
							htmlString += "</img>";
						htmlString += "</div>";
						htmlString += "<div class=\"pivoInfo\" class=\"listaInformacija\">";
							htmlString += "<h3 class=\"pivoIme\">" + pivo["naziv"] + "</h3>";
							htmlString += "<ul class=\"listaInformacija\">";
								htmlString += "<li>Godina porekla: " + pivo["godina_porekla"] + "</li>";
								htmlString += "<li>Drzava tocenja: " + pivo["drzava_tocenja"] + "</li>";
								htmlString += "<li>" + pivo["procenat"] + "% alkohola";
							htmlString += "</ul>";
						htmlString +=  "</div>";
					
					htmlString += "</div></li>";
			
					
					$("#rezlista").append(htmlString);
				}
			}
		});
		
	}
	
	//$("#id") selektor
	//kod obicnih polja $("#id").val();
 	
	$("#ime").change(function(){
		pretrazi("ime", $(this).val());
	});
	$("#procenat").change(function(){
		pretrazi("procenat", $(this).val());
	});
	$("#godina").change(function(){
		pretrazi("godina", $(this).val());
	});
	$("#proizv").change(function(){
		//pokro sa interneta
		pretrazi("proizv", $("#proizv option:selected").attr("value"));
	});
	$("#drzavaTocenja").change(function(){
		pretrazi("drzavaTocenja", $(this).val());
	});
	
});