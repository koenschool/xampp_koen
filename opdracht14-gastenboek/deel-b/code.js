function wijzig(nummer){
  nummerr=document.getElementById('bericht'+nummer).innerHTML;
  document.getElementById('deela'+nummer).innerHTML = "<form action='edit_db.php' method='post'>" + document.getElementById('deela'+nummer).innerHTML;
  // document.getElementById('gebruiker'+nummer).innerHTML ='<input type="text" name="gebruiker" value="',document.getElementById('gebruiker'+nummer),'">';
  document.getElementById('bericht'+nummer).innerHTML = "<input type='text' name='bericht' value='"+nummerr+"'>";
  document.getElementById('deelb'+nummer).innerHTML = "<input type='submit' value='Submit'></form>";
  document.getElementById('zie'+nummer).style.display = "none";
}

function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}