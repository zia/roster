function lookUp() {
  var input, filter, table, tr, td_1, td_2, td_3, td_4, td_5, i;
  input = document.getElementById("term");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td_1 = tr[i].getElementsByTagName("td")[0];
    td_2 = tr[i].getElementsByTagName("td")[1];
    td_3 = tr[i].getElementsByTagName("td")[2];
    td_4 = tr[i].getElementsByTagName("td")[3];
    td_5 = tr[i].getElementsByTagName("td")[4];
    if (td_1 || td_2 || td_3 || td_4 || td_5) {
      if (td_1.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      }
      else if (td_2.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      }
      else if (td_3.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      }
      else if (td_4.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      }
      else if (td_5.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      }
      else {
        tr[i].style.display = "none";
      }
    }
  }
}