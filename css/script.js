
var members =  document.getElementById("membres-compteur"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
var questions =  document.getElementById("questions-compteur"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
var ateliers =  document.getElementById("ateliers-compteur"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
var video =  document.getElementById("video-compteur"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
 
function countdown(node, n, inc, cpt) {
  cpt = cpt + inc
  node.innerHTML = cpt
  if( cpt < n ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(() => {
         countdown(node, n, inc, cpt)
        },20);
  }
}
 
setTimeout(() => {
    countdown(members, 21000, 300, 0)
    countdown(questions, 3500, 50, 0)
    countdown(ateliers, 1000, 10, 0)
    countdown(video, 500, 5, 0)
});

