<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.min.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div ng-app="app" ng-controller="app-controller">
	<div><h2>OrbitWeb Wheel configuration page</h2></div>
	<br/><br/>
<form action="#">
  <div>
  Number of wheel options:<br/>
  <input type="number" name="number_of_options" id="number_of_options">
</div>
  <br/>
  <div>
  <button type="button" id="btn-save">Save</button> 
</div>
  <br/>
  <div id="options_container">
  	<h4>Set configuration</h4>
  </div>
  <br/> 
  <div id="success-info"><label style="color:#3CB371">Configuration saved successfully!</label></div>
   <br/>
  <button type="button" id="btn-save-config">Save configurations</button>  
<br/>
  
</form> 
</div>
<style type="text/css">
	#success-info{
		visibility: hidden;
	}
	#options_container{
		visibility: hidden;
	}
	#btn-save-config{
		visibility: hidden;
	}
</style>
<script>
//document.addEventListener("DOMContentLoaded", function(event) {
angular.module("app", []).controller("app-controller", function($scope, $http) {
    var btn = document.getElementById('btn-save');
    var btnSaveConfig = document.getElementById('btn-save-config');
    var number_of_options = document.getElementById('number_of_options');
    var node_container_options = document.getElementById('options_container');
    var message = document.getElementById('success-info');
    var data = [];

	function removeElementsByClass(className){
	    var elements = document.getElementsByClassName(className);
	    while(elements.length > 0){
	        elements[0].parentNode.removeChild(elements[0]);
	    }
	}

    function setOptions(number_of_options, options) {
    	node_container_options.innerHTML = '';
    	node_container_options.style.visibility = 'visible';
        btnSaveConfig.style.visibility = 'visible';
        if (options != null) {
            for (var i = 0; i < number_of_options; i++) {
                var divider1 = document.createElement('div');
                var optionColor = document.createElement('input');
                var optionText = document.createElement('input');
                var optionFontSize = document.createElement('input');
                var optionTextColor = document.createElement('input');
                divider1.className = 'divider';
                var br = document.createElement('br');
                //Definning option color attributes
                optionColor.name = 'option-color-' + i;
                optionColor.placeholder = 'Color (Hexadecimal)';
                optionColor.type = 'text';
                optionColor.className = 'option-color';
                optionColor.value = options[i].fillStyle;

                optionText.name = 'option-text-' + i;
                optionText.placeholder = 'Text';
                optionText.type = 'text';
                optionText.className = 'option-text';
                optionText.value = options[i].text;

                optionFontSize.name = 'option-font-' + i;
                optionFontSize.placeholder = 'Font Size (number)';
                optionFontSize.type = 'text';
                optionFontSize.className = 'option-font';
                optionFontSize.value = options[i].textFontSize;

                optionTextColor.name = 'option-textcolor-' + i;
                optionTextColor.placeholder = 'Text Color (Hexadecimal)';
                optionTextColor.type = 'text';
                optionTextColor.className = 'option-textcolor';
                optionTextColor.value = options[i].textFillStyle;

                divider1.appendChild(optionColor);
                divider1.appendChild(optionText);
                divider1.appendChild(optionFontSize);
                divider1.appendChild(optionTextColor);
                node_container_options.appendChild(divider1);

                node_container_options.appendChild(br);
            }
        } else {
            for (var i = 0; i < number_of_options.value; i++) {
                var divider1 = document.createElement('div');


                var optionColor = document.createElement('input');
                var optionText = document.createElement('input');
                var optionFontSize = document.createElement('input');
                var optionTextColor = document.createElement('input');
                var br = document.createElement('br');
                //Definning option color attributes
                optionColor.name = 'option-color-' + i;
                optionColor.placeholder = 'Color Hexadecimal';
                optionColor.type = 'text';
                optionColor.className = 'option-color';

                optionText.name = 'option-text-' + i;
                optionText.placeholder = 'Text';
                optionText.type = 'text';
                optionText.className = 'option-text';

                optionFontSize.name = 'option-font-' + i;
                optionFontSize.placeholder = 'Font Size';
                optionFontSize.type = 'text';
                optionFontSize.className = 'option-font';

                optionTextColor.name = 'option-textcolor-' + i;
                optionTextColor.placeholder = 'Text Color Hexadecimal';
                optionTextColor.type = 'text';
                optionTextColor.className = 'option-textcolor';


                divider1.appendChild(optionColor);
                divider1.appendChild(optionText);
                divider1.appendChild(optionFontSize);
                divider1.appendChild(optionTextColor);
                node_container_options.appendChild(divider1);

                node_container_options.appendChild(br);
            }
        }

    }

    $http({
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        url: 'https://oct.bm3group.com/wp-content/plugins/orbitwheel/data.json',
        data: '',
        transformResponse: [
            function(data) {
                return data;
            }
        ]
    }).then(function(response) {
        var wellData = JSON.parse(response.data);
        console.log(wellData);
        if (wellData.length > 0) {
        	number_of_options.value = wellData[0].number_of_options;
            setOptions(wellData[0].number_of_options, wellData[1]);
        }
    }, function(response) {
        console.log(response);
    });



    btn.onclick = function(e) {
        //node_container_options.style.visibility = 'visible';
        setOptions(number_of_options, null);
        //btnSaveConfig.style.visibility = 'visible';

    }

    btnSaveConfig.onclick = function(e) {
        var optionTextArray = [];
        var optionColorArray = [];
        var optionFontArray = [];
        var optionTextColorArray = [];
        var optionsArray = [];
        data = [];
        data.push({
            number_of_options: number_of_options.value
        });
        $('#options_container input').each(function(e) {
            if (this.className == 'option-text') {
                optionTextArray.push({
                    text: this.value
                });
            } else if (this.className == 'option-textcolor') {
                optionTextColorArray.push({
                    textFillStyle: this.value
                });
            } else if (this.className == 'option-font') {
                optionFontArray.push({
                    textFontSize: this.value
                });
            } else if (this.className == 'option-color') {
                optionColorArray.push({
                    fillStyle: this.value
                });
            }
        });

        for (var i = 0; i < optionTextArray.length; i++) {
            optionsArray.push({
                fillStyle: optionColorArray[i].fillStyle,
                text: optionTextArray[i].text,
                textFontSize: optionFontArray[i].textFontSize,
                textFillStyle: optionTextColorArray[i].textFillStyle,
                strokeStyle: '#FFF'
            });
        }
        data.push(optionsArray);
        $http({
                url: 'https://oct.bm3group.com/wp-content/plugins/orbitwheel/overwrite-content.php',
                method: "POST",
                data: JSON.stringify(data)
            })
            .then(function(response) {
                    //success
                   
                    console.log(response);
                    message.style.visibility = 'visible';
                    
                },
                function(response) { // optional
                    //failed
                    console.log(response);
                });
    }

});
</script>