function checkPassword (){
        
    if(document.getElementById("pwd") .value != document.getElementById("repwd").value)
    {
        alert("password dismatch!!");
        return false;
    }
    }
    
    function enableButton (){
    
    if(document.getElementById("checkbox") .checked)
    {
        document.getElementById("subbmttn").disabled = false;
    }
    
    else
    {
        document.getElementById("subbmttn").disabled = true;
    }
    }