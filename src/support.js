// <!-- 763272490
// This script is (C) Copyright 2004 Jim Tucek
// Leave these comments alone!  For more info, visit
// www.jracademy.com/~jtucek/email/ 

function bleed(cliff,tree,sand) {
cliff += ' ';
var airplane = cliff.length;
var finger = 0;
var difference = '';
for(var hello = 0; hello < airplane; hello++) {
finger = 0;
while(cliff.charCodeAt(hello) != 32) {
finger = finger * 10;
finger = finger + cliff.charCodeAt(hello)-48;
hello++;
}
difference += String.fromCharCode(see(finger,tree,sand));
}
parent.location = 'm'+'a'+'i'+'l'+'t'+'o'+':'+difference;
}

function forego(encounter,enthusiasm,stipulation) {
encounter += ' ';
var experiment = encounter.length;
var man = 0;
for(var game = 0; game < experiment; game++) {
man = 0;
while(encounter.charCodeAt(game) != 32) {
man = man * 10;
man = man + encounter.charCodeAt(game)-48;
game++;
}
//document.write('&');
//document.write('#');
//document.write(see(man,enthusiasm,stipulation));
document.write(String.fromCharCode(see(man,enthusiasm,stipulation)));
}
}

function see(lake,lion,matrix) {
if (matrix % 2 == 0) {
maximum = 1;
for(var same = 1; same <= matrix/2; same++) {
minimum = (lake*lake) % lion;
maximum = (minimum*maximum) % lion;
}
} else {
maximum = lake;
for(var death = 1; death <= matrix/2; death++) {
minimum = (lake*lake) % lion;
maximum = (minimum*maximum) % lion;
}
}
return maximum;
}

function support(){
return bleed("1040 14869 12693 12693 112 15966 6263 16828 6263 5639 13107 4067 5799 12693 5639 112 1931 4067 13107 2742 6263 1931 17976 5639 14483 17976 112 14364",18527,10423);
}