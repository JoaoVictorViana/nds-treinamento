window.onload = () => {
    const Hamburguer = document.querySelector('.Hamburguer');
    const Dropdowns = document.getElementsByClassName('Dropdown');
    
    Hamburguer.onclick = () => {
        const DropdownLists = document.getElementsByClassName('DropdownList');
        const SidebarItems = document.getElementsByClassName('SidebarItem').length
            ? document.getElementsByClassName('SidebarItem')
            : document.getElementsByClassName('SidebarItemClosed');

        const LogoOpened = document.querySelector('.LogoOpened');
        const LogoClosed = document.querySelector('.LogoClosed');

        Array.from(DropdownLists).map(DropdownList => {
            if (!DropdownList.classList.contains('Hidden')) {
                DropdownList.classList.toggle('Hidden');
            }
        });

        Array.from(SidebarItems).map(SidebarItem => {
            const SidebarText = SidebarItem.querySelector('.SidebarText');
            const SidebarArrow = SidebarItem.querySelector('.SidebarArrow');

            if (SidebarArrow) {
                SidebarArrow.classList.toggle('Hidden');
            }

            SidebarItem.classList.toggle('SidebarItemClosed');
            SidebarItem.classList.toggle('SidebarItem');
            SidebarItem.classList.toggle('Center');
            SidebarText.classList.toggle('Hidden');
        });



        LogoOpened.classList.toggle('Hidden');
        LogoClosed.classList.toggle('Hidden');
    }

    Array.from(Dropdowns).map(Dropdown => {
        Dropdown.onclick = () => {
            const DropdownList = Dropdown.querySelector('.DropdownList');
            const SidebarArrow = Dropdown.querySelector('.SidebarArrow');

            SidebarArrow.classList.toggle('Rotate');
            DropdownList.classList.toggle('Hidden');

        }
    });
}