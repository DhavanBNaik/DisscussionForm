const form =document.getElementById("form");

function Submit(){
  const email=document.getElementById("email").value;
  var emailArray=Array.from(email);
  const lastSequence=['@','b','m','s','c','e','.','a','c','.','i','n'];
  var emailLength=emailArray.length;
  console.log(emailLength);
  var j=0;
  var flag=1;
  while(j!=12){
    if(lastSequence[j]===emailArray[emailLength-12+j]){
      j++;
    }
    else{
      alert("You are not allowed to enter");
      flag=0;
      break;
    }
  }
  if(flag===1){
    window.open("index.html");
  }
}
function Submit1(){
  const email=document.getElementById("newemail").value;
  var emailArray=Array.from(email);
  const lastSequence=['@','b','m','s','c','e','.','a','c','.','i','n'];
  var emailLength=emailArray.length;
  console.log(emailLength);
  var j=0;
  var flag=1;
  while(j!=12){
    if(lastSequence[j]===emailArray[emailLength-12+j]){
      j++;
    }
    else{
      alert("Your email id is invalid");
      flag=0;
      break;
    }
  }
  if(flag===1){
    window.open("index.html");
    
  }
}