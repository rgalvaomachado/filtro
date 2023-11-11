<head>
    <script src="/public/js/top.js"></script>
</head>
<div id="topMenu" class="top-menu-mobile">
    <input type="checkbox" id="slideMenu" checked style="display: none;">
    <label class="slideMenu" for="slideMenu">
        <i class="fa fa-bars" aria-hidden="true" onclick="slideMenu()"></i>
    </label>
    <div class="logoutMenu" id="usuarioLogado">
        <label>
            <?php
                echo $_SESSION['usuario'];
            ?>
        </label>
        
    </div>
</div>