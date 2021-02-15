let dI,dF,valAdm,valNoche,total,dias
let meses = [1,3,5,7,8,10,12]

$('.fechaInicio').change((e)=>{
	let dateI = $('.fechaInicio').val().split("-")
	dI = dateI
	console.log(dI)
})

$('.fechaFinal').change((e)=>{
	let dateI = $('.fechaFinal').val().split("-")
	let contar
	dF = dateI
	if (dF[1] == dI[1]) {
		contar=parseInt(dF[2])-parseInt(dI[2])
	}else{
		if (dI[1] == meses[0] || dI[1] == meses[1] || dI[1] == meses[2] || dI[1] == meses[3] || dI[1] == meses[4] || dI[1] == meses[5] || dI[1] == meses[6]) {
			dI[2] = 31 - parseInt(dI[2])
			contar = dI[2] + parseInt(dF[2])
		}else{
			dI[2] = 30 - parseInt(dI[2])
			contar = dI[2] + parseInt(dF[2])
		}
	}
	dias = contar
	console.log(dias)
	$('#cantNoche').text(dias)
	valNoche = parseInt($('#valNoche').text())
	valAdm = $('#valAdmin').text()
	total = (valNoche*dias)+parseInt(valAdm)
	$('#Total').text(total)
	$('#costo').attr('value', total)
})

let	fechaactual=document.querySelectorAll("#fecha")

function setfecha(item){
	let hoy = new Date()
	let	dia = hoy.getDate()
	let mes = hoy.getMonth()
	let anio = hoy.getFullYear()
	if (dia<10){
		dia="0"+hoy.getDate()
	}
	if (mes<10){
		mes="0"+hoy.get.Month()
	}
	item.setAttribute("min",anio+"-"+(mes+1)+"-"+dia)
}
fechaactual.forEach(setfecha)