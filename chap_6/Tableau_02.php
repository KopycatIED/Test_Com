<!doctype html>
<!--sources -->
<!--https://openclassrooms.com/courses/maitriser-les-tableaux-html-avec-javascript -->
<!--https://www.w3schools.com/js/js_json_intro.asp-->
<!--  https://fr.eloquentjavascript.net/chapter12.html#key2  -->
<!-- https://openclassrooms.com/courses/creez-des-pages-web-interactives-avec-javascript/decouvrez-le-dom -->

	<html>
		<head>
			<meta charset="utf-8">
			<title>Un premier exemple de JavaScript</title>
		</head>
		<body style="background-color:#efface;">
			<p id="par1">On va tout déchirer !!
			<p id="par2">Allez la France
			<p id="par3">
			<p>
				<button id="b1" type="button" onclick="clic()">Taper ici</button>
			</p>
			<script src="tableau_openc_01.js">

				
				// test JSDOM
				//const jsdom = require("jsdom");
				//const { JSDOM } = jsdom;
				
				// 
 				//const dom = new JSDOM(`<!DOCTYPE html><p>Hello world</p>`);
				//console.log(dom.window.document.querySelector("p").textContent); // "Hello world"

				//
				//const dom = new JSDOM(`<!DOCTYPE html>hello`);
 
				//dom.serialize() === "<!DOCTYPE html><html><head></head><body>hello</body></html>";
 
 				

				// Contrast with:
				/*dom.window.document.documentElement.outerHTML === "<html><head></head><body>hello</body></html>";

				if (document.body.nodeType === document.ELEMENT_NODE) {

    console.log("Body est un noeud élément");
    par1="Body est un noeud élément";
} else {

    console.log("Body est un noeud textuel");
    par1="Body est un noeud élément";
}
// Accès au premier enfant du noeud body

var i = 0;

for (i = 0; i < document.body.childNodes.length; i++) {

    console.log(document.body.childNodes[i]);

}*/

			</script>
		</body>
	</html>