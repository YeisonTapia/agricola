<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Declaracion soporte</title>
    <style>
        body {
            font-family: "Tahoma", "Geneva", sans-serif;
            font-weight:normal;
            font-size:11pt;
            color:black;
            margin:0px 0px 0px 0px;
            width:700px;
            height:1000px;
            padding:0px;
        }
    </style>
    </head>
<body>
<img src="img/targeta1.png" width="190" height="50">
<h5>ibague:&nbsp;&nbsp;{{$dsc->fecha}}</h5>
<h3 align="center">DECLARACION SOPORTE DE CUENTA<br/><br />DOCUMENTO EQUIVALENTE No. {{ $dsc->id }} <br/>Pago No. 1</h3>
    <p><b>Contrato No.&nbsp;</b><u>{{ $dsc->Num_Cont }}</u><br><b>ACTIVIDAD:&nbsp;&nbsp;</b><u>{{ $dsc->Actividad }}</u><br><b>VALOR CONTRATO:&nbsp;</b><u>${{ number_format($dsc->val_contra)}}.oo</u></p> 
    <h4>EJECUCION DEL CONTRATO</h4>
    <p align="justify"><i>Declaro bajo la gravedad del juramento que se han  efectuado los aportes a la seguridad social por los ingresos materiales de esta factura.  Dando cumplimiento  a  Ley 797 de 2003 El artículo 3° del artículo 15 de la Ley 100 de 1993 según  Min protección Social, Concepto 327934, 11/3/2010 .</i></p>

    <p><b>PARA  LO CUAL ANEXO:</b></p>
    <p>APORTES A LA SEGURIDAD SOCIAL:<span style = "margin: 1px; padding: 0 0 0 80px;">{{ $dsc->apor_se_soci }}</span></p>
    <p>APORTES VOLUNTAROS DE PENSION:<span style = "margin: 1px; padding: 0 0 0 66px;">{{ $dsc->aport_volu }}</span></p>
    <p>APORTES AFC:<span style = "margin: 1px; padding: 0 0 0 232px;">{{ $dsc->aport_afc }}</span></p>
    <p align="justify"><i>Que para dar cumplimiento al Decreto 099 de 2.013,   aplicable a las personas naturales  pertenecientes a la categoría de empleado  como trabajador independiente, declara bajo la gravedad del juramento que:</i></p>
   <h5>ESTOY OBLIGADO A PRESENTAR DECLARACION DE RENTA: </h5>
    <p style = "margin: 1px; padding: 0 0 0 400px;">{{ $dsc->decla_renta }}</p>
    <h5 align="justify">MIS  INGRESOS  CORRESPONDE EN UN PORCENTAJE IGUAL O SUPERIOR AL 80% DE LA REALIZACION DE UNA ACTIVIDADES ECONOMICA: </h5>
    <p style = "margin: 1px; padding: 0 0 0 400px;">{{ $dsc->ingre_corr }}</p>
    <h5>MIS  INGRESOS  ANUALES  SUPERAN  LAS 4.073 UVT ($109.323.393):</h5>
    <p style = "margin: 1px; padding: 0 0 0 400px;">{{ $dsc->ingre_anual }}</p>
    <img src="img/img.png" alt="">
    <p>Se firma dando fe que lo antes escrito corresponde a la realidad tributaria del prestador del servicio. </p>
    
</body>
</html>
    
    

