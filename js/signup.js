function validate()
{
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var uname = document.getElementById("uname").value;
    var pwd = document.getElementById("pwd").value;
    var con = document.getElementById("conpwd").value;

    if(fname == "" || fname == null)
    {
        alert("Name field cannot be empty!");
        return false;
    }

    if(email == "" || email == null)
    {
        alert("Email cannot be empty!");
        return false;
    }

    if((email.includes("@") && email.includes(".com")) == false && (email.indexOf("@") < email.indexOf(".com")) == false)
    {
        alert("Invalid email format!");
        return false;
    }

    if(uname == "" || uname == null)
    {
        alert("Username cannot be empty!");
        return false;
    }

    if(pwd == "" || pwd == null)
    {
        alert("Password cannot be blank!");
        return false;
    }
    if(pwd.length < 5)
    {
        alert("Password length must be at least 5 characters!");
        return false;
    }

    if(con == "" || con == null)
    {
        alert("Please re-enter password!");
        return false;
    }

    if(pwd != con)
    {
        alert("Passwords do not match!");
        return false;
    }

    var count = 0;
    for(var i = 0; i < pwd.length; i++)
    {
        console.log(pwd[i]);
        if(pwd[i]=="0" || pwd[i]=="1" || pwd[i]=="2" || pwd[i]=="3" || pwd[i]=="4" || pwd[i]=="5" || pwd[i]=="6" || pwd[i]=="7" || pwd[i]=="8" || pwd[i]=="9")
        {
            alert("Account created successfully!\nWelcome!");
            return true;
        }
        count = count + 1;
    }
    if(count >= pwd.length)
    {
        alert("The password must contain a numeric character!");
        return false;
    }

    else
    {
        alert("Account created successfully!\nWelcome!");
        return true;
    }
}
