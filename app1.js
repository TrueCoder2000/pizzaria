let quantity        = document.querySelector('.quantity');
let btnAddCart      = document.querySelectorAll('.btnAddCart');

    
    for(var i=0;i<btnAddCart.length;i++){
        
       btnAddCart[i].onclick=function(){
            quantity.innerHTML=parseInt(quantity.innerHTML)+1;
        }

        
    }
    
