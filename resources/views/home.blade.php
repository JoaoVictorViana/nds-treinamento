<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysTemplate</title>
    <link rel="stylesheet" href="{{ url('css/home.css') }}">
</head>
<body>
    <div class="MainContent">
        <div class="Sidebar">
            <div class="Logo">
                <img class="LogoOpened" src="https://via.placeholder.com/100" alt="">
                <img class="LogoClosed Hidden" src="https://via.placeholder.com/50" alt="">
            </div>

            <a href="" class="SidebarItem">
                <img class="SidebarIcone" src="https://via.placeholder.com/25" alt="">
                <p class="SidebarText">Intranet</p>
            </a>

            <a href="" class="SidebarItem">
                <img class="SidebarIcone" src="https://via.placeholder.com/25" alt="">
                <p class="SidebarText">Página Inicial</p>
            </a>
            
            <div class="Dropdown">
                <div class="DropdownWrap">
                    <a class="SidebarItem">
                        <img class="SidebarIcone" src="https://via.placeholder.com/25" alt="">
                        <p class="SidebarText">Cadastro</p>
                        <img class="SidebarArrow" src="{{ url('img/arrow.svg') }}" alt="">
                    </a>
                </div>

                <div class="DropdownList Hidden">
                    <a href="" class="DropdownItem">Pessoa</a>
                    <a href="" class="DropdownItem">Setor</a>
                    <a href="" class="DropdownItem">Lotação</a>
                    <a href="" class="DropdownItem">Função</a>
                    <a href="" class="DropdownItem">Cargo</a>
                    <a href="" class="DropdownItem">Empresa</a>
                    <a href="" class="DropdownItem">Local</a>
                </div>
    
            </div>

            <a href="" class="SidebarItem">
                <img class="SidebarIcone" src="https://via.placeholder.com/25" alt="">
                <p class="SidebarText">Aniversariantes</p>
            </a>

            <a href="" class="SidebarItem">
                <img class="SidebarIcone" src="https://via.placeholder.com/25" alt="">
                <p class="SidebarText">Ajuda</p>
            </a>

            <a href="" class="SidebarItem">
                <img class="SidebarIcone" src="https://via.placeholder.com/25" alt="">
                <p class="SidebarText">Banco de Dados</p>
            </a>
        </div>

        <div class="Container">
            <div class="Navbar">
                <img class="Hamburguer" src="https://via.placeholder.com/25" alt="">
                <div class="NavbarMenus">
                    <img class="NavbarLink" src="https://via.placeholder.com/25" alt="">
                    <img class="NavbarLink" src="https://via.placeholder.com/25" alt="">
                    <img class="NavbarLink" src="https://via.placeholder.com/25" alt="">
                </div>

            </div>
            <div class="Dash"></div>
        </div>
    </div>

    <script src="{{ url('js/home.js') }}"></script>
</body>
</html>