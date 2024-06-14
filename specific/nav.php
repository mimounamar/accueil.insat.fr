<nav class="nes-container is-rounded">
    <img class="controller-btn" src="../assets/cross.png" style="height: 90px">
    <ul class="nav-list" id="nav-list">
        <li class="nav-lis-element nav-variable-control">
            <a class="nes-btn" id="toggle-btn" onclick="toggleNav()">Ξ</a>
        </li>
        <li class="nav-lis-element nav-variable">
            <a class="nes-btn" href="index.php">Accueil</a>
        </li>
        <li class="nav-lis-element nav-variable">
            <a class="nes-btn">Planning</a>
        </li>
        <li class="nav-lis-element nav-variable">
            <a class="nes-btn">Blouse</a>
        </li>
        <li class="nav-lis-element nav-variable">
            <a class="nes-btn">Vie à l'INSA</a>
        </li>
        <li class="nav-lis-element nav-variable">
            <a class="nes-btn">Prévention</a>
        </li>
        <li class="nav-lis-element nav-variable">
            <a class="nes-btn" href="https://parrainage.insat.fr/ppa">Parrainage</a>
        </li>
    </ul>
    <img class="controller-btn" src="../assets/ABXY.png" style="height: 100px">
</nav>

<script>
    let navToggled = false;
    function toggleNav() {
        if (navToggled) {
            let elements = document.getElementsByClassName("nav-variable")
            Array.from(elements).forEach(element => {
                element.style.display = "none";
            })
            document.getElementById("toggle-btn").innerText = "Ξ";
            navToggled = false;
        } else {
            let elements = document.getElementsByClassName("nav-variable")
            Array.from(elements).forEach(element => {
                element.style.display = "block";
            })
            document.getElementById("toggle-btn").innerText = "Χ";
            navToggled = true;
        }
    }
</script>