

</div>

<script type="text/javascript">

  function calcularNota(){

    var p1=parseFloat(document.getElementById('parcial_uno').value.toString());

    var p2=parseFloat(document.getElementById('parcial_dos').value.toString());

    var p3=parseFloat(document.getElementById('parcial_tres').value.toString());

    var nF = document.getElementById('nota_final');

    if(isNaN(p1)){
        p1=0.0
    }

    if(isNaN(p2)){
        p2=0.0
    }

    if(isNaN(p3)){
        p3=0.0
    }

    nF.value=(p1+p2+p3)/3;

    
   
  }
</script>

</body>
</html>