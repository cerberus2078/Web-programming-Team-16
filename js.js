function crud(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<5){
        alert("First Name must have at least 5 characters");
        return false;
    }
}

function fname(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<5){
        alert("First Name must have at least 5 characters");
        return false;
    }
}