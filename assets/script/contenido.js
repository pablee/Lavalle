function login()
{
    var url = 'https://www.mercadolibre.com/jms/mla/lgz/msl/login?platform_id=mp&go=https://www.mercadopago.com/mla/accountSummary';
    var myWindow = window.open(url, "MsgWindow", "width=500,height=600");
}


function carrito()
{
    var url = 'https://www.mercadopago.com/mla/account/movements';
    var myWindow = window.open(url, "MsgWindow", "width=500,height=600");
}


function verMediosPago()
{
    var url = 'https://www.mercadopago.com.ar/promociones';
    var myWindow = window.open(url, "MsgWindow", "width=500,height=600");
}


function campoModificado(id)
{
    document.getElementById(id+"-modificado").value=1;
}