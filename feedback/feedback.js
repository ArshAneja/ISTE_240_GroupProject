// go to this for date and radio validation
// view-source:https://people.rit.edu/jrhicsa/iste240/Exercise3.html


function checkIfRadioButtonSelected(){
    "use strict";
    var isChecked = false;
        var len = document.getElementsByName('mes').length;
        var choices = new Array();
        for (var i=0; i<len; i++)
        {
                if (document.getElementsByName('mes')[i].checked)
                {
                        choices.push(document.getElementsByName('mes')[i].value);
                }
        }//end of for loop

    if (choices.length > 0){
        isChecked = true;
        document.getElementsByTagName('fieldset')[0].style = null;
        document.getElementsByTagName('legend')[0].style= null;
        // document.getElementsById('mes_fs')[0].style = null;
        // document.getElementsById('mes_leg')[0].style= null;
    }
    else{
        document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
        document.getElementsByTagName('legend')[0].style.color = 'red';
        // document.getElementsById('mes_fs')[0].style.borderColor = 'red';
        // document.getElementsById('mes_leg')[0].style.color = 'red';
        isChecked = false;
    }



    console.log("Are the radio buttons  working ?  -> " + isChecked);
    // alert("Radio buttons test -->" +isChecked);
    return isChecked;

}//end of function checkIfRadioButtonSelected



function validateForm() {
    "use strict"; // requires all variables to be defined.   
    var isvalid=true;

    // checks if name is filled in
    if(document.getElementById("visitor_name").value == '')
        {
            document.getElementById("visitor_name").style.borderColor="red";
            document.getElementById("visitor_name").style.backgroundColor = 'red';
            document.getElementById("visitor_name").style.color = 'white'; // this doesnt work... i think bc its not targeting the placeholder
            isvalid=false;
        }
    else
        {
        document.getElementById("visitor_name").style = null;
        }       
    console.log("Is name ok? " + isvalid);
    

    if(checkIfRadioButtonSelected() == false){
        isvalid = false;
    }

    return (isvalid);
    }