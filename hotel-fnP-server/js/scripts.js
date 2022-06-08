// function login(value)
// {
//     if( value == 1){
//         window.location.href = "#1"
//     }

//     else if( value == 2) {
//         window.location.href = "#2"
//     }

//     else if( value == 3) {
//         window.location.href = "#3"
//     }
// }
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

ok = new Date();
year = ok.getFullYear();
month = ok.getMonth()+1;
day = ok.getDate();
if (month <= 9) {
  month = '0' + month;
}
if (day <= 9) {
  day = '0' + day;
}
document.getElementById('start').value = year + '-' + month + '-' + day;
document.getElementById('end').value = year + '-' + month + '-' + day;