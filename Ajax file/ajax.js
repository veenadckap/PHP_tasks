"use strict"

    let suggestion = document.querySelector(".suggestion_box");

    function productShowFun(str){

        if (str.trim()=='') {

            return   suggestion.classList.add('hidden');
     

    }
    else {

        suggestion.classList.remove('hidden');

        var xmlhttp = new XMLHttpRequest();

        console.log(xmlhttp);

        xmlhttp.onreadystatechange = function() {

            console.log(this.readyState);

            if (this.readyState == 4 && this.status == 200) {
                
            // console.log(this.responseText);
            console.log(this);
// console.log(xmlhttp.responseText);

       try {
                    let data = JSON.parse(this.responseText);
                    // console.log( data);
                    showSuggestions(data);

                } 
                
    catch (e) {
                    console.error("Error parsing JSON response:", e);
                    console.error("Response:", this.responseText);
                }

                // document.getElementById("txtHint").innerHTML = this.responseText;
            }

        };
        xmlhttp.open("GET", "?q=" + str,false);
        console.log("pattabi");

        xmlhttp.send();
        // console.log(xmlhttp);
        // console.log("Raman");
    }
    }









   function  showSuggestions(data){
    suggestion.innerHTML="";
    if(data.length==0){
        suggestion.innerHTML="No this type of product";
    return;
    }
    data.forEach(seperateProductName => {
        let url = `seperateProduct.php?search=${seperateProductName.name}`;
        suggestion.innerHTML+=`
        <a href="${url}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">${seperateProductName.name}</a> 
        `;

});

   }