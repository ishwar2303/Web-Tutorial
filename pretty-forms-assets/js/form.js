// toggle password visibility
let showEyeIconID = 'password-show-eye-icon'
let hideEyeIconID = 'password-hide-eye-icon'
let showEyeIcon = document.getElementById(showEyeIconID)
let hideEyeIcon = document.getElementById(hideEyeIconID)
function makePasswordVisible(){
    let passwordInput = document.getElementById('password')
    if(passwordInput.type == 'password'){
        passwordInput.type = 'text'
        showEyeIcon.style.display = 'none'
        hideEyeIcon.style.display = 'block'
    }
    else{
        passwordInput.type = 'password'
        showEyeIcon.style.display = 'block'
        hideEyeIcon.style.display = 'none'
    }
}
showEyeIcon.addEventListener('click', makePasswordVisible)
hideEyeIcon.addEventListener('click', makePasswordVisible)

