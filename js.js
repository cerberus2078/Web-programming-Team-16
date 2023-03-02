function crud(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<3){
        alert("First Name must have at least 3 characters");
        return false;
    }
}

function fname(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<3){
        alert("First Name must have at least 3 characters");
        return false;
    }
}