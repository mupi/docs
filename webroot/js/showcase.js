
jQuery(document).ready(function() {
    jQuery(".cpicker  .cTool input").unbind();
    jQuery(".cpicker  .cTool input").off();
    jQuery(".cpicker  .cTool input").undelegate();   
    jQuery(".cpicker  .cTool input").focus(function(e){
        e.stopPropagation();
        e.preventDefault();
        return false;
    });
});
// Color pickers in different flavors.
// -----------------------------------

var cpDefault = ColorPicker(jQuery(".cpicker #default")[0], updateInputs);

// Inputs.
// -------


var iHex = jQuery(".cpicker .cTool .hex")[0];
var iR =  jQuery(".cpicker  .cTool .rgb_r")[0];
var iG =  jQuery(".cpicker  .cTool .rgb_g")[0];
var iB =  jQuery(".cpicker  .cTool .rgb_b")[0];
var iH =  jQuery(".cpicker  .cTool .hsv_h")[0];
var iS =  jQuery(".cpicker  .cTool .hsv_s")[0];
var iV =  jQuery(".cpicker  .cTool .hsv_v")[0];

var rgbCSS = jQuery(".cpicker  .cTool .rgb_css")[0];
var hsvCSS = jQuery(".cpicker  .cTool .hsv_css")[0];

var squareColor = jQuery(".cpicker  .cTool .squareColor")[0];
var textColor = jQuery(".cpicker  .cTool .text-color")[0];

function updateInputs(hex) {

    var rgb = ColorPicker.hex2rgb(hex);
    var hsv = ColorPicker.hex2hsv(hex);

    iHex.value = hex;
    
    iR.value = rgb.r;
    iG.value = rgb.g;
    iB.value = rgb.b;

    iH.value = hsv.h.toFixed(2);
    iS.value = hsv.s.toFixed(2);
    iV.value = hsv.v.toFixed(2);

    rgbCSS.innerHTML = 'rgb(' + rgb.r + ', ' + rgb.g + ', ' + rgb.b + ')';
    hsvCSS.innerHTML = 'hsv(' + hsv.h.toFixed(2) + ', ' + hsv.s.toFixed(2) + ', ' + hsv.v.toFixed(2) + ')';
    
    squareColor.style.backgroundColor = hex;
    textColor.style.color = hex;
}

function updateColorPickers(hex) {
    
    cpDefault.setHex(hex);
}


var initialHex = '#f4329c';
updateColorPickers(initialHex);


iHex.onchange = function() { updateColorPickers(iHex.value); };

iR.onchange = function() { updateColorPickers(ColorPicker.rgb2hex({ r: iR.value, g: iG.value, b: iB.value })); }
iG.onchange = function() { updateColorPickers(ColorPicker.rgb2hex({ r: iR.value, g: iG.value, b: iB.value })); }
iB.onchange = function() { updateColorPickers(ColorPicker.rgb2hex({ r: iR.value, g: iG.value, b: iB.value })); }

iH.onchange = function() { updateColorPickers(ColorPicker.hsv2hex({ h: iH.value, s: iS.value, v: iV.value })); }
iS.onchange = function() { updateColorPickers(ColorPicker.hsv2hex({ h: iH.value, s: iS.value, v: iV.value })); }
iV.onchange = function() { updateColorPickers(ColorPicker.hsv2hex({ h: iH.value, s: iS.value, v: iV.value })); }
