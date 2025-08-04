
///for toggle open close 
function loginkro() {
    var b = document.querySelector('.signup-box');
    if (b.style.display === "block") {
        b.style.display = "none";
        // document.getElementById('mainContent').classList.remove('dimmed');
    } else {
        b.style.display = "block";
        // document.getElementById('mainContent').classList.add('dimmed');
    }
}



///login  box open ...............................................................................................................
function loginOpen()
{
    var a = document.querySelector('.Login-box');
     a.style.display="block";
}

// register box oprn ............................................................................................................
function signupOpen()

{
    var a = document.querySelector('.Login-box');
     a.style.display="none";
}

// for uploading the file ...........................................................................................................
function check(input) {
    const a = document.getElementById('Photo');
    const file = input.files[0];
  
    if (file) {
      const reader = new FileReader();
  
      reader.onload = function (e) {
        a.src = e.target.result;
      };
  
      reader.readAsDataURL(file);
    }
  }

//for whatsapp  popoup 

function closePopup() {
  document.getElementById("popup").style.display = "none";
 
}

setTimeout(function() {
 window.alert("For Access The Resources login after  Registeration");
},3000); // 30000ms = 30 seconds


setTimeout(function() {
  document.querySelector(".signup-box").style.display = "block";
}, 10000); // 6000ms = 10 seconds

  setTimeout(function() {
    document.getElementById("popup").style.display = "block";
  }, 30000); // 30000ms = 30 seconds
  



// Disable specific keyboard shortcuts.......................................................................................
document.onkeydown = function(e) {
  if (e.keyCode == 123) { // Disable F12
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) { // Disable Ctrl+Shift+I
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) { // Disable Ctrl+Shift+C
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) { // Disable Ctrl+Shift+J
    return false;
  }
  if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) { // Disable Ctrl+U
    return false;
  }
  if (e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)) { // Disable Ctrl+S
    return false;
  }
};
