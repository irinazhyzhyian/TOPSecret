document.querySelector(document).ready(function(){
    document.querySelector('.minus-btn').click(function(e){
    e.preventDefault();
    var $this = document.querySelector(this);
    var input = document.querySelector('#counter');
    var value = parseInt(input.value);
    if(value > 1){value = value - 1;}
    else{value = 0;}
    input.val(value);
    });
    
    document.querySelector('.minus-btn').click(function(e){
    e.preventDefault();
    var $this = document.querySelector(this);
    var input = document.querySelector('#counter');
    var value = parseInt(input.value);
    if(value < 100){value = value + 1;}
    else{value = 100;}
    input.val(value);
    });
    });
     
