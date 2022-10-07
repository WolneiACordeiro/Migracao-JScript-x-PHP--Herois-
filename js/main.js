window.onload = function reset_form () {
    var dropDown = document.getElementById("hero_options"); dropDown.selectedIndex = 0;
    document.getElementById("marvel").checked = true
    document.getElementById("dc").checked = false
    document.getElementById("hero_repeat").value = "1";
}

window.onload = marvel_check();

  function marvel_check() {
    document.getElementById("hero_area").innerHTML = `
    <select id="hero_options" name="hero_name" onchange="hero_image_marvel()">
    <option value="oneaboveall">One Above All</option>
    <option value="panteranegra">Pantera Negra</option>
    <option value="homemaranha">Homem Aranha</option>
    <option value="homemdeferro">Homem de Ferro</option>
    <option value="capitaoamerica">Capitão América</option>
    <option value="homemformiga">Homem Formiga</option>
    <option value="hulk">Hulk</option>
    <option value="thor">Thor</option>
    <option value="visao">Visão</option>
    <option value="wolverine">Wolverine</option>
    </select>
    `;
    document.getElementById("hero_repeat").value = "1";
  }

  function dc_check() {
    document.getElementById("hero_area").innerHTML = `
    <select id="hero_options" name="hero_name" onchange="hero_image_dc()">
    <option value="batman">Batman</option>
    <option value="superman">Superman</option>
    <option value="mulhermaravilha">Mulher Maravilha</option>
    <option value="ajax">Ajax</option>
    <option value="robin">Robin</option>
    <option value="flash">Flash</option>
    <option value="aquaman">Aquaman</option>
    <option value="ciborgue">Ciborgue</option>
    <option value="arqueiroverde">Arqueiro Verde</option>
    <option value="raionegro">Raio Negro</option>
    </select>
    `;
    document.getElementById("hero_repeat").value = "1";
  }

  function hero_image_marvel() {
    var valorHeroiMarvel = document.getElementById("hero_options").value;
    document.getElementById("hero_image").innerHTML = `<img src="img/marvel/${valorHeroiMarvel}.jpg">`;
  }

  function hero_image_dc() {
    var valorHeroiDc = document.getElementById("hero_options").value;
    document.getElementById("hero_image").innerHTML = `<img src="img/dc/${valorHeroiDc}.jpg">`;
  }
  