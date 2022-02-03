
    let inputairport = document.getElementById('register_airport');
    let listcomplete=document.getElementById('datalist');
    
    


    //search airport.json   

    const searchairport= async searchText =>{
        const res=await fetch('../res/json/airport.json');

        const airports=await res.json();

        //console.log(airports)
      
        let matches=airports.filter(airport=>{
            const regex=new RegExp(`^${searchText}`,'gi');
            return airport.country.match(regex) || airport.code.match(regex) || airport.city.match(regex) ||airport.name.match(regex);
        });

        
        if (searchText.length==0) {
            matches=[];
            listcomplete.innerHTML="";
        }
        if (searchText.length>2) {
            
            outputH(matches);
        }

        //console.log(matches);
        
    };

    const outputH=matches=>{
        if(matches.length>0){
            const html=matches.map(match=>`<li id="airport_select">${match.name} (${match.code})</li>`).join('');


            listcomplete.innerHTML=html;
            //console.log(html)
        }


    };

    

    inputairport.addEventListener('input',()=>searchairport(inputairport.value));


    
   
    listcomplete.addEventListener('click',(e)=>{
        if (e.target && e.target.nodeName=='LI') {
            console.log('yes')
            inputairport.value=e.target.innerHTML;
            listcomplete.innerHTML="";
        }
    });
    
    inputairport.addEventListener('keyup',(e)=>{
        //console.log('abajo');

        
       
       if(e.key==='ArrowDown'){
        let inputairport = document.getElementById('register_airport');
           let select=document.getElementById('airport_select');
           listcomplete.firstChild.focus();
           var v=select.firstChild.value;
           inputairport.value=select.firstChild.value.innerHTML;
            console.log(select.firstChild.nodeName);
            console.log(select)

       };

       

    })



    listcomplete.addEventListener('keyup',(e)=>{
        console.log('abajo')
        var x=document.getElementsById(this.id +'airport_select');
        if (x) {
            x=x.getElementsById('airport_select');
            
        }

        switch (e.key) {
            case 'ArrowDown':
                console.log('abajo')
                
                break;
        
            case 'ArrowUp':
                console.log('arriba')
                
                break;

            case 'Enter':  
                inputairport.value=e.target.innerHTML;
                listcomplete.innerHTML="";
            
                break;
            default:
                break;
        }
        if (e.key) {
            
        }

    });



   
    
    
    
    



    
 

