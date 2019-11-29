function selectCub(value){
    setCookie('cub', value, 'Tue, 19 Jan 2038 03:14:07 GMT', '/');
    ajaxUpdate('cub');
    ajaxUpdate('type');
    ajaxUpdate('radius');
    ajaxUpdate('price');
    
    deleteCookie('type');
    deleteCookie('radius_front');
    deleteCookie('radius_back');
}

function selectType(value){
    setCookie('type', value, 'Tue, 19 Jan 2038 03:14:07 GMT', '/');
    ajaxUpdate('type');
    ajaxUpdate('radius');
    ajaxUpdate('price');

    deleteCookie('radius_front');
    deleteCookie('radius_back');
}

function selectRadius(value, term, spike){
    if(term == "radius_front")
        setCookie('radius_front', value, 'Tue, 19 Jan 2038 03:14:07 GMT', '/');
    if(term == "radius_back")
        setCookie('radius_back', value, 'Tue, 19 Jan 2038 03:14:07 GMT', '/');
    
    setCookie('spike', spike, 'Tue, 19 Jan 2038 03:14:07 GMT', '/');
        
    ajaxUpdate('radius');
    if(getCookie('type') == 1){
        if(getCookie('radius_front') && getCookie('radius_back')){
            ajaxUpdate('price');
        }
    }else 
        ajaxUpdate('price');
}

function ajaxUpdate(sterm){
    $.ajax({
        url: sterm + "Filter.php",
        cache: false,
        success: function (html) {
            $("#" + sterm + "_blocks").html(html);
            setActive();
        }
    });
}

function setActive(){
    var cub = getCookie('cub');
    var type = getCookie('type');
    var radius_front = getCookie('radius_front');
    var radius_back = getCookie('radius_back');
    var spike = getCookie('spike');
    if (!spike) spike = '';
    document.getElementById('cub' + '_value_' + cub).classList.add('active');
    document.getElementById('type' + '_value_' + type).classList.add('active');
    if(radius_front)
        document.getElementById('radius_front_value_' + radius_front).classList.add('active');
    if(radius_back)
        document.getElementById('radius_back_value_' + radius_back + '_spike_' + spike).classList.add('active');
}

$(document).ready(function(){
    setActive();
})

function buyForm(value){
    document.getElementById('buyForm').style.display = "flex";
    setCookie('product', value, 'Tue, 19 Jan 2038 03:14:07 GMT', '/');
}