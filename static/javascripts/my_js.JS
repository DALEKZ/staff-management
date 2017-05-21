  function switchItem(tag){  
   var s1 = document.getElementById('s1');  
   var s2 = document.getElementById('s2');  
   var s3 = document.getElementById('s3');  
   var s4 = document.getElementById('s4');  
   var s5 = document.getElementById('s5');  

   switch(tag){
    case '1':
        s1.style.display = ''; 
   		s2.style.display = 'none';  
    	s3.style.display = 'none';  
    	s4.style.display = 'none';  
    	s5.style.display = 'none';   
    	break;
     case '2':
        s1.style.display = 'none';  
   		s2.style.display = '';  
    	s3.style.display = 'none';  
    	s4.style.display = 'none';  
    	s5.style.display = 'none';  
    	break;
    case '3':
        s1.style.display = 'none';  
   		s2.style.display = 'none';  
    	s3.style.display = '';  
    	s4.style.display = 'none';  
    	s5.style.display = 'none';   
    	break;
    case '4':
        s1.style.display = 'none';  
   		s2.style.display = 'none';  
    	s3.style.display = 'none';  
    	s4.style.display = '';  
    	s5.style.display = 'none';   
    	break;
    case '5':
        s1.style.display = 'none';  
   		s2.style.display = 'none';  
    	s3.style.display = 'none';  
    	s4.style.display = 'none';  
    	s5.style.display = '';   
    	break;
}

  }  
