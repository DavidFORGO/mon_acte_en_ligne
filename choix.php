<html>

<head>
  <title>Choix d'acte</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<div class="container">
  <div class="col-m2-12 d-flex justify-content-center">
    <div class="col-m2-5">
      <fieldset>
      <legend><h2 class="text-content">Choisir le type d'acte</h2></legend>
      <form action="#">
        <fieldset>
          <input type="radio" name="acte" class="btn btn-succes" value="Naissance">
          <label for="">Naissance</label><br>
          <input type="radio" name="acte" class="btn btn-succes" value="Mariage">
          <label for="">Mariage</label> <br>
          <input type="radio" name="acte" class="btn btn-succes" value="Deces">
          <label for="">Décès</label><br>
    </form>
    </fieldset>
    <button onclick="getRadioValue()">Valider</button>
    </div>  
  </div>
</div>

 <script>
   function getRadioValue(){
     var radio=document.getElementsByName('acte');
     //utilisé un swich: case 0, case 1 et2
     for(i=0;i<radio.length;i++){
      //  if(radio[i].checked)
      //   if(radio[i].value=="Naissance")
      //     alert(radio[i].value);
      //     window.location.href = "naissance.php"
      //   else if(radio[i].value=="Mariage")
      //     alert(radio[i].value);
      //     window.location.href = "formNaissance.php"
      //   else if(radio[i].value=="Deces")
      //     alert(radio[i].value);
      //     window.location.href = "formNaissance.php"
      if(radio[i].checked)
        switch (radio[i].value) {
          case 'Naissance':
            alert(radio[i].value);
            alert("Veuillez remplir le formulaire d'acte de "+ radio[i].value + " pour faire votre demande");
            window.location.href = "naissance.php";
            break;
          case 'Mariage':
            alert(radio[i].value);
            alert("Veuillez remplir le formulaire d'acte de "+ radio[i].value + " pour faire votre demande");
            window.location.href = "mariage.php";
            break;
          case 'Deces':
            alert(radio[i].value);
            alert("Veuillez remplir le formulaire d'acte de "+ radio[i].value + " pour faire votre demande");
            window.location.href = "deces.php";
            break;
        
          default:
            alert("choose your acte");
            break;
        }
      }
    }
    //  function printForm(){
    //   var val = document.getElementByName('acte').value;
    //    if(val=="Naissance")
    //     alert(radio.value);
    //     Window.location.href="naissance.php";
    //   elseif(val=="Mariage")
    //     alert(radio.value);
    //     Window.location.href="formNaissance.php";
    //   elseif(val=="Deces")
    //     alert(radio.value);
    //     Window.location.href="formNaissance.php";
    //  }
    //  if (var==0) {
    //       alert(radio[i].value);
    //       window.location.href = "naissance.php";
    //     }
    //     elseif(var==1){
    //       alert(radio[i].value);
    //       window.location.href = "formNaissance.html";
    //     }
    //     else{
    //       alert(radio[i].value);
    //       window.location.href = "formNaissance.html";
    //     }

   
 </script>
</body>

</html>
