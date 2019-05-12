// phong to anh san pham
$(document).ready(function() {
  $('.show').zoomImage();
  $(".imgProductSmall").click(function(){
    let imgAppearence = $(this).attr("src");
    $('.imgProduct').attr('src', imgAppearence)
    $('#show-img').attr('src', $(this).attr('src'))
    $('#big-img').attr('src', $(this).attr('src'))
  });

  $("#defaultOpen").click();
});  

//open tab

function openTab(tabName,elmnt,color) {
  let i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  
 
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.border = "";
  }
  
  document.getElementById(tabName).style.display = "block";
  
  elmnt.style.borderBottom = color;

}



