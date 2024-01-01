
// REGISTER FORM VALIDATION

function nameFieldValidation(){
    let nameValue =  $('#name').val();
    let nameRegx = /^([a-zA-Z ]){2,22}$/;

    if (nameValue !== '')
    {
        if (nameRegx.test(nameValue)){
            $('#nameErrors').text('');
            return true;
        }else{
            $('#nameErrors').text('Character must be 2, 22');
            return false
        }
    }else{
        $('#nameErrors').text('name field is required *');
        return false
    }
}

function emailFieldValidation(){
    var emailValue =  $('#email').val();
    var emailRegx =   /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;
    if (emailValue !== '')
    {
        if (emailRegx.test(emailValue))
        {
            $('#emailErrors').text('');
            return true ;
        }else{
            $('#emailErrors').text('Invalid email address');
            return  false;
        }
    }else{
        $('#emailError').text('email field is required *');
        return false;
    }
}

function passwordFieldValidation(){
    let passwordValue = $('#password').val();

    if (passwordValue !== ''){
        if (passwordValue.length >= 8){
            if (passwordValue.length <= 16)
            {
                return true;
            }else{
                $('#passwordErrors').text('max character length is 16 words');
                return false;
            }
        }else{
            $('#passwordErrors').text('min character length is 8 words');
            return false;
        }
    }else{
        $('#passwordErrors').text('password filed is required *');
        return false;
    }
}

function mobileFieldValidation(){
    let mobileValue = $('#mobile').val();
    let mobileRegx = /^(?:\+88|88)?(01[3-9]\d{8})$/;

    if (mobileValue !== ''){
        if (mobileRegx.test(mobileValue)){
            $('#mobileErrors').text('');
            return true;
        }else{
            $('#mobileErrors').text('Invalid number');
            return false;
        }
    }else{
        $('#mobileErrors').test('mobile field is required *');
        return false;
    }
}

function checkboxFieldValidation(){

    if ($('#exampleCheckbox2').is(':checked'))
    {
        $('#checkboxErrors').text('');
        return true;
    }else{
        $('#checkboxErrors').text('terms & policy is required *');
        return false;
    }
}

$('#name').blur(function (){
    nameFieldValidation();
});
$('#email').blur(function (){
    emailFieldValidation();
});
$('#password').keyup(function (){
    passwordFieldValidation();
});
$('#mobile').blur(function (){
    mobileFieldValidation();
});

$('#resForm').submit(function (){
    if (nameFieldValidation() && emailFieldValidation() && passwordFieldValidation() && mobileFieldValidation() && checkboxFieldValidation())
    {
        return true;
    }else{
        return false;
    }
});

$(document).on('change', function (){

});

$('#regBtn').click(function (){

    if ($('#name').val() === ''){
        $('#nameErrors').text('name field is required *');
    }
    if ($('#email').val() === ''){
        $('#emailErrors').text('email field is required *');
    }
    if ($('#password').val() === ''){
        $('#passwordErrors').text('password field is required *');
    }
    if ($('#mobile').val() === ''){
        $('#mobileErrors').text('mobile field is required *');
    }
    checkboxFieldValidation();
});
// AJAX CHECK

$('#email').keyup(function (){
    var email = $(this).val();

    $.ajax({
        method: 'GET',
        url: '/register-email-check',
        data: {email: email},
        dataType: 'JSON',
        success: function (data){
            if (data[1] === true){
                $('#emailErrors').text(data[0]);
            }else{
                $('#emailErrors').text('');
            }
        },
        error: function (){
            alert('not found.');
        }
    });
});

// LOGIN FORM VALIDATION

function loginEmailValidation(){
    var email = $('#loginEmail').val();
    var emailRegx = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;

    if (email !== '')
    {
        if (emailRegx.test(email))
        {
            $('#loginEmailErrors').text('');
            return true;
        }else {
            $('#loginEmailErrors').text('Invalid email. Please type here valid email');
            return false;
        }
    }else{
        $('#loginEmailErrors').text('email field is required *');
        return false;
    }
}

function loginPasswordValidation(){
    var passwordValue = $('#loginPassword').val();
    let passwordRegx = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[a-zA-Z!#$%&? "])[a-zA-Z0-9!#$%&?]{8,20}$/;

    if (passwordValue !== ''){
        if (passwordValue.length >= 8)
        {
            if (passwordValue.length <= 16){
            $('#loginPasswordErrors').text('');
            return true;
            }else{
                $('#loginPasswordErrors').text('max password length is 16 words');
                return false;
            }
        }else{
            $('#loginPasswordErrors').text('min password length is 8 words');
            return  false;
        }
    }else{
        $('#loginPasswordErrors').text('password field is required *');
        return false;
    }
}

$('#loginEmail').blur(function (){
    loginEmailValidation();
});

$('#loginPassword').keyup(function (){
    loginPasswordValidation();
});


$(document).on('change', function (){
    if (loginEmailValidation() && loginPasswordValidation()){
        $('#loginBtn').attr('disabled', false);
        return true;
    }else{
        $('#loginBtn').attr('disabled', true);
        return false;
    }

    if (nameFieldValidation() && emailFieldValidation() && passwordFieldValidation() && mobileFieldValidation() && checkboxFieldValidation())
    {
        $('#regBtn').attr('disabled', false);
    }else{
        $('#regBtn').attr('disabled', true);
    }
});

$('#loginBtn').click(function (){

    if ($('#loginEmail').val() === '')
    {
        $('#loginEmailErrors').text('email field is required *');
    }

    if ($('#loginPassword').val() === '')
    {
        $('#loginPasswordErrors').text('password field is required *')
    }
});

$('#loginForm').submit(function (){

    if (loginEmailValidation() && loginPasswordValidation()){
        return true;
    }else{
        return false;
    }
});

