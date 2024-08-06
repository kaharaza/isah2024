let url =
window.location.protocol +
"//" +
window.location.hostname +
"/isahcmu";

window.onload = function() {
    fetchDataPaidPayment();
    fetchDataFailPayment();
    fetchDataRegister();
    fetchDataAbstract();
    fetchDataFullPaper();
}

const logout = () => {
  window.location.href = url + "/backoffice/src/logout";
};

const fetchDataRegister= () => {
    $.ajax({
        url: url + '/backoffice/src/api/register.controller.php',
        method: 'GET',
        datatype: 'JSON',
        data: {
            data: 'success',
        }
    }).done(resp => {
        $('#countRegister').text(resp.response.length)
    }).fail(err => {
        console.log(err);
    })
}

const fetchDataPaidPayment= () => {
    $.ajax({
        url: url + '/backoffice/src/api/list.controller.php',
        method: 'GET',
        datatype: 'JSON',
        data: {
            data: 'success',
        }
    }).done(resp => {
        $('#paidPayment').text(resp.response.length)
    }).fail(err => {
        console.log(err);
    })
}
const fetchDataFailPayment= () => {
    $.ajax({
        url: url + '/backoffice/src/api/list.controller.php',
        method: 'GET',
        datatype: 'JSON',
        data: {
            data: 'rejected',
        }
    }).done(resp => {
        $('#failPayment').text(resp.response.length)
    }).fail(err => {
        console.log(err);
    })
}
const fetchDataAbstract= () => {
    $.ajax({
        url: url + '/backoffice/src/api/abstract.controller.php',
        method: 'GET',
        datatype: 'JSON',
    }).done(resp => {
        $('#abstract_only').text(resp.response.length)
    }).fail(err => {
        console.log(err);
    })
}

const fetchDataFullPaper= () => {
    $.ajax({
        url: url + '/backoffice/src/api/fullpaper.controller.php',
        method: 'GET',
        datatype: 'JSON',
    }).done(resp => {
        $('#fullpaper').text(resp.response.length)
    }).fail(err => {
        console.log(err);
    })
}


