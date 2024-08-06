$(document).ready(function(){
    validationForm ()
    savefilesponsor ()
   
})

let filesponsor = [];
function savefilesponsor () {
    $('#fromsponsor').submit(function (e) { 
        e.preventDefault();
        
        const company = $('#txt_company_name').val();
        const coordinator = $('#txt_coordinator').val();
        const phone = $('#txt_phone').val();
        const email = $('#txt_email').val();
        const file = $('#upload_files').val();
        const logo = $('#upload_logo').val();

        let objCom = {
            company: company,
            coordinator: coordinator,
            phone: phone,
            email: email,
            file: file,
            logo: logo,
        }
        filesponsor.splice(0, 1, objCom);
        // console.log('Render data: ',filesponsor);
        randertest (filesponsor)
    });
}

function randertest (filesponsor) {
    const check = filesponsor[0]
    console.log('Check:',check)
    $('#name').text(check.company !== '' ? check.company : 'FALSE');
    $('#coord').text(check.coordinator !== '' ? check.coordinator : 'FALSE');
    $('#pho').text(check.phone !== '' ? check.phone : 'FALSE');
    $('#emails').text(check.email !== '' ? check.email : 'FALSE');
    $('#files').text(check.file !== '' ? 'TRUE' : 'FALSE');
    $('#logos').text(check.logo !== '' ? 'TRUE' : 'FALSE');

}

function validationForm () {
    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
      
            form.classList.add('was-validated')
          }, false)
    })
}