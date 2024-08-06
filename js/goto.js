$(document).ready(function() {

    $('.clickabstract-only').click((e) => {
        e.preventDefault()
        window.location.href = window.location.protocol + '//' + window.location.hostname + '/isahcmu' + '/src/abstracts-file/abstract-select'
    })

    $('#linkvenue').click((e)=>{
        e.preventDefault()
        window.open('https://www.shangri-la.com/en/chiangmai/shangrila/', '_blank');
    })
    $('.img-hostail').click(e =>{
        e.preventDefault()
        window.open('https://www.shangri-la.com/en/chiangmai/shangrila/', '_blank');
    })

    
});

function gotoregister () {
    window.location.href = window.location.protocol + '//' + window.location.hostname + '/isahcmu' + '/src/register/register'
}