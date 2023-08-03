function loadData(name){
    if(name == 'bttn1su')
    {
        document.getElementById("pri1").innerHTML = "RS:15000"
    }
    else if(name == 'bttn2su')
    {
        document.getElementById("pri2").innerHTML = "RS:10000"
    } 
    else if(name == 'bttn3su')
    {
        document.getElementById("pri3").innerHTML = "RS:14000"
    }
    else if(name == 'bttn4su')
    {
        document.getElementById("pri4").innerHTML = "RS:20000"
    }
    else if(name == 'bttn5su')
    {
        document.getElementById("pri5").innerHTML = "RS:25000"
    }
    else if(name=='bttn6su')
    {
        document.getElementById("pri6").innerHTML = "RS:8000"
    }
    else if(name=='bttn7su')
    {
        document.getElementById("pri7").innerHTML = "RS:8000"
    }
    else if(name=='bttn8su')
    {
        document.getElementById("pri8").innerHTML = "RS:6000"
    }
    else if(name=='bttn9su')
    {
        document.getElementById("pri9").innerHTML = "RS:12000"
    }
    else
    {
        alert('Invalid');
    }
}


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