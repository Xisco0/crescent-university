 
      (function() {
        function _checkActiveSession() {
            let access_key = JSON.parse(sessionStorage.getItem("access_key"));
            if (!access_key) {
                _logOut();
            }
        }
    
        _checkActiveSession();
    })();




  
let access_key = JSON.parse(sessionStorage.getItem("access_key"));
let student_id = JSON.parse(sessionStorage.getItem("student_id"));

if (access_key){

} else {
    sessionStorage.removeItem("access_key");
    window.parent.location.href = website_url+"/login";
}
