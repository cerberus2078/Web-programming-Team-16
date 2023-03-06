function crud(){
    let password=(document.yes.password.value).trim();
    if(password.length<8){
        alert("Password must have at least 8 characters");
        return false;
    }
}

function password(){
    let password=(document.yes.password.value).trim();
    if(password.length<8){
        alert("Password must have at least 8 characters");
        return false;
    }
}