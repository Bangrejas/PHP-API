<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Password: <input type="password" name="password" id='txtPassword'>
<button id='btnSubmit'>Submit</button></form>
<script>
    var submit = document.getElementById('btnSubmit')
    submit.onclick = function () {
        var password = document.getElementById('txtPassword').value;
        if (password=="admin")
        {
           document.location.href="tambah.php";
        }
        
        else
        {
          alert("password salah");
        }
    }
</script>
</body>
</html>
<form>
