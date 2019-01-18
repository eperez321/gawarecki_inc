function myFunction() {
    var fileToUpload = document.getElementById("fileToUpload").value;
    var itemname = document.getElementById("itemname").value;
    var itemprice = document.getElementById("itemprice").value;
    var itemsize = document.getElementById("itemsize").value;
    var pricepaid = document.getElementById("pricepaid").value;
    var dateposted = document.getElementById("dateposted").value;
// Returns successful data submission message when the entered information is stored in database.
    var dataString = '&fileToUpload1=' + fileToUpload + '&itemname1=' + itemname + '&itemprice1=' + itemprice + '&itemsize1=' + itemsize + '&pricepaid1=' + pricepaid + '&dateposted1=' + dateposted;
    if (fileToUpload == '' || itemname == '' || itemprice == '' || itemsize == '' || pricepaid == '' || dateposted == '')
    {
        alert("Please Fill All Fields");
    }
    else
    {
//AJAX code to submit form.
        $.ajax({
            type: "POST",
            url: "ajaxjs.php",
            data: dataString,
            cache: false,
            success: function(html) {
                if(confirm('Press OK to Submit or Press CANCEL to edit')){
                    window.location.reload();  
                }
            }
        });
    }
    return false;
}