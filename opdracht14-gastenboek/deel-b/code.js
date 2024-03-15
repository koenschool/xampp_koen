function wijzig(nummer){
  nummerr=document.getElementById('bericht'+nummer).innerHTML;
  document.getElementById('deela'+nummer).innerHTML = "<form action='edit_db.php' method='post'>" + document.getElementById('deela'+nummer).innerHTML;
  // document.getElementById('gebruiker'+nummer).innerHTML ='<input type="text" name="gebruiker" value="',document.getElementById('gebruiker'+nummer),'">';
  document.getElementById('bericht'+nummer).innerHTML = "<input type='text' name='bericht' value='"+nummerr+"'>";
  document.getElementById('deelb'+nummer).innerHTML = "<input type='submit' value='Submit'></form>";
  document.getElementById('zie'+nummer).style.display = "none";
}