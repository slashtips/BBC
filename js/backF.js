
//Cookie讀取
function parseCookie() {
    var cookieObj = {};
    var cookieAry = document.cookie.split(';');
    var cookie;

    for (var i = 0, l = cookieAry.length; i < l; ++i) {
        cookie = jQuery.trim(cookieAry[i]);
        cookie = cookie.split('=');
        cookieObj[cookie[0]] = cookie[1];
    }

    return cookieObj;
}

function getCookieByName(name) {
    var value = parseCookie()[name];
    if (value) {
        value = decodeURIComponent(value);
    }

    return value;
}



function ForceLogout() {
    setInterval(() => {

        $.ajax({
            type: "POST",
            url: "system/userCheckApi.php",
            data: {
                email: getCookieByName('email'),
            },
            success: function (response) {
                
                if (response == 1) {
                  
                }
                else {
                    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC;secure path=/;";
                    document.cookie = "email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                    document.cookie = "loginStatus=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                    document.cookie = "title=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                    document.cookie = "photoPath=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                    document.querySelector('.menum').style = "display:none";

                    window.location.href="index.php";
                }
            }
        });
    }, 15000);
}

function ForceLogout2() {
    setInterval(() => {

        $.ajax({
            type: "POST",
            url: "userCheckApi.php",
            data: {
                email: getCookieByName('email'),
            },
            success: function (response) {
                
                if (response == 1) {
         
                }
                else {
                    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC;secure path=/;";
                    document.cookie = "email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                    document.cookie = "loginStatus=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                    document.cookie = "title=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                    document.cookie = "photoPath=; expires=Thu, 01 Jan 1970 00:00:00 UTC; secure path=/;";
                    document.querySelector('.menum').style = "display:none";

                    window.location.href="../index.php";
                }
            }
        });
    }, 15000);
}