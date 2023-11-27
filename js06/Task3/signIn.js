function onclick_function()
{
    var userEmail=document.getElementById('email').value;
    var userPassword=document.getElementById('password').value;
    if(userEmail.trim()!=' ' && userPassword.trim()!=' ')
    {
        let flag=false;
        let length=parseInt(window.localStorage.getItem('userIdCounter'));
        for(let i=1;i<=length;i++)
        {
            var x=JSON.parse(window.localStorage.getItem(`user${i}`));
            var xemail=x.email;
            if(userEmail==xemail)
            {
                var xpassword=x.password;
                if(userPassword==xpassword)
                {
                    alert('correct email and password!!!');
                    flag=true;
                    break;
                }
                else
                {
                    alert('correct email,wrong password');
                }   
            }
            else if(i==length && userEmail!=xemail)
            {
                alert('wrong email and pass');
            }
        }
    }
    else
    {
        alert('empty email or passwrod');
    }
}