var cont;
  var cont1;
  var comeca_mes;
  var d           = new Date();
  var m           = new Date();
  var mes         = new Array("Janeiro", "Fevereiro", "Mar&ccedil;o", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
  var ult_dia_mes = new Array();
  var pri_dia_mes = new Array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");

  ult_dia_mes[0]  = 31;

  if(d.getFullYear() % 4 == 0)
    ult_dia_mes[1]  = 29;
  else
    ult_dia_mes[1]  = 28;

  ult_dia_mes[2]  = 31;
  ult_dia_mes[3]  = 30;
  ult_dia_mes[4]  = 31;
  ult_dia_mes[5]  = 30;
  ult_dia_mes[6]  = 31;
  ult_dia_mes[7]  = 31;
  ult_dia_mes[8]  = 30;
  ult_dia_mes[9]  = 31;
  ult_dia_mes[10] = 30;
  ult_dia_mes[11] = 31;

  m.setDate(1);

  for(i=0;i<=6;i++)
  {
    if(m.toString().slice(0,3) == pri_dia_mes[i])
      comeca_mes = i;
  }

  function calendario()
  {
  var aux = 0;
  var dia = 0;
  var res = "";

  res += "<table border='1' width='350' cellpadding='0' cellspacing='0'>";
  res += "<tr><th colspan='7' style='width:350px;'>" + mes[d.getMonth()] + " de " + d.getFullYear() + "</th></tr>";
  res += "<tr><th>Dom</th><th>Seg</th><th>Ter</th><th>Qua</th><th>Qui</th><th>Sex</th><th>S&aacute;b</th></tr>";

  for(cont=1;cont<=6;cont++)
  {
    res += "<tr>";

    for(cont1=1;cont1<=7;cont1++)
    {
      if((aux >= comeca_mes) && (dia < ult_dia_mes[d.getMonth()]))
      {
        dia += 1;

        if(dia == d.getDate())
          res += "<th style='background:#FF0;'>" + dia + "</th>";
        else if(dia < d.getDate())
          res += "<th style='background:#CCC;'><em>" + dia + "</em></th>";
        else
          res += "<th style='background:#FFC;'><em>" + dia + "</em></th>";
      }
      else
        res += "<th style='background:#ffa054;'>&nbsp;</th>";

      aux += 1;
    }

    res += "</tr>";
  }

  res += "</table>";

  document.getElementById("calendario").innerHTML = res;
  }