/*
 * Created Date: Monday October 14th 2019
 * Author: Gurubalan Harikrishnan
 * Email-ID: gurubalan.work@gmail.com
 * -----
 * Copyright (c) 2019 Gurubalan Harikrishnan
 */
function validate(){
var x=document.getElementById("regno").value;
if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}