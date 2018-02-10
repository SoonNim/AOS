/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var activeClass ="list-group-item justify-content-between active";
var inactiveClass="list-group-item list-group-item-action justify-content-between";

document.getElementById('choiseHistory').onclick = 
function()
{
  //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
  if(document.getElementById('hereChoiseHistory').style.display == "none")
  {
    document.getElementById('hereChoiseHistory').style.display = "block";
    document.getElementById('choiseHistory').className=activeClass;
    
    document.getElementById('hereChoiseReview').style.display = "none";
    document.getElementById('choiseReview').className=inactiveClass;
    
    document.getElementById('hereChoiseSetting').style.display = "none";
    document.getElementById('choiseSetting').className=inactiveClass;
    
    document.getElementById('hereChoiseFriends').style.display = "none";
    document.getElementById('choiseFriends').className=inactiveClass;
    
    document.getElementById('hereChoiseMain').style.display = "none";
    document.getElementById('choiseMain').className=inactiveClass;
    
    document.getElementById('hereChoiseFollow').style.display = "none";
    document.getElementById('choiseFollow').className=inactiveClass;
  }
  return false; //Un simple return false ici désacative la suite de l'événement : le href
}

document.getElementById('choiseReview').onclick = 
function()
{
  //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
  if(document.getElementById('hereChoiseReview').style.display == "none")
  {
    document.getElementById('hereChoiseHistory').style.display = "none";
    document.getElementById('choiseHistory').className=inactiveClass;
    
    document.getElementById('hereChoiseReview').style.display = "block";
    document.getElementById('choiseReview').className=activeClass;
    
     document.getElementById('hereChoiseSetting').style.display = "none";
     document.getElementById('choiseSetting').className=inactiveClass;
     
    document.getElementById('hereChoiseFriends').style.display = "none";
    document.getElementById('choiseFriends').className=inactiveClass;
    
    document.getElementById('hereChoiseMain').style.display = "none";
    document.getElementById('choiseMain').className=inactiveClass;
    
    document.getElementById('hereChoiseFollow').style.display = "none";
    document.getElementById('choiseFollow').className=inactiveClass;
  }
  return false; //Un simple return false ici désacative la suite de l'événement : le href
}

document.getElementById('choiseSetting').onclick = 
function()
{
  //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
  if(document.getElementById('hereChoiseSetting').style.display == "none")
  {
    document.getElementById('hereChoiseHistory').style.display = "none";
    document.getElementById('choiseHistory').className=inactiveClass;
    
    document.getElementById('hereChoiseReview').style.display = "none";
    document.getElementById('choiseReview').className=inactiveClass;
    
     document.getElementById('hereChoiseSetting').style.display = "block";
     document.getElementById('choiseSetting').className=activeClass;
    
    document.getElementById('hereChoiseFriends').style.display = "none";
    document.getElementById('choiseFriends').className=inactiveClass;
    
    document.getElementById('hereChoiseMain').style.display = "none";
    document.getElementById('choiseMain').className=inactiveClass;
    
    document.getElementById('hereChoiseFollow').style.display = "none";
    document.getElementById('choiseFollow').className=inactiveClass;
  }
  return false; //Un simple return false ici désacative la suite de l'événement : le href
}

document.getElementById('choiseFriends').onclick = 
function()
{
  //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
  if(document.getElementById('hereChoiseFriends').style.display == "none")
  {
    document.getElementById('hereChoiseHistory').style.display = "none";
    document.getElementById('choiseHistory').className=inactiveClass;
    
    document.getElementById('hereChoiseReview').style.display = "none";
    document.getElementById('choiseReview').className=inactiveClass;
    
     document.getElementById('hereChoiseSetting').style.display = "none";
     document.getElementById('choiseSetting').className=inactiveClass;
     
    document.getElementById('hereChoiseFriends').style.display = "block";
    document.getElementById('choiseFriends').className=activeClass;
    
    document.getElementById('hereChoiseMain').style.display = "none";
    document.getElementById('choiseMain').className=inactiveClass;
    
    document.getElementById('hereChoiseFollow').style.display = "none";
    document.getElementById('choiseFollow').className=inactiveClass;
  }
  return false; //Un simple return false ici désacative la suite de l'événement : le href
}

document.getElementById('choiseMain').onclick = 
function()
{
  //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
  if(document.getElementById('hereChoiseMain').style.display == "none")
  {
    document.getElementById('hereChoiseHistory').style.display = "none";
    document.getElementById('choiseHistory').className=inactiveClass;
    
    document.getElementById('hereChoiseReview').style.display = "none";
    document.getElementById('choiseReview').className=inactiveClass;
    
     document.getElementById('hereChoiseSetting').style.display = "none";
     document.getElementById('choiseSetting').className=inactiveClass;
     
    document.getElementById('hereChoiseFriends').style.display = "none";
    document.getElementById('choiseFriends').className=inactiveClass;
    
    document.getElementById('hereChoiseMain').style.display = "block";
    document.getElementById('choiseMain').className=activeClass;
    
    document.getElementById('hereChoiseFollow').style.display = "none";
    document.getElementById('choiseFollow').className=inactiveClass;
  }
  return false; //Un simple return false ici désacative la suite de l'événement : le href
}

document.getElementById('choiseFollow').onclick = 
function()
{
  //Si la table est masquée alors on l'affiche et on met à jour le texte du lien
  if(document.getElementById('hereChoiseFollow').style.display == "none")
  {
    document.getElementById('hereChoiseHistory').style.display = "none";
    document.getElementById('choiseHistory').className=inactiveClass;
    
    document.getElementById('hereChoiseReview').style.display = "none";
    document.getElementById('choiseReview').className=inactiveClass;
    
     document.getElementById('hereChoiseSetting').style.display = "none";
     document.getElementById('choiseSetting').className=inactiveClass;
     
    document.getElementById('hereChoiseFriends').style.display = "none";
    document.getElementById('choiseFriends').className=inactiveClass;
    
    document.getElementById('hereChoiseMain').style.display = "none";
    document.getElementById('choiseMain').className=inactiveClass;
    
    document.getElementById('hereChoiseFollow').style.display = "block";
    document.getElementById('choiseFollow').className=activeClass;
  }
  return false; //Un simple return false ici désacative la suite de l'événement : le href
}