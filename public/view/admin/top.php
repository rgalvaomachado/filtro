<head>
    <script src="/public/view/admin/top.js"></script>
    <script src="/public/view/admin/menu.js"></script>
</head>
<div id="topMenu" class="top-menu-desktop">
    <input type="checkbox" id="slideMenu" checked style="display: none;">
    <label class="slideMenu" for="slideMenu">
        <i class="fa fa-bars" aria-hidden="true" onclick="slideMenu()"></i>
    </label>
    <!-- <img src="../public/img/hubis.png" id="logo-hubis"> -->
    <div class="logoutMenu" id="usuarioLogado">
        <label>
            <?php
                // echo $_SESSION['usuario'];
            ?>
        </label>
        <a class="logoutMenu"><i class="fa fa-sign-out" aria-hidden="true" onclick="logout()"></i></a>
    </div>
</div>