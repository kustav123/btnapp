function checkmob() {
    var mobileNumber = document.getElementById("mobileNumber").value;
  
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var result = JSON.parse(this.responseText);
        var count = result.count;
        if (count > 0) {
          document.getElementById("mobileNumberError").innerHTML = "This Client is already Added.";
        } else {
          document.getElementById("mobileNumberError").innerHTML = "";
        }
      }
    };
    xhttp.open("GET", "ajax/ajax.php?chkmob=" + mobileNumber, true);
    xhttp.send();
  }
  