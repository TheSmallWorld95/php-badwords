
<!-- Esercizio Prova
<?php
  // $testo = 'Fabio';
  // var_dump($_GET['nome'] . ' ' . $_GET['cognome']);
  $testo = $_GET['nome'] . ' ' . $_GET['cognome'];
 ?>

 <div class="">
   Ciao <?php echo $testo; ?>
 </div> -->

 <!-- Creare una variabile con un paragrafo di testo.
 Visualizzare a schermo il paragrafo con la relativa lunghezza
 e sostituire la badword passata in GET con tre * -->



<?php
  $paragraph = 'Dona un soldo al tuo Witcher,
                Oh, valle abbondante, oh, valle abbondante,
                Dona un soldo al tuo Witcher,
                Oh, valle abbondante.'
 ?>

<p> <?php echo $paragraph; ?></p>
<p> Il paragrafo è lungo <?php echo strlen($paragraph) ?> lettere</p>

<!-- SOSTITUISCO IL VALORE DELLA QUERY STRING CON I TRE ASTERISCHI,
CAMBIANDO IL VALORE CAMBIA LA PAROLA ASSOCIATA -->

<?php
  $newParagraph = str_replace($_GET['badword'], '***', $paragraph);
  echo $newParagraph;
 ?>
