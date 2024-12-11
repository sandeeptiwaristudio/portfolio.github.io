rescuefieldvalues(['data']);
google.load("elements","1",{packages:"transliteration","nocss":true});function onLoad(){var options={sourceLanguage:google.elements.transliteration.LanguageCode.ENGLISH,destinationLanguage:[google.elements.transliteration.LanguageCode.NEPALI],shortcutKey:'ctrl+g',transliterationEnabled:true};var control=new google.elements.transliteration.TransliterationControl(options);control.makeTransliteratable(['data']);control.c.qc.t13n.c[3].c.d.keyup[0].ia.F.p='https://www.google.com';}
google.setOnLoadCallback(onLoad);
function printTextArea() {
        childWindow = window.open('','childWindow','location=yes, menubar=yes, toolbar=yes');
        childWindow.document.open();
        childWindow.document.write('<html><head></head><body>');
        childWindow.document.write(document.getElementById('data').value.replace(/\n/gi,'<br>'));
        childWindow.document.write('</body></html>');
        childWindow.print();
        childWindow.document.close();
        childWindow.close();
      }
	  
function go(converter) {
window.location.href = converter;
}
function setLocalData()
{
    if (typeof(Storage) !== "undefined") {
    localStorage.setItem("nepaliText", data.value );
    }
	window.open("", "_blank")	
}
function setLocalDataUni()
{
    	
}
function numformat()
{
var text = document.getElementById('data').value;
text = text.replace(/à¥¦/g, "0");
text = text.replace(/à¥§/g, "1");
text = text.replace(/à¥¨/g, "2");
text = text.replace(/à¥©/g, "3");
text = text.replace(/à¥ª/g, "4");
text = text.replace(/à¥«/g, "5");
text = text.replace(/à¥¬/g, "6");
text = text.replace(/à¥­/g, "7");
text = text.replace(/à¥®/g, "8");
text = text.replace(/à¥¯/g, "9");
etoh.data.value = text;
document.getElementById("data").focus();
}

function fncopy() {
  // Get the text field
  var copyText = document.getElementById('data');

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
}

function myFunction6() {
    document.getElementById("etoh").reset();
	document.getElementById("data").focus();
	document.getElementById('charCountNoSpace').innerHTML = 0;
	document.getElementById('wordCount').innerHTML = 0;
	document.getElementById('totalChars').innerHTML = 0;
	document.getElementById('charCount').innerHTML = 0;
}
function myFunction1() {
    etoh.data.value+='à¥¤';
	document.getElementById("data").focus();
}
function myFunction2() {
    etoh.data.value+='à¥¥';
	document.getElementById("data").focus();
}
function myFunction3() {
    etoh.data.value+='à¥°';
	document.getElementById("data").focus();
}
function myFunction5() {
    etoh.data.value+=' à¥ ';
	document.getElementById("data").focus();
}

function counter() {
    var value = document.getElementById('data').value;
    if (value.length == 0) {	     
		  document.getElementById('wordCount').innerHTML = 0;
		  document.getElementById('totalChars').innerHTML = 0;
		  document.getElementById('charCount').innerHTML = 0;
		  document.getElementById('charCountNoSpace').innerHTML = 0;		  
          return;
    }
    var regex = /\s+/gi;
    var wordCount = value.trim().replace(regex, ' ').split(' ').length;
    var totalChars = value.length;
    var charCount = value.trim().length;
    var charCountNoSpace = value.replace(regex, '').length;
	document.getElementById('charCountNoSpace').innerHTML = charCountNoSpace;	
	document.getElementById('wordCount').innerHTML = wordCount;
	document.getElementById('totalChars').innerHTML = totalChars;
	document.getElementById('charCount').innerHTML = charCount;	  
};
function dataLoaded()
{
function init() {
        if (localStorage["data"]) {
		document.getElementById('data').value = localStorage["data"];
          
        }
    }
init();
data.addEventListener('keypress',counter);
}
data.addEventListener('keyup',sendCode);
function sendCode()
{
	localStorage[document.getElementById('data').getAttribute('name')] = document.getElementById('data').value;	 
}
!function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:r})},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=81)}({81:function(t,e,n){t.exports=n(82)},82:function(t,e,n){"use strict";var r=n(83);window.ic=function(t,e){r(t,e)}},83:function(t,e,n){"use strict";t.exports=function(t,e){let n=document.getElementById(e),r=n.value;const o=n.selectionStart,c=t.value;n.value=r.substring(0,o)+c+r.substring(o),function(t,e){let n;t.createTextRange?((n=t.createTextRange()).move("character",e),n.select()):(t.focus(),void 0!==t.selectionStart&&t.setSelectionRange(e,e))}(n,o+c.length)}}});