<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>tdee</title>
  </head>
  <body>

  <form name="tdeeForm">
    <input type="radio" name="gender" id="gender_Male" value="Male" checked />Mężczyzna<br />
    <input type="radio" name="gender" id="gender_Female" value="Female" />Kobieta<br /><br />
    waga (kg): <input type="text" name="weight" size="10"><br />
    wzrost (cm): <input type="text" name="height" size="10"><br />
    wiek: <input type="text" name="age" size="10"><br /><br />
    <b>Endomorfik</b> – osoba charakteryzująca się ciężką budową ciała, rozłożystym i grubym szkieletem, wolnym metabolizmem, a więc dużą masą zarówno mięśniową, jak i tłuszczową, z tendencją do tycia.
    <br /><br />
    <b>Mezomorfik</b> – osoba o cechach sylwetki i metabolizmu pośrednich między ektomorfikiem, a endomorfikiem, o proporcjonalnej budowie, średnim tempie przemiany materii i tendencji do łatwego zwiększania masy mięśniowej.
    <br /><br />
    <b>Ektomorfik</b> – osoba charakteryzująca się bardzo szczupłą budową ciała (chudą szyją, wątłą klatką piersiową), mało rozłożystym i lekko zbudowanym szkieletem, brakiem otłuszczenia oraz szybkim metabolizmem.
    <br /><br /><br />


    Pozostała aktywność fizyczna, tryb pracy:<br /><br />
    <b>Endomorfik </b><br />
    <input type="radio" name="tdeee" id="tdee_endomorfik_200" value="200" checked />Niska 200kcal<br />
    <input type="radio" name="tdeee" id="tdee_endomorfik_300" value="300" />Średnia 300kcal<br />
    <input type="radio" name="tdeee" id="tdee_endomorfik_400" value="400" />Wysoka 400kcal<br /><br />
    <b>Mezomorfik</b><br />
    <input type="radio" name="tdeee" id="tdee_mezomorfik_400" value="400" />Niska 400kcal<br />
    <input type="radio" name="tdeee" id="tdee_mezomorfik_450" value="450" />Średnia 450kcal<br />
    <input type="radio" name="tdeee" id="tdee_mezomorfik_500" value="500" />Wysoka 500kcal<br /><br />
    <b>Ektomorfik</b> <br />
    <input type="radio" name="tdeee" id="tdee_ektomorfik_700" value="700" />Niska 700kcal<br />
    <input type="radio" name="tdeee" id="tdee_ektomorfik_800" value="800" />Średnia 800kcal<br />
    <input type="radio" name="tdeee" id="tdee_ektomorfik_900" value="900" />Wysoka 900kcal<br /><br /><br />


    <b>TRENING SIŁOWY</b><br />
    <b>liczba treningów  w tygodniu</b> <input type="text" name="silowy_liczba_treningow" size="10"><br />
    <b>średni czas trwania</b> <input type="text" name="silowy_czas" size="10"> min. <br />
    <b>intensywność:</b><br/ >
    <input type="radio" name="tdeee_2" id="intensywnosc_silowy_4" value="4" checked />Niska<br />
    <input type="radio" name="tdeee_2" id="intensywnosc_silowy_5_5" value="5.5" />Średnia<br />
    <input type="radio" name="tdeee_2" id="intensywnosc_silowy_7" value="7" />Wysoka<br /><br /><br />

    <b>TRENING AEROBOWY (CARDIO)</b><br />
    <b>liczba treningów  w tygodniu</b> <input type="text" name="cardio_liczba_treningow" size="10"><br />
    <b>średni czas trwania</b> <input type="text" name="cardio_czas" size="10"> min. <br />
    <b>intensywność:</b><br/ >
    <input type="radio" name="tdeee_3" id="intensywnosc_cardio_5" value="5" checked />Niska<br />
    <input type="radio" name="tdeee_3" id="intensywnosc_cardio_7_5" value="7.5" />Średnia<br />
    <input type="radio" name="tdeee_4" id="intensywnosc_cardio_10" value="10" />Wysoka<br /><br /><br />


    <input type="button" value="Oblicz tdee" onClick="calculatetdee()"><br /><br />

    wskaźnik tdee: <input type="text" name="tdee" size="10">  kcal <br /><br />
    wskaźnik bmr: <input type="text" name="bmr" size="10">  kcal <br /><br />
    współczynnik bmi: <input type="text" name="bmi" size="10">  <br /><br />
    <input type="reset" value="Wyczyść" />
  </form>


  <script language="JavaScript">
  <!--
    function calculatetdee() {
      var height = document.tdeeForm.height.value;
      var weight = document.tdeeForm.weight.value;
      var age = document.tdeeForm.age.value;

      var silowy_liczba_treningow = document.tdeeForm.silowy_liczba_treningow.value;
      var silowy_czas = document.tdeeForm.silowy_czas.value;

      var cardio_liczba_treningow = document.tdeeForm.cardio_liczba_treningow.value;
      var cardio_czas = document.tdeeForm.cardio_czas.value;

      var neat = 0;
      var tea_silowy = 0;
      var tea_silowy_pom = 0;

      var tea_cardio = 0;
      var tea_cardio_pom = 0;

      if(document.getElementById('tdee_endomorfik_200').checked) {
        neat = 200;
      }
      if(document.getElementById('tdee_endomorfik_300').checked) {
        neat = 300;
      }
      if(document.getElementById('tdee_endomorfik_400').checked) {
        neat = 400;
      }
      if(document.getElementById('tdee_mezomorfik_400').checked) {
        neat = 400;
      }
      if(document.getElementById('tdee_mezomorfik_450').checked) {
        neat = 450;
      }
      if(document.getElementById('tdee_mezomorfik_500').checked) {
        neat = 500;
      }
      if(document.getElementById('tdee_ektomorfik_700').checked) {
        neat = 700;
      }
      if(document.getElementById('tdee_ektomorfik_800').checked) {
        neat = 800;
      }
      if(document.getElementById('tdee_ektomorfik_900').checked) {
        neat = 900;
      }


      if(document.getElementById('intensywnosc_silowy_4').checked) {
        tea_silowy = 4;
        tea_silowy_pom = 7;
      }
      if(document.getElementById('intensywnosc_silowy_5_5').checked) {
        tea_silowy = 5.5;
        tea_silowy_pom = 8;
      }
      if(document.getElementById('intensywnosc_silowy_7').checked) {
        tea_silowy = 7;
        tea_silowy_pom = 9;
      }


      if(document.getElementById('intensywnosc_cardio_5').checked) {
        tea_cardio = 5;
        tea_cardio_pom = 5;
      }
      if(document.getElementById('intensywnosc_cardio_7_5').checked) {
        tea_cardio = 7.5;
        tea_cardio_pom = 35;
      }
      if(document.getElementById('intensywnosc_cardio_10').checked) {
        tea_cardio = 10;
        tea_cardio_pom = 180;
      }


      if(document.getElementById('gender_Male').checked) {
        gender = 5;
      }else if(document.getElementById('gender_Female').checked) {
        gender = -161;
      }

      if(weight > 0 && height > 0 && age > 0){ 
        var bmr = ((9.99*weight)+(6.25*height)-(4.92*age)+gender);
        var tea = ((silowy_czas*silowy_liczba_treningow*tea_silowy_pom+(silowy_liczba_treningow*(tea_silowy/100*bmr)))+(cardio_czas*cardio_liczba_treningow*tea_cardio+(tea_cardio_pom)))/7;
        var tef = 6/100*(bmr+tea+neat);
        var finaltdee = bmr + tea + tef + neat;
        var bmi = weight/(height/100*height/100);
        document.tdeeForm.tdee.value = finaltdee.toFixed(2);
        document.tdeeForm.bmr.value = bmr.toFixed(2);
        document.tdeeForm.bmi.value = bmi.toFixed(2);
      }
      else{
      alert("Wprować poprawne wartości!")
      }
    }
  //-->
  </script>
  </body>
</html>