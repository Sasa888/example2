/*function selectOnlyThis1(id){
  var myCheckbox = document.getElementById("defaultCheck");
  Array.prototype.forEach.call(myCheckbox,function(el){
  	el.checked = false;
  });
  id.checked = true;
}

// za drugu stranu

function selectOnlyThis2(id){
  var myCheckbox = document.getElementById("defaultCheck2");
  Array.prototype.forEach.call(myCheckbox,function(el){
  	el.checked = false;
  });
  id.checked = true;
}
*/
 $(document).ready(function(){
    $('.check').click(function() {
        $('.check').not(this).prop('checked', false);
    });
});


$(document).ready(function(){
    $('.check2').click(function() {
        $('.check2').not(this).prop('checked', false);
    });
}); 

//Yes or no buttons

  function selectOnlyThis3(id){
  var myCheckbox = document.getElementsByName("check1");
  Array.prototype.forEach.call(myCheckbox,function(el){
  	el.checked = false;
  });
  id.checked = true;
  }
  function selectOnlyThis4(id){
  var myCheckbox = document.getElementsByName("check2");
  Array.prototype.forEach.call(myCheckbox,function(el){
  	el.checked = false;
  });
  id.checked = true;
  }
  
  
  
 // Amount algorithm
        

    
   
    