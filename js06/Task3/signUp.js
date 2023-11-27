var userId=0;

function getId()
{
    if(window.localStorage.getItem('userIdCounter')!=null)
    {
        userId=parseInt(window.localStorage.getItem('userIdCounter'))+1;
        return userId;
       
    }
    userId++;
    return parseInt(userId);
}


//add to the localStorage
function onclick_function()
{
    userId=parseInt(getId());
    var name,email,password;
    userName=document.getElementById('name').value;
    userEmail=document.getElementById('email').value;
    userPassword=document.getElementById('password').value;

    var dataToStore={
        id:userId,
        name:userName,
        email:userEmail,
        password:userPassword
    };
    
    window.localStorage.setItem('userIdCounter',userId);
    window.localStorage.setItem(`user${userId}`,JSON.stringify(dataToStore));
}

