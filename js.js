function crud(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<3){
        alert("First Name must have at least 3 characters");
        return false;
    }
}

function password(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<8){
        alert("Password must have at least 8 characters");
        return false;
    }
}

