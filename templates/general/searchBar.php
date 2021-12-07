<form class="search-bar">

    <input type="text" class="search" id="inputCherche" name="shearch-bar" placeholder="Qu'est-ce que vous cherchez ?" >
  
        <ul class="suggestions">

    <!-- <li>Filter for a laguage</li>

    <li>or a function</li> -->

        </ul>
</form>

<!-- <form class="shearch-bar">
    <input type="text" name="shearch-bar" placeholder="Rechercher">
</form> -->
<script>
// SEARCH BAR

const endpoint = '../find.json';

const proprieties = [];

fetch(endpoint)

  .then(blob => blob.json())

  .then(data => proprieties.push(...data));



function findMatches(wordToMatch, proprieties) {

  return proprieties.filter(place => {

    // here we need to figure out if the propriete or langage matches what was searched

    const regex = new RegExp(wordToMatch, 'gi');

    return place.fonction.match(regex) || place.propriete.match(regex) || place.langage.match(regex)

    

  });

}

function numberWithCommas(x) {

  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');

}


var sideBarContent=document.getElementById("inputCherche");
function displayMatches() {

  const matchArray = findMatches(this.value, proprieties);

  const html = matchArray.map(place => {

    const regex = new RegExp(this.value, 'gi');

    const langageName = place.langage.replace(regex, `<span class="hl">${this.value}</span>`);
    
    const proprieteName = place.propriete.replace(regex, `<span class="hl">${this.value}</span>`);
    const fonctionName = place.fonction.replace(regex, `<span class="hl">${this.value}</span>`);

       

    
    return   `
    
    
    <li>
    
    <span class="name" style=>${langageName}, <span class="langage"  style=>${proprieteName}</span> </span>
    
    
    <a href="index.php?<?=$table?>=<?=$tableFonctions?>&amp;<?=$tuple?>=${fonctionName}" <span class="fonction" style=>${fonctionName}</span> </a>
    
    
    
    
    </li>
    
    `;
    
    
  }).join('');
 
  //Affichage ou non la sidebar
  if (sideBarContent.value.length>0) {
    document.getElementById("sidebar").style.visibility = "hidden";
    console.log (sideBarContent.value.length); 
    
  
    if (sideBarContent.value.length>1) {
    // console.log (sideBarContent.value.length);
    document.getElementsByClassName("suggestions")[0].style.visibility = 'visible';
    suggestions.innerHTML = html;
    }
    else{
      document.getElementsByClassName("suggestions")[0].style.visibility = 'hidden';
    }
  
  }
  else{
    document.getElementById("sidebar").style.visibility = "";
  
    
  }
}




const searchInput = document.querySelector('.search');


const suggestions = document.querySelector('.suggestions');



searchInput.addEventListener('change', displayMatches);

searchInput.addEventListener('keyup', displayMatches);
</script>